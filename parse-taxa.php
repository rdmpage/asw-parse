<?php

error_reporting(E_ALL);

require_once (dirname(__FILE__) . '/HtmlDomParser.php');
require_once (dirname(__FILE__) . '/geo.php');
require_once (dirname(__FILE__) . '/taxon_name_parser.php');

use Sunra\PhpSimple\HtmlDomParser;

$table_name = 'namesv2';
$table_name = 'names';

//----------------------------------------------------------------------------------------
function get($url)
{
	$data = null;
	
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
	
	echo $data;
	
	return $data;
}

//----------------------------------------------------------------------------------------
function parse_html($html, $debug = false)
{
	global $table_name;

	// fix some problems
	
	$html = str_replace('<b>—</b>', '', $html);
	$html = str_replace('<b>&nbsp;</b>', '&nbsp;', $html);
	$html = str_replace('</b>&nbsp;<b>', '&nbsp;', $html);
	$html = str_replace('&nbsp;<b>', '&nbsp;', $html);
	$html = str_replace('</b><b>', '', $html);
	$html = preg_replace('/<b>([^<]+)<b>/', '<b>$1', $html);
	

	$pp = new Parser();

	$dom = HtmlDomParser::str_get_html($html);
	
	foreach ($dom->find('div[id=aswContent]') as $div)
	{
		$obj = new stdclass;
		$obj->id = 'x';
		$obj->classification = array();
		$obj->synonyms = array();
		$obj->vernacular_names = array();
		$obj->links = array();
		$obj->comment_references = array();
		
		$obj->rank = '';	
	
		// accepted name
		foreach ($div->find('h2') as $h2)
		{
			//echo $h2->plaintext . "\n"; 
		
			$s = trim($h2->plaintext);
			$s = html_entity_decode($s , ENT_QUOTES | ENT_HTML5, 'UTF-8');
			$obj->accepted = $s;
			
			// parse name
			
			if (preg_match('/(?<year>[0-9]{4})/', $h2->plaintext, $m))
			{
				$obj->year = $m['year'];
				
				// echo $obj->year . "\n";
			}
		}
		
		// classification
		foreach ($div->find('div[id=taxonomy_nav] span') as $span)
		{
			if (preg_match('/(?<rank>[A-Z]\w+):\s+(?<name>.*)/', $span->plaintext, $m))
			{
				$obj->rank = strtolower($m['rank']);
			
				$obj->classification[$obj->rank] = trim($m['name']);
				
			}
		
		}
		
		$path = array_values($obj->classification);
				
		$obj->id = 'http://research.amnh.org/vz/herpetology/amphibia/' . str_replace(' ', '-', join('/', $path));
		$obj->id = str_replace(' ', '-', join('/', $path));
		
		// parse accepted name
		if (isset($obj->accepted))
		{
			// hack
			$s = preg_replace('/,\s+and\s+/', ' & ', $s);
		
			$r = $pp->parse($s);
			//print_r($r);
			//exit();
				
			if ($r->scientificName->parsed)
			{
				$obj->accepted_name = new stdclass;
		
				$obj->accepted_name->nameComplete = $r->scientificName->canonical;
				
				/*
				if (isset($obj->year))
				{
					$obj->accepted_name->year = $obj->year;
				}
				*/
			
				if (isset($r->scientificName->details[0]->genus))
				{
					if ($obj->rank == 'genus')
					{
						$obj->accepted_name->uninomial = $r->scientificName->details[0]->genus->epitheton;
					}
					if (isset($r->scientificName->details[0]->genus->authorship))
					{
						$obj->accepted_name->authorship = $r->scientificName->details[0]->genus->authorship;		
					}
					
					if ($obj->rank == 'species')
					{
						$obj->accepted_name->genusPart = $r->scientificName->details[0]->genus->epitheton;
						if (isset($r->scientificName->details[0]->species))
						{
							$obj->accepted_name->specificEpithet = $r->scientificName->details[0]->species->epitheton;
						}
						if (isset($r->scientificName->details[0]->species->authorship))
						{
							$obj->accepted_name->authorship = $r->scientificName->details[0]->species->authorship;		
						}	
						
						if (isset($r->scientificName->details[0]->species->basionymAuthorTeam))
						{
							if (isset($r->scientificName->details[0]->species->basionymAuthorTeam->year))
							{
								$obj->accepted_name->year = $r->scientificName->details[0]->species->basionymAuthorTeam->year;
							}

						}											
						
																
					}									
				}				
			}
			else
			{
				// failed to parse the name, so hack one together
				$obj->accepted_name = new stdclass;
				$obj->accepted_name->nameComplete = $obj->accepted;
			
			}
			
			$obj->accepted_name->nameComplete = preg_replace('/\x{A0}/u', ' ', $obj->accepted_name->nameComplete);
			
			//print_r($obj);		
		}

		//synonyms
		foreach ($div->find('div[class=synonymy] p') as $synonym)
		{
			// here!
			if (0)
			{
				echo $synonym->plaintext . "\n\n"; 
				echo $synonym->outertext . "\n\n"; 
			}
			
			$synonym_object = new stdclass;
				
			$synonym_object->text = $synonym->plaintext;
			$synonym_object->text  = html_entity_decode($synonym_object->text , ENT_QUOTES | ENT_HTML5, 'UTF-8');
						
			if (preg_match('/^(\s*|\x{A0})$/u', $synonym_object->text))
			{
				break;
			}  
			
			$synonym_object->html = $synonym->outertext;
			$synonym_object->references = array();
			
			$s = 'unknown';
			
			// name
			foreach ($synonym->find('b') as $b)			
			{
				//echo $b->plaintext . "\n";
				//echo $b->outertext . "\n";
			
				$s = trim($b->plaintext);
				$s = html_entity_decode($s , ENT_QUOTES | ENT_HTML5, 'UTF-8');
				
				if ($s == '') continue;
				
				if (!isset($obj->synonyms[$s]))
				{
					$obj->synonyms[$s] = array();
				}
								
				//$r = $pp->parse($s);
				//print_r($r);
				
				break;
			}
			
			if ($s == 'unknown' || $s == '') continue;
			
			
			// reference(s)
			foreach ($synonym->find('a') as $a)
			{
				if (preg_match('/^\.\./', $a->href))
				{
					$link = $a->href;
					$link = preg_replace('/(\.\.\/)+/', '', $link);
					$link = preg_replace('/\.html$/', '', $link);
					$synonym_object->references[] = $link;
				}
			}
			
			// type locality
			if (preg_match('/Type locality: (.*)/', $synonym_object->text, $m ))
			{
				$synonym_object->type_locality = $m[1];
				$synonym_object->type_locality = preg_replace('/\x{A0}(http.*)$/u', '', $synonym_object->type_locality);
			}
			
			// lat lon
			
			if (0)
			{
				// figure this out later
				// ZooBank id
				if (preg_match('/(urn:lsid:zoobank.org:\s*(act|pub):\s*[0-9a-f]{8}\b-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-\b[0-9a-f]{12})\b/i', $synonym_object->text, $m ))
				{
					$lsid = $m[1];
					$lsid = str_replace(' ', '', $lsid);
					$synonym_object->lsid = $lsid;
				}
			}
			
			//echo "|$s|\n";
			
			$obj->synonyms[$s] = $synonym_object;
			
		}
		
		if (0)
		{
			// here
			print_r($obj->synonyms);
			exit();
		}
		
		
		
		// distribution and comments
		foreach ($div->find('h3') as $section)
		{
			$heading = trim($section->plaintext);
			
			switch ($heading)
			{
			
				case 'Distribution':
					$obj->distribution = $section->next_sibling()->plaintext;
					$obj->distribution = html_entity_decode($obj->distribution, ENT_QUOTES | ENT_HTML5, 'UTF-8');
					break;

				case 'Comment':
					$obj->comment = $section->next_sibling()->plaintext;
					$obj->comment = html_entity_decode($obj->comment, ENT_QUOTES | ENT_HTML5, 'UTF-8');
					
					// reference(s)
					foreach ($section->next_sibling()->find('a') as $a)
					{
						$link = $a->href;
						$link = preg_replace('/(\.\.\/)+/', '', $link);
						$link = preg_replace('/\.html$/', '', $link);
						$obj->comment_references[] = $link;
					}
					
					break;
					
				default:
					break;
			}
		}
		
		// links
		foreach ($div->find('ul[class=external-links] li') as $li)
		{
			
			foreach ($li->find('a') as $a)
			{
				$link = $a->href;
				$obj->links[] = $link;
			}
		}
				
		//print_r($obj);
		
		$synonyms = array();
		$references = array();
		
		if (!isset($obj->accepted_name->nameComplete))
		{
			print_r($obj);
			echo "badness\n";
			exit();
			
		}
		
		$accepted = $obj->accepted_name->nameComplete;
		
		// echo "Accepted $accepted\n";
		
		// print_r($obj);
		//exit();
		
		$count = 0;
		
		foreach ($obj->synonyms as $k => $v)
		{
			$s = new stdclass;
			$s->name_id = $obj->id . '#' . $count++;
			$s->taxon_id = $obj->id;
			
			$s->scientificName = $k;
			
			$s->scientificName = preg_replace('/\x{A0}/u', ' ', $s->scientificName);
			
			if (isset($v->references) && count($v->references) > 0)
			{			
				$s->reference_id = $v->references[0];
				if (preg_match('/-([0-9]{4})-/',$s->reference_id, $m))
				{
					$s->year = $m[1];
					
					//echo $k . ' ' . $s->reference_id . ' ' . $s->year . "\n";
				}
				
				if (!isset($s->year))
				{
				
				}
				
				$references[$s->name_id] = array();
				foreach ($v->references as $reference_id)
				{
					$references[$s->name_id][] = $reference_id;
				}
				
			}
			
			echo "-- |" . $s->scientificName . "|" . $accepted. "|\n";
			
						
			if (strcmp($s->scientificName, $accepted) != 0)
			{
				$s->acceptedName = $accepted;
			}
			
			if (isset($v->type_locality))
			{
				$s->type_locality = $v->type_locality;
				
				$point = geotagger($s->type_locality);
				
				if (count($point) > 0)
				{
					$s->longitude = $point[0];
					$s->latitude = $point[1];
				}
			}
		
			$synonyms[] = $s;
		
		}
		
		//print_r($synonyms);
		
		// output taxonomic names 
		foreach ($synonyms as $s)
		{
		
			// SQL
			$keys = array();
			$values = array();

			foreach ($s as $k => $v)
			{
				$keys[] = '"' . $k . '"'; // must be double quotes

				if (is_array($v))
				{
					$values[] = "'" . str_replace("'", "''", json_encode(array_values($v))) . "'";
				}
				elseif(is_object($v))
				{
					$values[] = "'" . str_replace("'", "''", json_encode($v)) . "'";
				}
				elseif (preg_match('/^POINT/', $v))
				{
					$values[] = "ST_GeomFromText('" . $v . "', 4326)";
				}
				else
				{				
					$values[] = "'" . str_replace("'", "''", $v) . "'";
				}					
			}

			$sql = 'REPLACE INTO ' . $table_name . ' (' . join(",", $keys) . ') VALUES (' . join(",", $values) . ');';					
			$sql .= "\n";

			echo $sql;
		}
		
		// links between names and references
		foreach ($references as $name_id => $v)
		{
			foreach ($v as $reference_id)
			{			
				//echo "REPLACE INTO names_publications(name_id, publication_id) VALUES('" . str_replace("'", "''", $name_id) . "', '" . str_replace("'", "''", $reference_id) . "');" . "\n";
			}
		}

		
		
		// export as SQL
	}
}


