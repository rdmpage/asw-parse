<?php

/*

Use BioNames to match records.

We match on both taxonomic name and publication to try and avoid spurious hits.
Also support matching on whole citations or on microcitations.

*/

error_reporting(E_ALL);


$pdo = new PDO('sqlite:asw.db');

require_once (dirname(__FILE__) . '/compare.php');


//----------------------------------------------------------------------------------------
function get($url)
{
	$opts = array(
	  CURLOPT_URL =>$url,
	  CURLOPT_FOLLOWLOCATION => TRUE,
	  CURLOPT_RETURNTRANSFER => TRUE
	);
	
	$ch = curl_init();
	curl_setopt_array($ch, $opts);
	$data = curl_exec($ch);
	$info = curl_getinfo($ch); 
	curl_close($ch);
	
	
	return $data;
			
}	

//----------------------------------------------------------------------------------------
function do_sqlite_query($sql)
{
	global $pdo;
	
	$stmt = $pdo->query($sql);

	$data = array();

	while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {

		$item = new stdclass;
		
		$keys = array_keys($row);
	
		foreach ($keys as $k)
		{
			if ($row[$k] != '')
			{
				$item->{$k} = $row[$k];
			}
		}
	
		$data[] = $item;
	
	
	}
	
	return $data;	
}

//----------------------------------------------------------------------------------------
// Output SQL to update local database
function output_match($obj, $publication)
{
	global $database_name;
	
	$doi 	= $jstor = $biostor = $handle = $url_link = $pdf_link = $wikidata = $ark = '';
	$issn 	= '';

	//print_r($publication);

	if (isset($publication->identifier))
	{
		foreach ($publication->identifier as $identifier)
		{
			switch ($identifier->type)
			{
				case 'ark':
					$ark = $identifier->id;
					break;			
			
				case 'doi':
					$doi = $identifier->id;
					break;

				case 'biostor':
					$biostor = $identifier->id;
					break;

				case 'jstor':
					$jstor = $identifier->id;
					break;

				case 'handle':
					$handle = $identifier->id;
					break;

				case 'wikidata':
					$wikidata = $identifier->id;
					break;
				
				default:
					break;
			}
		}
	}
	
	
	if (isset($publication->link))
	{
		foreach ($publication->link as $link)
		{
			switch ($link->anchor)
			{
				case 'URL':
					$url_link = $link->url;
					break;

				case 'PDF':
					$pdf_link = $link->url;
					break;
				
				default:
					break;
			}
		}
	}
	
	

	if (isset($publication->journal->identifier))
	{
		foreach ($publication->journal->identifier as $identifier)
		{
			switch ($identifier->type)
			{
				case 'issn':
					$issn = $identifier->id;
					break;
				
				default:
					break;
			}
		}
	}

	// update

	$values = array();
	
	if ($ark != '')
	{
		$values [] = 'ark="' . $ark . '"';
	}	

	if ($doi != '')
	{
		$values [] = 'doi="' . $doi . '"';
	}
	
	if ($biostor != '')
	{
		$values [] = 'biostor="' . $biostor . '"';
	}

	if ($jstor != '')
	{
		$values [] = 'jstor="' . $jstor . '"';
	}
	
	if ($handle != '')
	{
		$values [] = 'handle="' . $handle . '"';
	}								
	
	if ($wikidata != '')
	{
		$values [] = 'wikidata="' . $wikidata . '"';
	}								

	if ($url_link != '')
	{
		$values [] = 'url="' . $url_link . '"';
	}

	if ($pdf_link != '')
	{
		$values [] = 'pdf="' . $pdf_link . '"';
	}


	if ($issn != '')
	{
		$values [] = 'issn="' . $issn . '"';
	}
	
	if (count($values) > 0)
	{							
		echo 'UPDATE publications SET ' . join(",", $values) . ' WHERE guid="' . $obj->id . '";' . "\n"; // reptiles
	}

}

