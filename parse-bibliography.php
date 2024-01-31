<?php

error_reporting(E_ALL);

require_once (dirname(__FILE__) . '/HtmlDomParser.php');

use Sunra\PhpSimple\HtmlDomParser;

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
	
	return $data;
}

//----------------------------------------------------------------------------------------
function parse_html($id, $html)
{
	$dom = HtmlDomParser::str_get_html($html);
	
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
		
		if (1)
		{
			$url = 'http://localhost/citation-parsing/api.php?text=';
			$url .= urlencode($text);
			
			$json = get($url);
			
			//echo $json;
			
			$result = json_decode($json);
			if ($result)
			{
				$obj = $result[0];
				$obj->id = $id;
				$obj->unstructured = trim($text);
				
				//print_r($obj);
				
				echo json_encode($obj, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "\n";
			}
			
		}
	
		if (0)
		{
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
}


$basedir = dirname(__FILE__);

// moved to Dropbox
$basedir = '/Users/rpage/Dropbox/research.amnh.org/vz/herpetology/amphibia/Bibliography';

$letters = scandir($basedir);

//print_r($letters);

// debugging



$letters = array('A');
//$letters = array('B');
$letters = array('C');
$letters = array('D');
$letters = array('E');
$letters = array('F');
//$letters = array('P');

//$letters = array('Z');

$letters = array(
//'A',
//'B',
//'C',
//'D',
//'E',
//'F',
'G',
'H',
'I',
'J',
'K',
'L',
'M',
'N',
'O',
//'P',
'Q',
'R',
'S',
'T',
'U',
'V',
'W',
'X',
'Y',
//'Z',


);

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
			//echo $filename . "\n";
			
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
