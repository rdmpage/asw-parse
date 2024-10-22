<?php

// Export to KML files

error_reporting(E_ALL);


$pdo = new PDO('sqlite:asw2019.db');


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

$sql = 'SELECT * FROM `names` WHERE latitude IS NOT NULL AND longitude IS NOT NULL';
$data = do_sqlite_query($sql);

//print_r($data);

echo '<?xml version="1.0" encoding="UTF-8"?>
<kml xmlns="http://earth.google.com/kml/2.1">
    <Document>
        <name>Type localities for amphibian species</name>
        <open>1</open>
        <description></description><Style id="whiteBall">	       
<IconStyle>
	<Icon>
		<href>http://rdmpage-teaching.herokuapp.com/pgt/course/geography/images/whiteBall.png</href>
	</Icon>
</IconStyle>
</Style>';

foreach ($data as $obj)
{
	// print_r($obj);
	
	echo '<Placemark><styleUrl>#whiteBall</styleUrl>';
	
	if (isset($obj->year))
	{
		echo '<TimeStamp><when>' . $obj->year . '</when></TimeStamp>';
	}
	
	echo '<name>' . $obj->scientificName . '</name>';
	echo '<description>' . htmlspecialchars($obj->type_locality, ENT_NOQUOTES) . '</description>';
	echo '<Point><extrude>0</extrude><altitudeMode>absolute</altitudeMode><coordinates>' . $obj->longitude . ',' . $obj->latitude . '</coordinates></Point>';	
	echo '</Placemark>' . "\n";

	
}

echo '</Document>
</kml>';

?>
