<?php

error_reporting(E_ALL);

require_once(dirname(__FILE__) . '/simplehtmldom_1_5/simple_html_dom.php');


//----------------------------------------------------------------------------------------
function parse_html($id, $html)
{
	//global $couch;
	//global $force;

	$dom = str_get_html($html);
	
	/*
	<div id="aswContent" role="main" class="column big bibliography">
    <h2 tabindex="0">Bibliography</h2>
    Akmentins, M. S., M. Boullhesen, S. Bardavid, C. J. Espinoza, and F. Falke. 2018. Rediscovery of <i>Gastrotheca chrysosticta</i> Laurent, 1976 (Anura:&nbsp;Hemiphractidae) in Baritú National Park, Salta, Argentina. Cuadernos de Herpetología&nbsp;32:&nbsp;137–139. 
</div>
*/
	
	foreach ($dom->find('div[id=aswContent]') as $div)
	{
		$text = $div->plaintext;
		$text = preg_replace('/^\s*Bibliography\s+/u', '', $text);
		$text = html_entity_decode($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');
	
		$obj = new stdclass;
		$obj->_id = $id;
		$obj->unstructured = $text;
		
		// Auffenberg, W. 1958. A small fossil herpetofauna from Barbuda, Leeward Islands, with the description of a new species of Hyla. Quarterly Journal of the Florida Academy of Sciences 21: 248–254. 
		
		$matched = false;
		
		if (!$matched)
		{
			if (preg_match('/(?<authorstring>.*)\s+(?<year>[0-9]{4})\.\s+(?<title>[^\.]+)\.\s+(?<journal>.*)\s+(?<volume>\d+):\s+(?<spage>\d+)(–(?<epage>\d+))?/u', $obj->unstructured, $m))
			{
				print_r($m);
				
				$keys = array('authorstring', 'year', 'title', 'journal', 'volume', 'spage', 'epage');
				foreach ($keys as $k)
				{
					if (isset($m[$k]) && $m[$k] != '')
					{
						$obj->{$k} = $m[$k];
					}
				}
				
				
				
				$matched = true;
				
				
			}
		
		}
		
		print_r($obj);

		
	}
}


$basedir = dirname(__FILE__);


// moved to Dropbox

$basedir = '/Users/rpage/Dropbox/research.amnh.org/vz/herpetology/amphibia/Bibliography';


$letters = scandir($basedir);

print_r($letters);

// debugging
$letters = array('Z');



foreach ($letters as $letter)
{
	// echo "filename=$filename\n";
		
	if (preg_match('/^[A-Z]$/', $letter))
	{	
		// get individual references
		$current_dir = $basedir . '/' . $letter;

		$references = scandir($current_dir);	
		
		foreach ($references as $filename)
		{
			echo $filename . "\n";
			
			$id = 'Bibliography/' . $letter . '/' . $filename;
			$id = str_replace('.html', '', $id);
		
			if (preg_match('/\.html$/', $filename))
			{	
				$html = file_get_contents($current_dir . '/' . $filename);
		
				parse_html($id, $html);
			}
		}
	}
}		
		


		
?>