//----------------------------------------------------------------------------------------
// Get list of genera in subfamily and call do_genera for each one
function do_subfamilies($basedir, $subfamilies)
{
	foreach ($subfamilies as $subfamily)
	{
		$current_dir = $basedir . '/' . $subfamily;

		$genera = scandir($current_dir);
	
		foreach ($genera as $filename)
		{		
			if (preg_match('/\.html$/', $filename))
			{	
		
				$html = file_get_contents($current_dir . '/' . $filename);
		
				parse_html($html);
		
				if (($key = array_search($filename, $genera)) !== false) {
					 unset($genera[$key]);
				}
		
			} else {
				if (preg_match('/^\./', $filename))
				{
					if (($key = array_search($filename, $genera)) !== false) {
						 unset($genera[$key]);
					}		
				}
			}
		}
		
		do_genera($current_dir, $genera);
	}
}


//----------------------------------------------------------------------------------------
// Get list of species in genus and call parse_html on each one
function do_genera($basedir, $genera)
{
	foreach ($genera as $genus)
	{
		$current_dir = $basedir . '/' . $genus;

		// get species
		$species = scandir($current_dir);	
		foreach ($species as $filename)
		{		
			if (preg_match('/\.html$/', $filename))
			{			
				$html = file_get_contents($current_dir . '/' . $filename);	
				
				
				echo "\n-- $filename\n";
					
				parse_html($html);
		
				if (($key = array_search($filename, $species)) !== false) {
					 unset($species[$key]);
				}
		
			} else {
				if (preg_match('/^\./', $filename))
				{
					if (($key = array_search($filename, $species)) !== false) {
						 unset($species[$key]);
					}		
				}
			}
		}
		
		//print_r($species);
	}
}