//----------------------------------------------------------------------------------------
// Get publication from BioNames
function get_publication($sici)
{
	global $cached_publications;
	
	if (!isset($cached_publications[$sici]))
	{
		$url = 'http://bionames.org/api/id/' . $sici;
		$json = get($url);

		$publication = json_decode($json);
		
		$cached_publications[$sici] = $publication;
	
	}
	
	return $cached_publications[$sici];
}


//----------------------------------------------------------------------------------------
function publication_to_micro($publication, $cluster)
{
	$string = '';
							
	$terms = array();

	if (isset($cluster->taxonAuthor))
	{
		$terms[] = $cluster->taxonAuthor;
	}								

	if (isset($publication->journal))
	{
		if (isset($publication->journal->name))
		{
			$name = $publication->journal->name;
			
			echo "-- *** $name ***\n";
		
			// any hack of the name needed?
			
			switch ($name)
			{
				case 'Tyo To Ga':
					$name = 'Trans. lepid. Soc. Japan';
					break;
					
				case 'Acta Zoologica Cracoviensia Ser B-Invertebrata, 54B(1-2), Jun':
					$name = 'Acta Zool. Cracov.';
					break;
			
				default:
					break;
			}
		
			$terms[] = $name;
		}
		if (isset($publication->journal->volume))
		{
			$terms[] = $publication->journal->volume;
		}

	}

	if (isset($cluster->microreference))
	{
		$terms[] = $cluster->microreference[0];
	}								
	
	//print_r($terms);

	$string = join(' ', $terms);

	return $string;
}

//----------------------------------------------------------------------------------------

// Avoid over hitting BioNames
$cached_publications = array();

// get a set of records and parse them
$page 	= 10;
$offset = 0;
$done 	= false;

$match_full_citation = true; // are we matching full citation or micro?

