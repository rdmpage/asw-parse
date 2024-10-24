<?php

error_reporting(E_ALL);

//----------------------------------------------------------------------------------------
function degrees2decimal($degrees, $minutes=0, $seconds=0, $hemisphere='N')
{
	$result = $degrees;
	$result += $minutes/60.0;
	if (is_numeric($seconds))
	{
		$result += $seconds/3600.0;
	}
	
	if ($hemisphere == 'S')
	{
		$result *= -1.0;
	}
	if ($hemisphere == 'W')
	{
		$result *= -1.0;
	}
	// Spanish
	if ($hemisphere == 'O')
	{
		$result *= -1.0;
	}
	// Spainish OCR error
	if ($hemisphere == '0')
	{
		$result *= -1.0;
	}
	
	return $result;
}

//----------------------------------------------------------------------------------------
function geotagger($text, $debug = false)
{
	$point = array();

	$DEGREES_SYMBOL 		=  '[°|º|o]';
	$MINUTES_SYMBOL			= '(\'|’|\′|´)';
	$SECONDS_SYMBOL			= '("|\'\'|’’|”|\′|″|ʺ)';
	
	$INTEGER				= '\d+';
	$FLOAT					= '\d+(\.\d+)?';
	
	$LATITUDE_DEGREES 		= '[0-9]{1,2}(\.\d+)?';
	$LONGITUDE_DEGREES 		= '[0-9]{1,3}(\.\d+)?';
	
	$LATITUDE_HEMISPHERE 	= '[N|S]';
	$LONGITUDE_HEMISPHERE 	= '[W|E]';
	
	$SEPARATOR				= '(\s*[,|-|\/|;]?\s*)';
	
	$patterns[] = "(?<latitude_degrees>$LATITUDE_DEGREES)
$DEGREES_SYMBOL
(\s*
(?<latitude_minutes>$FLOAT)
$MINUTES_SYMBOL
)?
(\s*
(?<latitude_seconds>$FLOAT)
$SECONDS_SYMBOL
)?
\s*
(?<latitude_hemisphere>$LATITUDE_HEMISPHERE)
$SEPARATOR
(?<longitude_degrees>$LONGITUDE_DEGREES)
$DEGREES_SYMBOL
(\s*
(?<longitude_minutes>$FLOAT)
$MINUTES_SYMBOL
)?
(\s*
(?<longitude_seconds>$FLOAT)
$SECONDS_SYMBOL
)?
\s*
(?<longitude_hemisphere>$LONGITUDE_HEMISPHERE)";

	$patterns[] = "(?<latitude_hemisphere>$LATITUDE_HEMISPHERE)
(\s*(?<latitude_degrees>$LATITUDE_DEGREES))
$DEGREES_SYMBOL
(\s*
(?<latitude_minutes>$FLOAT)
$MINUTES_SYMBOL
)?
(\s*
(?<latitude_seconds>$FLOAT)
$SECONDS_SYMBOL
)?
$SEPARATOR
(?<longitude_hemisphere>$LONGITUDE_HEMISPHERE)
(\s*(?<longitude_degrees>$LONGITUDE_DEGREES))
$DEGREES_SYMBOL
(\s*
(?<longitude_minutes>$FLOAT)
$MINUTES_SYMBOL
)?
(\s*
(?<longitude_seconds>$FLOAT)
$SECONDS_SYMBOL
)?";

// 107° 53′ E, 21° 50′ N
	$patterns[] = "(\s*(?<longitude_degrees>$LONGITUDE_DEGREES))
$DEGREES_SYMBOL
(\s*
(?<longitude_minutes>$FLOAT)
$MINUTES_SYMBOL
)
\s*	
(?<longitude_hemisphere>$LONGITUDE_HEMISPHERE)
$SEPARATOR
(\s*(?<latitude_degrees>$LATITUDE_DEGREES))
$DEGREES_SYMBOL
(\s*
(?<latitude_minutes>$FLOAT)
$MINUTES_SYMBOL
)
\s*
(?<latitude_hemisphere>$LATITUDE_HEMISPHERE)
";

// 27.66185°N, 87.93168 °E
$patterns[] = "(\s*(?<latitude_degrees>$LATITUDE_DEGREES))
\s*
$DEGREES_SYMBOL
\s*
(?<latitude_hemisphere>$LATITUDE_HEMISPHERE)
$SEPARATOR
(\s*(?<longitude_degrees>$LONGITUDE_DEGREES))
\s*
$DEGREES_SYMBOL
\s*
(?<longitude_hemisphere>$LONGITUDE_HEMISPHERE)";

// S12.51483, E49.17617
$patterns[] = "(?<latitude_hemisphere>$LATITUDE_HEMISPHERE)
(\s*(?<latitude_degrees>$LATITUDE_DEGREES))
$SEPARATOR
(?<longitude_hemisphere>$LONGITUDE_HEMISPHERE)
(\s*(?<longitude_degrees>$LONGITUDE_DEGREES))
";


	$patterns[] = "(?<longitude_degrees>$LONGITUDE_DEGREES)
$DEGREES_SYMBOL
(\s*
(?<longitude_minutes>$FLOAT)
$MINUTES_SYMBOL
)?
(\s*
(?<longitude_seconds>$FLOAT)
$SECONDS_SYMBOL
)?
\s*
(?<longitude_hemisphere>$LONGITUDE_HEMISPHERE)
$SEPARATOR
(?<latitude_degrees>$LATITUDE_DEGREES)
$DEGREES_SYMBOL
(\s*
(?<latitude_minutes>$FLOAT)
$MINUTES_SYMBOL
)?
(\s*
(?<latitude_seconds>$FLOAT)
$SECONDS_SYMBOL
)?
\s*
(?<latitude_hemisphere>$LATITUDE_HEMISPHERE)";

		
	if ($debug)
	{
		print_r($patterns);
	}
	
	$matched = false;
	
	foreach ($patterns as $pattern)
	{
		if (!$matched)
		{
			if (preg_match("/$pattern/xu", $text, $m))
			{
				if ($debug)
				{
					print_r($m);
				}
				
				$matched = true;
				
				// handle case where regex finishes "early"
				if (!isset($m['longitude_minutes']))
				{
					$m['longitude_minutes'] = '';
				}
				if (!isset($m['longitude_seconds']))
				{
					$m['longitude_seconds'] = '';
				}
				
				if (!isset($m['latitude_minutes']))
				{
					$m['latitude_minutes'] = '';
				}
				if (!isset($m['latitude_seconds']))
				{
					$m['latitude_seconds'] = '';
				}
		
				$latitude = degrees2decimal(
					$m['latitude_degrees'],
					$m['latitude_minutes'] != '' ? $m['latitude_minutes'] : 0,
					$m['latitude_seconds'] != '' ? $m['latitude_seconds'] : 0,
					$m['latitude_hemisphere']						
					);
			
				$longitude = degrees2decimal(
					$m['longitude_degrees'],
					$m['longitude_minutes'] != '' ? $m['longitude_minutes'] : 0,
					$m['longitude_seconds'] != '' ? $m['longitude_seconds'] : 0,
					$m['longitude_hemisphere']						
					);
			
				$point = [$longitude, $latitude];
			}
		}		
		
	}
	
	return $point;

}