//----------------------------------------------------------------------------------------
// Do one file (use for debugging)
function do_one($basedir, $filename)
{
	$html = file_get_contents($basedir . '/' . $filename);

	parse_html($html);
}


//----------------------------------------------------------------------------------------

$basedir = dirname(__FILE__);


// moved to Dropbox


if (0)
{
	if (0)
	{
		// Frogs
		$basedir = '/Users/rpage/Dropbox/research.amnh.org/vz/herpetology/amphibia/Amphibia/Anura';
	
		$filename = 'Bufonidae/Amazophrynella/Amazophrynella-teko.html';
		$filename = 'Allophrynidae/Allophryne/Allophryne-relicta.html';
	}

	if (0)
	{
		$basedir = '/Users/rpage/Dropbox/research.amnh.org/vz/herpetology/amphibia/Amphibia/Gymnophiona';
		$filename = 'Ichthyophiidae/Ichthyophis/Ichthyophis-multicolor.html';
	}

	if (1)
	{
		$basedir = '/Users/rpage/Dropbox/research.amnh.org/vz/herpetology/amphibia/Amphibia/Anura';
		$filename = 'Pelodryadidae/Litoriinae/Litoria/Litoria-vivissimia.html';
		//$filename = 'Megophryidae/Megophryinae/Megophrys/Megophrys-nanlingensis.html';
		//$filename = 'Megophryidae/Megophryinae/Megophrys/Megophrys-wuliangshanensis.html';
		
		//$filename = 'Megophryidae/Leptobrachiinae/Leptobrachella/Leptobrachella-oshanensis.html';	


		//$filename = 'Bufonidae/Sclerophrys/Sclerophrys-funerea.html';	
		
		$filename = 'Megophryidae/Megophryinae/Megophrys/Megophrys-jiulianensis.html';	
		
		$filename = 'Megophryidae/Leptobrachiinae/Leptobrachella/Leptobrachella-mangshanensis.html';
		
		$filename = 'Ptychadenidae/Ptychadena/Ptychadena-neumanni.html';
		//$filename = 'Ptychadenidae/Ptychadena/Ptychadena-nuerensis.html';
		
		$filename = 'Hylidae/Lophyohylinae/Trachycephalus/Trachycephalus-cunauaru.html';
		
		$filename = 'Leptodactylidae/Leiuperinae/Pseudopaludicola/Pseudopaludicola-jazmynmcdonaldae.html';
		
		$filename = 'Megophryidae/Megophryinae/Megophrys/Megophrys-acuta.html';
		$filename = 'Microhylidae/Cophylinae/Stumpffia/Stumpffia-huwei.html';
		
		
		$basedir = '/Users/rpage/Dropbox/research.amnh.org/vz/herpetology/amphibia/Amphibia/Caudata';
		$filename = 'Hynobiidae/Hynobiinae/Hynobius/Hynobius-ikioi.html';
		
		$basedir = '/Users/rpage/Dropbox/research.amnh.org/vz/herpetology/amphibia/Amphibia/Anura';
		$filename = 'Ranidae/Odorrana/Odorrana-tianmuii.html';
		
	
	}

	do_one($basedir, $filename);

	exit();
}