while (!$done)
{
 	$sql = 'SELECT publications.guid AS id, publications.title, publications.journal, publications.volume, publications.spage, publications.epage, names.scientificName, unstructured, publications.authors FROM publications 
INNER JOIN names_publications ON publications.guid = names_publications.publication_id
INNER JOIN names ON names.name_id = names_publications.name_id
WHERE doi is NULL';

// WHERE names.year=2018 AND doi is NULL';
//$sql .= ' AND names.scientificName LIKE "Amazophrynella%"';
//WHERE publications.journal="ZooKeys" AND doi is NULL';

	$sql .= ' AND names.year > 2006';

	$sql .= ' LIMIT ' . $page . ' OFFSET ' . $offset . ';';

  	
  	//echo $sql . "\n";
  	
  //exit();
  
   	$data = do_sqlite_query($sql);

	foreach ($data as $obj)
	{
		// print_r($obj);
		
		if (!preg_match('/^[A-Z]\w+/', $obj->scientificName))
		{
			continue;
		}
		
		if (1)
		{
			$publication_string = $obj->unstructured;
		}
		else
		{
			$terms = array();
			$keys = array('year', 'title', 'journal', 'volume', 'spage', 'epage');
			foreach ($keys as $k)
			{
				if (isset($obj->{$k}))
				{
					$terms[] = $obj->{$k};
				}
			}
			$publication_string  = join(' ', $terms);
		}
		
		echo "-- $publication_string\n";
		echo "-- " . $obj->scientificName . "\n";
		
		$url = 'http://bionames.org/api/search/' . urlencode($obj->scientificName); 

		$json = get($url);
	
		$result = json_decode($json);
		
		//print_r($result);
		
		// match based on name, this works if name is a new name as BioNames only has l
		// iterature for new names
		if (1)
		{
			$clusters = array();		
			if (isset($result->results->facets->nameCluster))
			{
				foreach ($result->results->facets->nameCluster as $k => $namecluster)
				{
					$clusters[] = $k;
				}
			}
		
			foreach ($clusters as $cluster_id)
			{
				$url = 'http://bionames.org/api/id/' . $cluster_id;
				$json = get($url);

				$cluster = json_decode($json);
		
				if ($cluster)
				{
					foreach ($cluster->names as $name)
					{
						if (isset($name->publication))
						{
							// get citation string from 
							$bionames_publication = $name->publication;
									
									
							$publication = null;
										
							/*		
												
							if (!$match_full_citation) // micro
							{
								if (isset($name->publishedInCitation))
								{
									$publication = get_publication($name->publishedInCitation);
									if ($publication)
									{
										$micro_citation = publication_to_micro($publication, $cluster);
										if ($micro_citation != '')
										{
											$bionames_publication = $micro_citation;
										}
									}
								}
							}	
							
							*/	
							
							if (isset($name->publishedInCitation))
							{
								$publication = get_publication($name->publishedInCitation);
								if ($publication)
								{
									if (!$match_full_citation)
									{
										$micro_citation = publication_to_micro($publication, $cluster);
										if ($micro_citation != '')
										{
											$bionames_publication = $micro_citation;
										}
									}
								}
							}
											
						
							// compare
							if (0)
							{
								echo "\n";
								$result = compare_common_subsequence($publication_string, $bionames_publication, true);
								echo "\n";
							}
							else
							{
								$result = compare_common_subsequence($publication_string, $bionames_publication, false);						
							}
	
							echo "-- " .$publication_string . "\n-- " . $bionames_publication . "\n";
							echo "-- [" . $result->normalised[0] . ', ' . $result->normalised[1] ."]\n";

							$matched = false;
							
							$threshold_lower = 0.6; // how much is a substring of the other
							$threshold_upper = 0.8; // very good match

							if (!$match_full_citation)
							{
								$threshold_lower = 0.5; // how much is a substring of the other
								$threshold_upper = 0.8; // very good match
							}

							if ($result->normalised[1] > $threshold_upper)
							{
								// one string is almost an exact substring of the other
								if ($result->normalised[0] > $threshold_lower)
								{
									// and the shorter string matches a good chunk of the bigger string
									$matched = true;													
								}
							}

							if ($matched)
							{
								echo "-- Matched\n";
								
								echo "-- Cluster $cluster_id\n";
								
								if ($publication)
								{
									output_match($obj, $publication);								
								}
								
								//echo 'UPDATE name SET ion=' . str_replace('cluster/', '', $cluster_id) . ' WHERE id=' . $obj->nameid . ';' . "\n";
								//echo 'UPDATE name SET ion=' . str_replace('cluster/', '', $cluster_id) . ' WHERE id=' . $obj->id . ';' . "\n";
							}
						}
					}
				}
			}
			
			echo "\n";
		}	
		else
		{
			// based on articles (search using name)
			// this may catch articles that mention name (e.g., as new combination)
			// it is limited as it only matches on titles, so may miss things 
			// can we fix this?
			$articles = array();
			if (isset($result->results->facets->article))
			{
				$best_match = 0;
				$best_sici = '';
				$matched = false;
			
				foreach ($result->results->facets->article as $sici => $article)
				{
					// compare
					if (0)
					{
						echo "\n";
						$result = compare_common_subsequence($publication_string, $article->term, true);
						echo "\n";
					}
					else
					{
						$result = compare_common_subsequence($publication_string, $article->term, false);						
					}

					echo "-- [" . $result->normalised[0] . ', ' . $result->normalised[1] ."]\n";

					if ($result->normalised[1] > 0.85)
					{
						// one string is almost an exact substring of the other
						if ($result->normalised[0] > 0.5)
						{
							// and the shorter string matches a good chunk of the bigger string
							$matched = true;	
					
							if ($result->normalised[1] > $best_match)
							{
								$best_match = $result->normalised[1];
								$best_sici = $sici;
							}
											
						}
					}
				}
			
				if ($matched)
				{
					// fetch reference
					$url = 'http://bionames.org/api/id/' . $best_sici;
					$json = get($url);

					$publication = json_decode($json);
					
					//print_r($publication);
				
					output_match($obj, $publication);
				}
			}
			
		
		}	
		
		echo "\n-- row --\n\n";
		
	}

	if (count($data) < $page)
	{
		$done = true;
	}
	else
	{
		$offset += $page;
		echo "\n\n-- - page - --\n\n\n";
		//if ($offset > 5) { $done = true; }
	}
	

}

?>