// test
if (0)
{

	$strings = array(
	", 00° 12´ 39 N, 34° 46´ 36 E, 1",
	"between the village Ekomtolo and Badjong (4° 51´ N, 9° 54´ E, 450 m altitude) on the bank of the small creek ",
	"DRC, South Kivu Province, Tumungu, 3.56455° S, 28.66619° E (datum WGS84), 1897 m",
	"Tanzania, Mbeya Province, 28.983° S, 33.567° E (WGS84; based on MCZ collections database), approximately 2,000-2,400 m elevation",
	"Republic of the Congo (RC), Niari Department, along Lekoumou River, about 500 m north of Bandjoko, 02°19′36.4″ S, 12°47′34.9″ E, elevation 634 m, perched on thin-stemmed plant about 30 cm above ground on bank of small river in secondary rainforest",
	"Chome Forest Reserve, South Pare Mountains, Tanzania, ca. 1900 m elevation, 4° 18′ S, 37° 53′ E",
	"Mafwemiro Catchment Forest Reserve, Rubeho Mountains, Mpwapwa District, Tanzania (06° 56′ 19″ S x 36° 35′ 04″ E, 1900 m a.s.l.)",
	);
	
	$strings=array(
	'12° 16′ 06ʺ N, 75° 17′ 14ʺ E',
	"N 25° 29′ 34.83″ E 90° 19′ 26.9″",
	"N 07.40806°, W 008.58436°",
	);

	foreach ($strings as $string)
	{
		echo $string . "\n";
		$point = geotagger($string, true);
		echo join(" ", $point) . "\n";
	}

}

if (0)
{
	$strings = array("Laos, Vientiane Province, Feuang District, Ban Naxang Village, bank of Nam Lik Reservoir, Houay Poungfan Stream, 18º48’59.5”N 102º08’06.1”E, 292 m elev."
	);

	foreach ($strings as $string)
	{
		echo $string . "\n";
		$point = geotagger($string, true);
		echo join(" ", $point) . "\n";
	}

}

if (0)
{
	$strings = array(
	'"Pinglongao (107° 53′ E, 21° 50′ N) of Shangsi Co., Guangxi Prov., China, altitude 500 m".',
	'Xijuegou, Mt. Wawu (102° 55′ E, 29° 39′ N), Hongya County, Sichuan, China; at altitude of 1840 m.',
	
	'"Chapa [= Sa Pa, Lao Cai Province], Vietnam, latitude 22° 21′ N, longitude 103° 50′ E".',
	'"5 m wide, rocky stream in evergreen forest at Cham Chu Nature Reserve, Tuyen Quang Province, Vietnam (22.2045 °N, 105.0754 °E, 715 m . . . ".',
	'"Philippines, Palawan Island, Palawan Province, Municipality of Puerto Princesa City, Barangay Irawan, Irawan Watershed (N: 9.8333°, E 118.650°; WGS84)".',
	'"forested hills about 2 km east [of] a farming village (14° 20′ 29 N, 108° 28′ 46 E, elevation 850 m), Gia Lia [sic] Province, Vietnam".',
	'"Ghunsa Khola (Khola means \'stream\' in Nepali) Ghunsa, Taplejung district, Nepal, 27.66185°N, 87.93168 °E, elevation 3475 m a.s.l."',
	);
	
	$strings = array(
	'S12.51483, E49.17617',
	
	'3°13′07′′N, 52°23′47′′W',
	'2°39′N/113°03′E',
	'23° 44′ 52″ W; 46° 08′ 30″ S',
	'18° 56′ S/48° 25′ E',
	'4.14009° S. 137.09782° E',
	'2°39′N/113°03′E',
	);
	
	$strings = array(
	'23° 44′ 52″ W; 46° 08′ 30″ S',
	);

	foreach ($strings as $string)
	{
		echo $string . "\n";
		$point = geotagger($string, true);
		echo join(" ", $point) . "\n";
	}


}





?>
