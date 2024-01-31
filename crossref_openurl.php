<?php

// CrossRef text search

error_reporting(E_ALL);


$pdo = new PDO('sqlite:asw.db');


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
function post($url, $data = '', $content_type = 'application/json; charset=utf-8')
{
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	
	// data needs to be a string
	if ($data != '')
	{
		if (gettype($data) != 'string')
		{
			$data = json_encode($data);
		}	
	}	
	
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);  
	
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	
	
	$headers = array();
	
	if ($content_type != '')
	{
		$headers[] = "Content-type: " . $content_type;
	}
	
	if (count($headers) > 0)
	{
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	}
	
	$response = curl_exec($ch);
	if($response == FALSE) 
	{
		$errorText = curl_error($ch);
		curl_close($ch);
		die($errorText);
	}
	
	$info = curl_getinfo($ch);
	$http_code = $info['http_code'];
		
	curl_close($ch);
	
	return $response;
}


//----------------------------------------------------------------------------------------

$sql = 'SELECT * FROM `publications` WHERE journal="South American Journal of Herpetology" and doi IS NULL';
$sql = 'SELECT * FROM `publications` WHERE journal="Zootaxa" and doi IS NULL';


$journal = "Vertebrate Zoology. Senckenberg";

$sql = 'SELECT * FROM `publications` WHERE journal="' . $journal . '" and doi IS NULL';

$data = do_sqlite_query($sql);

//print_r($data);

foreach ($data as $obj)
{
	$doc = new stdclass;
	
	if (isset($obj->journal))
	{
		$doc->{'container-title'} = $obj->journal;
	}
	
	if (isset($obj->issn))
	{
		$doc->ISSN[] = $obj->issn;
	}

	if (isset($obj->volume))
	{
		$doc->volume = $obj->volume;
	}

	if (isset($obj->year))
	{
		$doc->issued = new stdclass;
		$doc->issued->{'date-parts'} = array();
		$doc->issued->{'date-parts'}[0][] = (Integer)$obj->year;
	}
	
	if (isset($obj->spage))
	{
		$doc->page = $obj->spage;
	}
	
	$url = 'http://localhost/citation-matching/api/crossref_openurl.php';
	
	$json = post($url, json_encode($doc));
	
	echo $json;
	
	$response = json_decode($json);
	
	if ($response)
	{
		if (isset($response->DOI))
		{
			$values = array();
			$values[] = 'doi="' . str_replace('"', '""', $response->DOI) . '"';					

			echo 'UPDATE `publications` SET ' . join(",", $values) . ' WHERE guid="' . $obj->guid . '" AND doi IS NULL;' . "\n";		
		}			
	}

	
}

?>
