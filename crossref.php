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

$sql = 'SELECT * FROM `publications` WHERE journal="ZooKeys" and doi IS NULL';
$sql = 'SELECT * FROM `publications` WHERE doi IS NULL';

$sql = 'SELECT * FROM `publications` WHERE guid = "Bibliography/M/node_218235"';

$sql = 'SELECT * FROM `publications` WHERE journal="South American Journal of Herpetology" and doi IS NULL';

$data = do_sqlite_query($sql);

//print_r($data);

foreach ($data as $obj)
{
	$publication_string = $obj->unstructured;
	
	echo "-- $publication_string\n";
			
	$url = 'http://localhost/citation-matching/api/crossref.php?q=' . urlencode($publication_string);
	$json = get($url);

	$response = json_decode($json);
	
	if ($response)
	{
		print_r($response);
	
		if (isset($response->DOI))
		{
			$values = array();
			$values[] = 'doi="' . str_replace('"', '""', $response->DOI) . '"';					
			echo 'UPDATE `publications` SET ' . join(",", $values) . ' WHERE guid="' . $obj->guid . '" AND doi IS NULL;' . "\n";
		}	
	}
	
}

?>