//----------------------------------------------------------------------------------------

// Need to set basedir for each order, then we get familes and dive down

//Caecillians
$basedir = '/Users/rpage/Dropbox/research.amnh.org/vz/herpetology/amphibia/Amphibia/Gymnophiona';

// Salamanders
$basedir = '/Users/rpage/Dropbox/research.amnh.org/vz/herpetology/amphibia/Amphibia/Caudata';

// Anura
$basedir = '/Users/rpage/Dropbox/research.amnh.org/vz/herpetology/amphibia/Amphibia/Anura';

$families = scandir($basedir);

// debugging
//$files=array('Ptychadena-uzungwensis.html');
//$files=array('Ptychadena-amharensis.html');
//$files=array('Ptychadena-mutinondoensis.html');

//$families  = array('Megophryidae');
//$families  = array('Ptychadenidae');
//$files=array('Megophrys-mufumontanas.html');

//----------------------------------------------------------------------------------------
// Get list of families
foreach ($families as $filename)
{
	// echo "filename=$filename\n";
		
	if (preg_match('/\.html$/', $filename))
	{	
		$html = file_get_contents($basedir . '/' . $filename);
		
		//parse_html($html);
		
		if (($key = array_search($filename, $families)) !== false) {
   			 unset($families[$key]);
		}
		
	} else {
		if (preg_match('/^\./', $filename))
		{
			if (($key = array_search($filename, $families)) !== false) {
				 unset($families[$key]);
			}		
		}
	}

}

