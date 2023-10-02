<?php

// Add records to Wikidata from CSJ-JSON as JSONL

require_once (dirname(__FILE__) . '/csl_utils.php');

$filename = 'z.jsonl';

$file_handle = fopen($filename, "r");
while (!feof($file_handle)) 
{
	$json = trim(fgets($file_handle));
	
	$obj = json_decode($json);
	
	if ($obj)
	{
		//print_r($obj);
	
		echo csl_to_sql($obj, 'publications');
	}
}


?>
