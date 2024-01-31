<?php

// Try to fix geocoding that we missed the first time around

error_reporting(E_ALL);

require_once (dirname(__FILE__) . '/geo.php');

$pdo = new PDO('sqlite:asw.db');


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

$sql = 'SELECT * FROM `names` WHERE type_locality IS NOT NULL AND latitude IS NULL ';

$sql .= ' AND type_locality LIKE "%°%"';

$sql .= ' LIMIT 10';

$data = do_sqlite_query($sql);


foreach ($data as $obj)
{
	$string = $obj->type_locality;
	
	echo "-- $string\n";
	
	$point = geotagger($string, false);
	echo join(" ", $point) . "\n";	
}

?>