//print_r($families);

//----------------------------------------------------------------------------------------
// For each family get next level down, which may be genus or subfamily, and visit
// that level
foreach ($families as $family)
{
	$current_dir = $basedir . '/' . $family;
	
	$subfamilies = array();
	
	// get genera/subfamilies 
	$genera = scandir($current_dir);	
	foreach ($genera as $filename)
	{		
		if (preg_match('/\.html$/', $filename))
		{			
			$html = file_get_contents($current_dir . '/' . $filename);		
			parse_html($html);
		
			if (($key = array_search($filename, $genera)) !== false) {
				 unset($genera[$key]);
			}
		
		} else {
			if (preg_match('/^\./', $filename))
			{
				if (($key = array_search($filename, $genera)) !== false) {
					 unset($genera[$key]);
				}		
			}
		}
	}
	
	//print_r($genera);
	
	// filter "genera" for subfamilies
	foreach ($genera as $g)
	{
		if (preg_match('/inae$/', $g))
		{
			$subfamilies[] = $g;
			if (($key = array_search($g, $genera)) !== false) {
				 unset($genera[$key]);
			}		
			
		}
	}
	
	// do subfamilies
	
	//print_r($subfamilies);
	
	if (count($subfamilies) > 0)
	{		
		do_subfamilies($current_dir, $subfamilies);
	}
	else
	{
		do_genera($current_dir, $genera);
	}
			

}

		
?>

