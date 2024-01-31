<?php

// coordinates to country


//----------------------------------------------------------------------------------------
function get($url, $content_type = '')
{	
	$data = null;

	$opts = array(
	  CURLOPT_URL 				=> $url,
	  CURLOPT_FOLLOWLOCATION	=> TRUE,
	  CURLOPT_RETURNTRANSFER 	=> TRUE,
	  
	  CURLOPT_HEADER 			=> FALSE,
	  
	  CURLOPT_SSL_VERIFYHOST	=> FALSE,
	  CURLOPT_SSL_VERIFYPEER	=> FALSE,
	  
	  CURLOPT_COOKIEJAR			=> sys_get_temp_dir() . '/cookies.txt',
	  CURLOPT_COOKIEFILE		=> sys_get_temp_dir() . '/cookies.txt',
	  
	);

	if ($content_type != '')
	{
		$opts[CURLOPT_HTTPHEADER] = array(
			"Accept: " . $content_type, 
			"Accept-Language: en-gb",
			"User-agent: Mozilla/5.0 (iPad; U; CPU OS 3_2_1 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Mobile/7B405" 
		);
	}
	
	$ch = curl_init();
	curl_setopt_array($ch, $opts);
	$data = curl_exec($ch);
	$info = curl_getinfo($ch); 
	curl_close($ch);
	
	// echo $data;
	
	return $data;
}

$json = '[
  {
    "name_id": "Amphibia\/Gymnophiona\/Scolecomorphidae\/Crotaphatrema\/Crotaphatrema-tchabalmbaboensis#0",
    "latitude": 7.2541666666667,
    "longitude": 12.0675
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Incilius\/Incilius-leucomyos#0",
    "latitude": 15.15,
    "longitude": -86.716666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Melanophryniscus\/Melanophryniscus-cupreuscapularis#0",
    "latitude": -27.416666666667,
    "longitude": -58.75
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Rhinella\/Rhinella-bergi#0",
    "latitude": -27.416666666667,
    "longitude": -58.75
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Rhinella\/Rhinella-stanlaii#0",
    "latitude": -17.183333333333,
    "longitude": -65.75
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Sclerophrys\/Sclerophrys-taiensis#1",
    "latitude": 5.8666666666667,
    "longitude": -7.4666666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Centroleninae\/Vitreorana\/Vitreorana-gorzulae#6",
    "latitude": 5.7333333333333,
    "longitude": -60.3
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Nanorana\/Nanorana-mokokchungensis#0",
    "latitude": 26.333333333333,
    "longitude": 94.5
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Boana\/Boana-ericae#0",
    "latitude": -14.133333333333,
    "longitude": -47.533333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Boana\/Boana-phaeopleura#0",
    "latitude": -14.133333333333,
    "longitude": -47.533333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Dendropsophinae\/Dendropsophus\/Dendropsophus-elianeae#0",
    "latitude": -22.1,
    "longitude": -56.516666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Dendropsophinae\/Dendropsophus\/Dendropsophus-pseudomeridianus#0",
    "latitude": -22.733333333333,
    "longitude": -43.7
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Dendropsophinae\/Dendropsophus\/Dendropsophus-yaracuyanus#0",
    "latitude": 10.366666666667,
    "longitude": -68.833333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Hylinae\/Exerodonta\/Exerodonta-abdivita#0",
    "latitude": 18.02,
    "longitude": -96.66
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Hylinae\/Ptychohyla\/Ptychohyla-zophodes#0",
    "latitude": 18.02,
    "longitude": -96.66
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Hylinae\/Quilticohyla\/Quilticohyla-acrochorda#0",
    "latitude": 17.72,
    "longitude": -96.31
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Hylinae\/Sarcohyla\/Sarcohyla-cyclada#0",
    "latitude": 17.62,
    "longitude": -96.38
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Hylinae\/Sarcohyla\/Sarcohyla-psarosema#0",
    "latitude": 17.24,
    "longitude": -96.06
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Osteocephalus\/Osteocephalus-deridens#0",
    "latitude": -1.0666666666667,
    "longitude": -77.6
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Osteocephalus\/Osteocephalus-fuscifacies#0",
    "latitude": -1.0666666666667,
    "longitude": -77.6
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Pseudinae\/Pseudis\/Pseudis-cardosoi#0",
    "latitude": -29.5,
    "longitude": -50.166666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hyperoliidae\/Hyperoliinae\/Heterixalus\/Heterixalus-carbonei#0",
    "latitude": -18.7,
    "longitude": 44.716666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Pleurodema\/Pleurodema-marmoratum#15",
    "latitude": -9.8833333333333,
    "longitude": -77.4
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Mantellinae\/Guibemantis\/Guibemantis-kathrinae#0",
    "latitude": -18.933333333333,
    "longitude": 48.466666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-pluvialis#0",
    "latitude": 22.316666666667,
    "longitude": 103.78333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Megophryinae\/Megophrys\/Megophrys-shuichengensis#0",
    "latitude": 26.566666666667,
    "longitude": 104.85
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-bewaniensis#0",
    "latitude": -3.312,
    "longitude": 141.7
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-pulchellus#0",
    "latitude": -4.523,
    "longitude": 142.675
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-minuta#0",
    "latitude": -3.4421166666667,
    "longitude": 136.47275
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Sphenophryne\/Sphenophryne-rubra#0",
    "latitude": -5.5975,
    "longitude": 144.79027777778
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Xenorhina\/Xenorhina-arboricola#0",
    "latitude": -3.309,
    "longitude": 141.709
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Cophylinae\/Anilany\/Anilany-helenae#0",
    "latitude": -18.15,
    "longitude": 47.25
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Kalophryninae\/Kalophrynus\/Kalophrynus-orangensis#0",
    "latitude": 26.5,
    "longitude": 92.25
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Microhylinae\/Microhyla\/Microhyla-sholigari#0",
    "latitude": 12.45,
    "longitude": 76.183333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodytidae\/Pelodytes\/Pelodytes-ibericus#0",
    "latitude": 36.983333333333,
    "longitude": -6.45
  },
  {
    "name_id": "Amphibia\/Anura\/Ptychadenidae\/Ptychadena\/Ptychadena-wadei#0",
    "latitude": 11.466666666667,
    "longitude": 37.633333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Pyxicephalidae\/Cacosterninae\/Arthroleptella\/Arthroleptella-landdrosia#0",
    "latitude": -34.041666666667,
    "longitude": 19.016666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Amolops\/Amolops-bellulus#0",
    "latitude": 26.031666666667,
    "longitude": 98.633333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Amolops\/Amolops-tuberodepressus#0",
    "latitude": 24.5,
    "longitude": 100.75
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Sanguirana\/Sanguirana-tipanan#0",
    "latitude": 15.651666666667,
    "longitude": 121.35194444444
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Philautus\/Philautus-erythrophthalmus#0",
    "latitude": 4.3785833333333,
    "longitude": 115.83541666667
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Zhangixalus\/Zhangixalus-duboisi#0",
    "latitude": 22.266666666667,
    "longitude": 103.83333333333
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Eurycea\/Eurycea-chisholmensis#0",
    "latitude": 30.943611111111,
    "longitude": -97.541944444444
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Eurycea\/Eurycea-naufragia#0",
    "latitude": 30.660833333333,
    "longitude": -97.726666666667
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Eurycea\/Eurycea-tonkawae#0",
    "latitude": 30.374444444444,
    "longitude": -97.765277777778
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Nototriton\/Nototriton-gamezi#0",
    "latitude": 10.316666666667,
    "longitude": -84.791666666667
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Oedipina\/Oedipina-maritima#0",
    "latitude": 9.1016666666667,
    "longitude": -81.075
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Oedipina\/Oedipina-savagei#0",
    "latitude": 8.7930555555556,
    "longitude": -82.958333333333
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Plethodontinae\/Plethodon\/Plethodon-amplus#0",
    "latitude": 35.495,
    "longitude": -2.3355555555556
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Plethodontinae\/Plethodon\/Plethodon-cheoah#0",
    "latitude": 35.322222222222,
    "longitude": -3.6863888888889
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Plethodontinae\/Plethodon\/Plethodon-meridianus#0",
    "latitude": 35.585555555556,
    "longitude": -1.6894444444444
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Plethodontinae\/Plethodon\/Plethodon-montanus#0",
    "latitude": 36.657777777778,
    "longitude": -1.5569444444444
  },
  {
    "name_id": "Amphibia\/Anura\/Alsodidae\/Alsodes\/Alsodes-hugoi#0",
    "latitude": -35.466666666667,
    "longitude": -71.183333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Rhinella\/Rhinella-sclerocephala#0",
    "latitude": 11.166666666667,
    "longitude": -69.683333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Sabahphrynus\/Sabahphrynus-maculatus#3",
    "latitude": 6.2333333333333,
    "longitude": 116.53333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Wolterstorffina\/Wolterstorffina-chirioi#0",
    "latitude": 6.2333333333333,
    "longitude": 10.433333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Hyalinobatrachinae\/Hyalinobatrachium\/Hyalinobatrachium-cappellei#4",
    "latitude": 5.7666666666667,
    "longitude": -66.133333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Hyalinobatrachinae\/Hyalinobatrachium\/Hyalinobatrachium-mondolfii#0",
    "latitude": 8.3666666666667,
    "longitude": -61.533333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Ceratobatrachidae\/Ceratobatrachinae\/Cornufer\/Cornufer-browni#0",
    "latitude": -4.453,
    "longitude": 152.941
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Fejervarya\/Fejervarya-iskandari#0",
    "latitude": -6.2,
    "longitude": 107.13333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hemiphractidae\/Hemiphractinae\/Hemiphractus\/Hemiphractus-helioi#0",
    "latitude": -13.083333333333,
    "longitude": -71.3
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Bokermannohyla\/Bokermannohyla-ravida#1",
    "latitude": -18.416666666667,
    "longitude": -46.416666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Dendropsophinae\/Dendropsophus\/Dendropsophus-delarivai#0",
    "latitude": -17.101666666667,
    "longitude": -65.51
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Dendropsophinae\/Dendropsophus\/Dendropsophus-joannae#0",
    "latitude": -11.0125,
    "longitude": -68.7575
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Osteocephalus\/Osteocephalus-leoniae#0",
    "latitude": -10.069444444444,
    "longitude": -75.528333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Tepuihyla\/Tepuihyla-exophthalma#0",
    "latitude": 5.625,
    "longitude": -60.245
  },
  {
    "name_id": "Amphibia\/Anura\/Hylodidae\/Hylodes\/Hylodes-dactylocinus#0",
    "latitude": -24.383333333333,
    "longitude": -47.016666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hylodidae\/Hylodes\/Hylodes-uai#0",
    "latitude": -19.916666666667,
    "longitude": -43.933333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Boophinae\/Boophis\/Boophis-feonnyala#0",
    "latitude": -18.933333333333,
    "longitude": 48.416666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Boophinae\/Boophis\/Boophis-picturatus#0",
    "latitude": -18.933333333333,
    "longitude": 48.466666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Boophinae\/Boophis\/Boophis-pyrrhus#0",
    "latitude": -18.933333333333,
    "longitude": 48.416666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Choerophryne\/Choerophryne-longirostris#0",
    "latitude": -3.312,
    "longitude": 141.7
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Hylophorbus\/Hylophorbus-nigrinus#0",
    "latitude": -1.8166666666667,
    "longitude": 136.3
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Hylophorbus\/Hylophorbus-picoides#0",
    "latitude": -2.9333333333333,
    "longitude": 134.61666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Hylophorbus\/Hylophorbus-richardsi#0",
    "latitude": -6.12575,
    "longitude": 142.76818333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Hylophorbus\/Hylophorbus-sextus#0",
    "latitude": -3.1447833333333,
    "longitude": 136.57371666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Hylophorbus\/Hylophorbus-tetraphonus#0",
    "latitude": -2.9333333333333,
    "longitude": 134.63333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Hylophorbus\/Hylophorbus-wondiwoi#0",
    "latitude": -2.9333333333333,
    "longitude": 134.6
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-atrigularis#0",
    "latitude": -2.9333333333333,
    "longitude": 134.6
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Gastrophryninae\/Chiasmocleis\/Chiasmocleis-jimi#1",
    "latitude": -7.5166666666667,
    "longitude": -63.0
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Microhylinae\/Uperodon\/Uperodon-nagaoi#0",
    "latitude": 6.25,
    "longitude": 80.333333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Odontophrynidae\/Proceratophrys\/Proceratophrys-brauni#0",
    "latitude": -29.0,
    "longitude": -50.0
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Pelodryadinae\/Ranoidea\/Ranoidea-daviesae#0",
    "latitude": -31.225,
    "longitude": 52.17
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Pelodryadinae\/Ranoidea\/Ranoidea-macki#0",
    "latitude": -3.1447833333333,
    "longitude": 136.57371666667
  },
  {
    "name_id": "Amphibia\/Anura\/Phrynobatrachidae\/Phrynobatrachus\/Phrynobatrachus-inexpectatus#0",
    "latitude": 6.3833333333333,
    "longitude": 8.5833333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Rhacophorus\/Rhacophorus-hoanglienensis#0",
    "latitude": 18.333055555556,
    "longitude": 103.82638888889
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Taruga\/Taruga-fastigo#0",
    "latitude": 6.4,
    "longitude": 80.633333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Zhangixalus\/Zhangixalus-duboisi#1",
    "latitude": 22.15,
    "longitude": 103.1
  },
  {
    "name_id": "Amphibia\/Caudata\/Hynobiidae\/Hynobiinae\/Batrachuperus\/Batrachuperus-tibetanus#2",
    "latitude": 33.85,
    "longitude": 107.82
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Batrachoseps\/Batrachoseps-gavilanensis#0",
    "latitude": 36.820277777778,
    "longitude": -121.525
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Batrachoseps\/Batrachoseps-incognitus#0",
    "latitude": 35.683,
    "longitude": -121.076
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Batrachoseps\/Batrachoseps-minor#0",
    "latitude": 35.522222222222,
    "longitude": -120.77777777778
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-anthracina#0",
    "latitude": 8.9666666666667,
    "longitude": -82.7
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Isthmura\/Isthmura-naucampatepetl#0",
    "latitude": 19.591666666667,
    "longitude": -97.095
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Pseudoeurycea\/Pseudoeurycea-aquatica#0",
    "latitude": 17.24,
    "longitude": -96.06
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Pseudoeurycea\/Pseudoeurycea-lynchi#0",
    "latitude": 19.755,
    "longitude": -96.781666666667
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Plethodontinae\/Speleomantes\/Speleomantes-sarrabusensis#0",
    "latitude": 39.255555555556,
    "longitude": -3.3472222222222
  },
  {
    "name_id": "Amphibia\/Anura\/Alsodidae\/Alsodes\/Alsodes-valdiviensis#0",
    "latitude": -40.133333333333,
    "longitude": -73.666666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Atelopus\/Atelopus-nanay#0",
    "latitude": -2.7666666666667,
    "longitude": -79.233333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Atelopus\/Atelopus-reticulatus#0",
    "latitude": -9.15,
    "longitude": -75.75
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Churamiti\/Churamiti-maridadi#0",
    "latitude": -6.3888888888889,
    "longitude": 36.95
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Melanophryniscus\/Melanophryniscus-simplex#0",
    "latitude": -28.333333333333,
    "longitude": -49.633333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Melanophryniscus\/Melanophryniscus-spectabilis#0",
    "latitude": -27.15,
    "longitude": -52.416666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hemiphractidae\/Hemiphractinae\/Stefania\/Stefania-ackawaio#0",
    "latitude": 5.4,
    "longitude": -59.95
  },
  {
    "name_id": "Amphibia\/Anura\/Hemiphractidae\/Hemiphractinae\/Stefania\/Stefania-ayangannae#0",
    "latitude": 5.4,
    "longitude": -59.95
  },
  {
    "name_id": "Amphibia\/Anura\/Hemiphractidae\/Hemiphractinae\/Stefania\/Stefania-coxi#0",
    "latitude": 5.4,
    "longitude": -59.95
  },
  {
    "name_id": "Amphibia\/Anura\/Hemisotidae\/Hemisus\/Hemisus-barotseensis#0",
    "latitude": -15.260194444444,
    "longitude": 23.129444444444
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Boana\/Boana-rhythmica#0",
    "latitude": 4.8319444444444,
    "longitude": -64.431666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Hylinae\/Sarcohyla\/Sarcohyla-ameibothalame#0",
    "latitude": 17.85,
    "longitude": -97.566666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Osteocephalus\/Osteocephalus-heyeri#0",
    "latitude": -4.0838888888889,
    "longitude": -70.010833333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Osteocephalus\/Osteocephalus-mutabor#0",
    "latitude": -0.70666666666667,
    "longitude": -77.598333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hyperoliidae\/Kassininae\/Kassina\/Kassina-schioetzi#0",
    "latitude": 8.75,
    "longitude": -3.8166666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Boophinae\/Boophis\/Boophis-bottae#0",
    "latitude": -18.933333333333,
    "longitude": 48.416666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Boophinae\/Boophis\/Boophis-schuboeae#0",
    "latitude": -21.233333333333,
    "longitude": 47.433333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Mantellinae\/Blommersia\/Blommersia-sarotra#0",
    "latitude": -18.912222222222,
    "longitude": 47.914444444444
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Mantellinae\/Gephyromantis\/Gephyromantis-enki#0",
    "latitude": -21.25,
    "longitude": 47.4
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Mantellinae\/Gephyromantis\/Gephyromantis-moseri#0",
    "latitude": -18.9175,
    "longitude": 48.422777777778
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Mantellinae\/Wakea\/Wakea-madinika#0",
    "latitude": -13.939444444444,
    "longitude": 48.554444444444
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-verrucosus#3",
    "latitude": -10.483333333333,
    "longitude": 153.48333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Copiula\/Copiula-major#0",
    "latitude": -2.9333333333333,
    "longitude": 134.6
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Copiula\/Copiula-obsti#0",
    "latitude": -2.9333333333333,
    "longitude": 134.6
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Xenorhina\/Xenorhina-zweifeli#0",
    "latitude": -3.295,
    "longitude": 141.723
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Gastrophryninae\/Ctenophryne\/Ctenophryne-carpish#0",
    "latitude": -9.7219444444444,
    "longitude": -76.104444444444
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Microhylinae\/Kaloula\/Kaloula-walteri#0",
    "latitude": 14.066666666667,
    "longitude": 121.48333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Petropedetidae\/Arthroleptides\/Arthroleptides-yakusini#0",
    "latitude": -7.8158333333333,
    "longitude": 36.854166666667
  },
  {
    "name_id": "Amphibia\/Anura\/Phrynobatrachidae\/Phrynobatrachus\/Phrynobatrachus-phyllophilus#0",
    "latitude": 5.8333333333333,
    "longitude": -7.3333333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Phyllomedusidae\/Pithecopus\/Pithecopus-oreades#0",
    "latitude": -13.75,
    "longitude": -48.3
  },
  {
    "name_id": "Amphibia\/Anura\/Pyxicephalidae\/Cacosterninae\/Cacosternum\/Cacosternum-karooicum#0",
    "latitude": -33.929166666667,
    "longitude": 19.91
  },
  {
    "name_id": "Amphibia\/Anura\/Pyxicephalidae\/Cacosterninae\/Tomopterna\/Tomopterna-ahli#2",
    "latitude": -20.366666666667,
    "longitude": 14.966666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Rana\/Rana-coreana#3",
    "latitude": 37.283333333333,
    "longitude": 121.61666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Raorchestes\/Raorchestes-griet#0",
    "latitude": 10.083333333333,
    "longitude": 77.05
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Rhacophorus\/Rhacophorus-barisani#0",
    "latitude": -3.5005555555556,
    "longitude": 102.63555555556
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Rhacophorus\/Rhacophorus-catamitus#0",
    "latitude": -4.0513888888889,
    "longitude": 103.14444444444
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Zhangixalus\/Zhangixalus-achantharrhena#0",
    "latitude": -3.5005555555556,
    "longitude": 102.63555555556
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Batrachoseps\/Batrachoseps-robustus#0",
    "latitude": 35.9604,
    "longitude": -118.3514
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-guaramacalensis#0",
    "latitude": 9.2166666666667,
    "longitude": -70.166666666667
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-oaxacensis#0",
    "latitude": 16.473055555556,
    "longitude": -96.997222222222
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-zapoteca#0",
    "latitude": 16.287166666667,
    "longitude": -95.888333333333
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Nototriton\/Nototriton-saslaya#0",
    "latitude": 13.766666666667,
    "longitude": -85.038333333333
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Typhlonectidae\/Chthonerpeton\/Chthonerpeton-noctinectes#0",
    "latitude": -11.833333333333,
    "longitude": -37.583333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Brevicipitidae\/Breviceps\/Breviceps-bagginsi#0",
    "latitude": -28.511944444444,
    "longitude": 31.247777777778
  },
  {
    "name_id": "Amphibia\/Anura\/Brevicipitidae\/Breviceps\/Breviceps-sopranus#0",
    "latitude": -28.466666666667,
    "longitude": 32.416666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Atelopus\/Atelopus-dimorphus#0",
    "latitude": -9.1833333333333,
    "longitude": -75.833333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Duttaphrynus\/Duttaphrynus-crocus#0",
    "latitude": 17.696388888889,
    "longitude": 94.646861111111
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Rhinella\/Rhinella-amabilis#0",
    "latitude": -4.0,
    "longitude": -79.216666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Rhinella\/Rhinella-scitula#0",
    "latitude": -20.983333333333,
    "longitude": -56.516666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Centroleninae\/Vitreorana\/Vitreorana-gorzulae#7",
    "latitude": 5.9833333333333,
    "longitude": -61.4
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Hyalinobatrachinae\/Hyalinobatrachium\/Hyalinobatrachium-cappellei#5",
    "latitude": 5.7333333333333,
    "longitude": -60.3
  },
  {
    "name_id": "Amphibia\/Anura\/Cycloramphidae\/Cycloramphus\/Cycloramphus-acangatan#0",
    "latitude": -24.083333333333,
    "longitude": -48.35
  },
  {
    "name_id": "Amphibia\/Anura\/Hemiphractidae\/Hemiphractinae\/Stefania\/Stefania-breweri#0",
    "latitude": 4.8666666666667,
    "longitude": -67.45
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Aplastodiscus\/Aplastodiscus-ibirapitanga#0",
    "latitude": -13.95,
    "longitude": -39.45
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Aplastodiscus\/Aplastodiscus-sibilatus#0",
    "latitude": -13.516666666667,
    "longitude": -39.05
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Boana\/Boana-exastis#0",
    "latitude": -15.15,
    "longitude": -39.3
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Boana\/Boana-leucocheila#0",
    "latitude": -10.166666666667,
    "longitude": -59.466666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Bokermannohyla\/Bokermannohyla-lucianae#0",
    "latitude": -15.166666666667,
    "longitude": -39.066666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Hyloscirtus\/Hyloscirtus-tapichalaca#0",
    "latitude": -4.4666666666667,
    "longitude": -79.133333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Dendropsophinae\/Dendropsophus\/Dendropsophus-studerae#0",
    "latitude": -9.3188888888889,
    "longitude": -36.471111111111
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Phyllodytes\/Phyllodytes-edelmoi#0",
    "latitude": -9.5,
    "longitude": -35.666666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Phyllodytes\/Phyllodytes-gyrinaethes#0",
    "latitude": -9.2166666666667,
    "longitude": -35.866666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Trachycephalus\/Trachycephalus-lepidus#0",
    "latitude": -24.0,
    "longitude": -48.333333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hyperoliidae\/Kassininae\/Acanthixalus\/Acanthixalus-sonjae#0",
    "latitude": 5.8333333333333,
    "longitude": -7.3333333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Physalaemus\/Physalaemus-erythros#0",
    "latitude": -20.416666666667,
    "longitude": -43.483333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Pseudopaludicola\/Pseudopaludicola-canga#0",
    "latitude": -6.0,
    "longitude": -50.0
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leptodactylinae\/Leptodactylus\/Leptodactylus-caatingae#0",
    "latitude": -9.4166666666667,
    "longitude": -40.5
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Boophinae\/Boophis\/Boophis-solomaso#0",
    "latitude": -18.96,
    "longitude": 48.5
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Mantellinae\/Gephyromantis\/Gephyromantis-salegy#0",
    "latitude": -14.543333333333,
    "longitude": 49.43
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Megophryinae\/Megophrys\/Megophrys-gerti#0",
    "latitude": 11.933333333333,
    "longitude": 108.41666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Megophryinae\/Megophrys\/Megophrys-hansi#0",
    "latitude": 14.333333333333,
    "longitude": 108.6
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Austrochaperina\/Austrochaperina-septentrionalis#0",
    "latitude": -3.312,
    "longitude": 141.7
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Callulops\/Callulops-marmoratus#0",
    "latitude": -6.7166666666667,
    "longitude": 145.08333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Choerophryne\/Choerophryne-allisoni#0",
    "latitude": -6.1257833333333,
    "longitude": 142.76818333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-clamata#0",
    "latitude": -2.9333333333333,
    "longitude": 134.6
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-sibilans#0",
    "latitude": -2.9333333333333,
    "longitude": 134.63333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-unicolor#0",
    "latitude": -2.9333333333333,
    "longitude": 134.61666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Xenorhina\/Xenorhina-adisca#0",
    "latitude": -4.14009,
    "longitude": 137.09782
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Cophylinae\/Cophyla\/Cophyla-mavomavo#0",
    "latitude": -14.543333333333,
    "longitude": 49.43
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Cophylinae\/Cophyla\/Cophyla-tetra#0",
    "latitude": -14.766666666667,
    "longitude": 49.433333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Cophylinae\/Plethodontohyla\/Plethodontohyla-mihanika#0",
    "latitude": -17.733333333333,
    "longitude": 48.975
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Cophylinae\/Rhombophryne\/Rhombophryne-coronata#0",
    "latitude": -19.166666666667,
    "longitude": 48.033333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Gastrophryninae\/Chiasmocleis\/Chiasmocleis-cordeiroi#0",
    "latitude": -14.033333333333,
    "longitude": -39.15
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Gastrophryninae\/Chiasmocleis\/Chiasmocleis-crucis#0",
    "latitude": -14.033333333333,
    "longitude": -39.15
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Kalophryninae\/Kalophrynus\/Kalophrynus-eok#0",
    "latitude": 3.7005555555556,
    "longitude": 115.535
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Scaphiophryninae\/Scaphiophryne\/Scaphiophryne-boribory#0",
    "latitude": -18.492166666667,
    "longitude": 48.444666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Nasikabatrachidae\/Nasikabatrachus\/Nasikabatrachus-sahyadrensis#0",
    "latitude": 9.75,
    "longitude": 77.083333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Amolops\/Amolops-daorum#0",
    "latitude": 22.369166666667,
    "longitude": 103.83722222222
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Lithobates\/Lithobates-lemosespinali#0",
    "latitude": 27.521722222222,
    "longitude": -107.84736111111
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Odorrana\/Odorrana-bacboensis#0",
    "latitude": 18.941666666667,
    "longitude": 104.80972222222
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Odorrana\/Odorrana-banaorum#0",
    "latitude": 14.444166666667,
    "longitude": 108.56027777778
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Odorrana\/Odorrana-jingdongensis#1",
    "latitude": 22.369166666667,
    "longitude": 103.83722222222
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Odorrana\/Odorrana-morafkai#0",
    "latitude": 14.444166666667,
    "longitude": 108.56027777778
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Odorrana\/Odorrana-tiannanensis#3",
    "latitude": 18.941666666667,
    "longitude": 104.80972222222
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Odorrana\/Odorrana-trankieni#0",
    "latitude": 21.033333333333,
    "longitude": 104.5
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Papurana\/Papurana-aurata#0",
    "latitude": -3.6269444444444,
    "longitude": 135.97027777778
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Papurana\/Papurana-volkerjane#0",
    "latitude": -2.7666666666667,
    "longitude": 134.61666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Pulchrana\/Pulchrana-banjarana#0",
    "latitude": 4.4666666666667,
    "longitude": 101.38333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Chiromantis\/Chiromantis-punctatus#0",
    "latitude": 17.613555555556,
    "longitude": 4.6139444444444
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Philautus\/Raorchestes-sanctisilvaticus#5",
    "latitude": 21.733333333333,
    "longitude": 86.133333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Telmatobiidae\/Telmatobius\/Telmatobius-sibiricus#0",
    "latitude": -17.783333333333,
    "longitude": -64.7
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Pseudoeurycea\/Pseudoeurycea-aurantia#0",
    "latitude": 17.836666666667,
    "longitude": -96.784166666667
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Plethodontinae\/Desmognathus\/Desmognathus-abditus#0",
    "latitude": 36.06015,
    "longitude": -84.794566666667
  },
  {
    "name_id": "Amphibia\/Anura\/Alsodidae\/Eupsophus\/Eupsophus-septentrionalis#0",
    "latitude": -36.1,
    "longitude": -72.833333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Arthroleptidae\/Arthroleptinae\/Cardioglossa\/Cardioglossa-alsco#0",
    "latitude": 7.2333333333333,
    "longitude": 12.05
  },
  {
    "name_id": "Amphibia\/Anura\/Brevicipitidae\/Callulina\/Callulina-kisiwamsitu#0",
    "latitude": -4.8129166666667,
    "longitude": 38.503333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Ansonia\/Ansonia-glandulosa#0",
    "latitude": -2.7166666666667,
    "longitude": 102.36666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Incilius\/Incilius-aucoinae#0",
    "latitude": 8.4333333333333,
    "longitude": -83.633333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Melanophryniscus\/Melanophryniscus-krauczuki#0",
    "latitude": -27.490694444444,
    "longitude": -55.666194444444
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Nectophrynoides\/Nectophrynoides-frontierei#0",
    "latitude": -5.1166666666667,
    "longitude": 38.65
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Nectophrynoides\/Nectophrynoides-poyntoni#0",
    "latitude": -8.3958055555556,
    "longitude": 35.982055555556
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Nectophrynoides\/Nectophrynoides-pseudotornieri#0",
    "latitude": -6.8777777777778,
    "longitude": 37.916666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Nectophrynoides\/Nectophrynoides-vestergaardi#0",
    "latitude": -5.1,
    "longitude": 38.416666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Rhinella\/Rhinella-abei#0",
    "latitude": -25.466666666667,
    "longitude": -48.833333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Rhinella\/Rhinella-achavali#0",
    "latitude": -33.266666666667,
    "longitude": -55.116666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Rhinella\/Rhinella-crucifer#9",
    "latitude": -19.816666666667,
    "longitude": -43.35
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Rhinella\/Rhinella-ornata#13",
    "latitude": -19.816666666667,
    "longitude": -43.35
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Werneria\/Werneria-iboundji#0",
    "latitude": -1.145,
    "longitude": 11.78
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Werneria\/Werneria-submontana#0",
    "latitude": 4.95,
    "longitude": 9.65
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Centroleninae\/Cochranella\/Cochranella-mache#0",
    "latitude": 0.34472222222222,
    "longitude": -79.71
  },
  {
    "name_id": "Amphibia\/Anura\/Ceratobatrachidae\/Ceratobatrachinae\/Cornufer\/Cornufer-mamusiorum#0",
    "latitude": -5.5518666666667,
    "longitude": 151.07115
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Boana\/Boana-beckeri#0",
    "latitude": -22.783333333333,
    "longitude": -46.566666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Boana\/Boana-freicanecae#0",
    "latitude": -8.7166666666667,
    "longitude": -35.833333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Boana\/Boana-latistriata#0",
    "latitude": -22.35,
    "longitude": -44.733333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Boana\/Boana-pombali#0",
    "latitude": -16.0,
    "longitude": -39.95
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Bokermannohyla\/Bokermannohyla-ahenea#0",
    "latitude": -22.633333333333,
    "longitude": -44.566666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Bokermannohyla\/Bokermannohyla-nanuzae#1",
    "latitude": -21.716666666667,
    "longitude": -43.916666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Phyllodytes\/Phyllodytes-punctatus#0",
    "latitude": -10.783333333333,
    "longitude": -36.9
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Scinax\/Scinax-curicica#0",
    "latitude": -19.254444444444,
    "longitude": -43.538333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Scinax\/Scinax-manriquei#0",
    "latitude": 8.1166666666667,
    "longitude": -71.6
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Engystomops\/Engystomops-montubio#0",
    "latitude": -1.639,
    "longitude": -80.83
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Engystomops\/Engystomops-randi#0",
    "latitude": -2.394,
    "longitude": -79.642
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Physalaemus\/Physalaemus-atlanticus#0",
    "latitude": -23.383333333333,
    "longitude": -44.833333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Physalaemus\/Physalaemus-erikae#0",
    "latitude": -16.6,
    "longitude": -39.916666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-aenigma#0",
    "latitude": -16.166666666667,
    "longitude": 145.37222222222
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Gastrophryninae\/Chiasmocleis\/Chiasmocleis-gnoma#0",
    "latitude": -15.166666666667,
    "longitude": -30.05
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Microhylinae\/Glyphoglossus\/Glyphoglossus-minutus#0",
    "latitude": 4.6795277777778,
    "longitude": 102.05588888889
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Microhylinae\/Microhyla\/Microhyla-marmorata#0",
    "latitude": 18.348055555556,
    "longitude": 105.24388888889
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Microhylinae\/Microhyla\/Microhyla-nanapollexa#0",
    "latitude": 15.178333333333,
    "longitude": 108.04222222222
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Microhylinae\/Microhyla\/Microhyla-pulverata#0",
    "latitude": 14.333333333333,
    "longitude": 108.6
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/\"Litoria\"-multicolor#0",
    "latitude": -2.9333333333333,
    "longitude": 134.6
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Litoriinae\/Litoria\/Litoria-bibonius#0",
    "latitude": -10.183,
    "longitude": 150.97706666667
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Litoriinae\/Litoria\/Litoria-flavescens#0",
    "latitude": -9.963,
    "longitude": 150.95413333333
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Litoriinae\/Litoria\/Litoria-rubrops#0",
    "latitude": -10.497083333333,
    "longitude": 150.23296666667
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Litoriinae\/Litoria\/Litoria-umarensis#0",
    "latitude": -2.9833333333333,
    "longitude": 134.58333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Litoriinae\/Litoria\/Litoria-verae#0",
    "latitude": -2.9333333333333,
    "longitude": 134.63333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Pelodryadinae\/Ranoidea\/Ranoidea-auae#0",
    "latitude": -7.2166666666667,
    "longitude": 145.15
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Pelodryadinae\/Ranoidea\/Ranoidea-jungguy#0",
    "latitude": -17.183333333333,
    "longitude": 145.56666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Pelodryadinae\/Ranoidea\/Ranoidea-kumae#0",
    "latitude": -5.85,
    "longitude": 142.88333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Phrynobatrachidae\/Phrynobatrachus\/Phrynobatrachus-bullans#0",
    "latitude": -7.6666666666667,
    "longitude": 35.0
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Amolops\/Amolops-iriodes#0",
    "latitude": 22.769444444444,
    "longitude": 104.83138888889
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Odorrana\/Odorrana-tiannanensis#4",
    "latitude": 22.9075,
    "longitude": 105.23305555556
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Gracixalus\/Gracixalus-ananjevae#0",
    "latitude": 18.266666666667,
    "longitude": 105.46666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Gracixalus\/Gracixalus-supercornutus#0",
    "latitude": 16.175833333333,
    "longitude": 107.80638888889
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Theloderma\/Theloderma-petilum#0",
    "latitude": 22.095555555556,
    "longitude": 2.1361111111111
  },
  {
    "name_id": "Amphibia\/Caudata\/Ambystomatidae\/Ambystoma\/Ambystoma-silvense#0",
    "latitude": 23.9,
    "longitude": -105.05
  },
  {
    "name_id": "Amphibia\/Caudata\/Hynobiidae\/Hynobiinae\/Hynobius\/Hynobius-guabangshanensis#0",
    "latitude": 26.618888888889,
    "longitude": 111.93361111111
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Aquiloeurycea\/Aquiloeurycea-quetzalanensis#0",
    "latitude": 19.966666666667,
    "longitude": -97.533333333333
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-heiroreias#0",
    "latitude": 14.401111111111,
    "longitude": -89.350555555556
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Pseudoeurycea\/Pseudoeurycea-ruficauda#0",
    "latitude": 18.174166666667,
    "longitude": -97.003283333333
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Plethodontinae\/Plethodon\/Plethodon-sherando#0",
    "latitude": 37.919166666667,
    "longitude": -79.066666666667
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Herpelidae\/Boulengerula\/Boulengerula-niedeni#0",
    "latitude": -3.5126666666667,
    "longitude": 38.5765
  },
  {
    "name_id": "Amphibia\/Anura\/Alsodidae\/Alsodes\/Alsodes-igneus#0",
    "latitude": -38.2,
    "longitude": -71.8
  },
  {
    "name_id": "Amphibia\/Anura\/Alsodidae\/Eupsophus\/Eupsophus-septentrionalis#1",
    "latitude": -35.983333333333,
    "longitude": -72.683333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Arthroleptidae\/Leptopelinae\/Leptopelis\/Leptopelis-brevirostris#6",
    "latitude": 0.61666666666667,
    "longitude": 10.4
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Atelopus\/Atelopus-epikeisthos#0",
    "latitude": -6.2666666666667,
    "longitude": -77.683333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Nannophryne\/Nannophryne-apolobambica#0",
    "latitude": -14.785833333333,
    "longitude": -69.026111111111
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Nectophrynoides\/Nectophrynoides-laticeps#0",
    "latitude": -6.38,
    "longitude": 36.933888888889
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Oreophrynella\/Oreophrynella-weiassipuensis#0",
    "latitude": 5.2169444444444,
    "longitude": -60.705277777778
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Rhinella\/Rhinella-multiverrucosa#0",
    "latitude": -10.735,
    "longitude": -75.711833333333
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Centroleninae\/Teratohyla\/Teratohyla-adenocheira#0",
    "latitude": -13.6,
    "longitude": -60.916666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hemiphractidae\/Hemiphractinae\/Gastrotheca\/Gastrotheca-antoniiochoai#0",
    "latitude": -13.189166666667,
    "longitude": -71.584866666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hemiphractidae\/Hemiphractinae\/Gastrotheca\/Gastrotheca-piperata#0",
    "latitude": -17.483333333333,
    "longitude": -65.283333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Aplastodiscus\/Aplastodiscus-eugenioi#0",
    "latitude": -22.901388888889,
    "longitude": -44.018888888889
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Bokermannohyla\/Bokermannohyla-caramaschii#0",
    "latitude": -19.933333333333,
    "longitude": -40.6
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Dendropsophinae\/Dendropsophus\/Dendropsophus-coffea#0",
    "latitude": -15.55,
    "longitude": -67.5
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Hylinae\/Sarcohyla\/Sarcohyla-labeculata#3",
    "latitude": 16.759,
    "longitude": -5.461
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Tepuihyla\/Tepuihyla-exophthalma#2",
    "latitude": 5.4,
    "longitude": -59.95
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Scinax\/Scinax-constrictus#0",
    "latitude": -16.8,
    "longitude": -49.916666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hylodidae\/Crossodactylus\/Crossodactylus-cyclospinus#0",
    "latitude": -15.883333333333,
    "longitude": -40.466666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Engystomops\/Engystomops-guayaco#0",
    "latitude": -2.394,
    "longitude": -79.642
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Physalaemus\/Physalaemus-camacan#0",
    "latitude": -15.166666666667,
    "longitude": -39.066666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leptodactylinae\/Leptodactylus\/Leptodactylus-lauramiriamae#0",
    "latitude": -12.716666666667,
    "longitude": -60.116666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leptodactylinae\/Leptodactylus\/Leptodactylus-paraensis#0",
    "latitude": -7.7666666666667,
    "longitude": -51.95
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leptodactylinae\/Leptodactylus\/Leptodactylus-peritoaktites#0",
    "latitude": -0.05,
    "longitude": -79.333333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leptodactylinae\/Leptodactylus\/Leptodactylus-rhodomerus#0",
    "latitude": 3.9666666666667,
    "longitude": -76.733333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leptodactylinae\/Leptodactylus\/Leptodactylus-savagei#0",
    "latitude": 8.7,
    "longitude": -83.483333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leptodactylinae\/Leptodactylus\/Leptodactylus-turimiquensis#0",
    "latitude": 10.133333333333,
    "longitude": -63.1
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Boophinae\/Boophis\/Boophis-axelmeyeri#0",
    "latitude": -14.045,
    "longitude": 48.784444444444
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Mantellinae\/Guibemantis\/Guibemantis-timidus#0",
    "latitude": -18.064166666667,
    "longitude": 49.3775
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachium\/Leptobrachium-huashen#0",
    "latitude": 24.466666666667,
    "longitude": 101.08333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachium\/Leptobrachium-ngoclinhense#0",
    "latitude": 15.083333333333,
    "longitude": 7.95
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Megophryinae\/Megophrys\/Megophrys-huangshanensis#0",
    "latitude": 30.133333333333,
    "longitude": 118.16666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Megophryinae\/Megophrys\/Megophrys-parallela#0",
    "latitude": -0.98333333333333,
    "longitude": 100.63333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Choerophryne\/Choerophryne-exclamitans#0",
    "latitude": -6.8162,
    "longitude": 146.6915
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Choerophryne\/Choerophryne-sanguinopicta#0",
    "latitude": -10.0245,
    "longitude": 149.5947
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-geminus#0",
    "latitude": -5.0166666666667,
    "longitude": 141.1
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-terrestris#0",
    "latitude": -5.0166666666667,
    "longitude": 141.1
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Xenorhina\/Xenorhina-macrodisca#0",
    "latitude": -3.1447833333333,
    "longitude": 136.57371666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Cophylinae\/Anodonthyla\/Anodonthyla-moramora#0",
    "latitude": -21.216666666667,
    "longitude": 47.366666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Cophylinae\/Cophyla\/Cophyla-berara#0",
    "latitude": -14.309166666667,
    "longitude": 47.915333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Microhylinae\/Kaloula\/Kaloula-assamensis#0",
    "latitude": 26.75,
    "longitude": 92.333333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Nyctibatrachidae\/Nyctibatrachinae\/Nyctibatrachus\/Nyctibatrachus-petraeus#0",
    "latitude": 15.416666666667,
    "longitude": 74.316666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Odontophrynidae\/Proceratophrys\/Proceratophrys-paviotii#0",
    "latitude": -19.95,
    "longitude": -40.516666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Litoriinae\/Litoria\/Litoria-scabra#0",
    "latitude": -3.1447833333333,
    "longitude": 136.57371666667
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Litoriinae\/Litoria\/Litoria-singadanae#0",
    "latitude": -5.8737333333333,
    "longitude": 146.71096666667
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Pelodryadinae\/Ranoidea\/Ranoidea-rara#0",
    "latitude": -3.49195,
    "longitude": 135.73188333333
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Pelodryadinae\/Ranoidea\/Ranoidea-rivicola#0",
    "latitude": -3.49195,
    "longitude": 135.73188333333
  },
  {
    "name_id": "Amphibia\/Anura\/Pyxicephalidae\/Cacosterninae\/Cacosternum\/Cacosternum-plimptoni#0",
    "latitude": -2.2877777777778,
    "longitude": 34.471111111111
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Odorrana\/Odorrana-absita#0",
    "latitude": 16.008888888889,
    "longitude": 106.92527777778
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Odorrana\/Odorrana-bolavensis#0",
    "latitude": 15.076944444444,
    "longitude": 106.1375
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Odorrana\/Odorrana-khalam#0",
    "latitude": 16.069444444444,
    "longitude": 6.9791666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Odorrana\/Odorrana-orba#0",
    "latitude": 17.966666666667,
    "longitude": 105.56666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Odorrana\/Odorrana-tiannanensis#7",
    "latitude": 22.093888888889,
    "longitude": 102.21388888889
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Leptomantis\/Leptomantis-gadingensis#0",
    "latitude": 3.7005555555556,
    "longitude": 15.535
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Polypedates\/Polypedates-chlorophthalmus#0",
    "latitude": 4.08725,
    "longitude": 15.478527777778
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-abundus#0",
    "latitude": 6.8697222222222,
    "longitude": 80.178611111111
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-alto#0",
    "latitude": 6.7666666666667,
    "longitude": 80.783333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-asankai#0",
    "latitude": 6.8433333333333,
    "longitude": 80.677777777778
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-auratus#0",
    "latitude": 6.4,
    "longitude": 80.633333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-caeruleus#0",
    "latitude": 6.8,
    "longitude": 80.516666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-cuspis#0",
    "latitude": 6.4166666666667,
    "longitude": 80.45
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-decoris#0",
    "latitude": 6.4,
    "longitude": 80.633333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-folicola#0",
    "latitude": 6.1,
    "longitude": 80.333333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-frankenbergi#0",
    "latitude": 6.7666666666667,
    "longitude": 81.116666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-fulvus#0",
    "latitude": 7.55,
    "longitude": 80.733333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-hallidayi#0",
    "latitude": 7.25,
    "longitude": 80.566666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-hoffmanni#0",
    "latitude": 7.3666666666667,
    "longitude": 80.85
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-hoipolloi#0",
    "latitude": 6.3333333333333,
    "longitude": 80.3
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-limbus#0",
    "latitude": 6.3333333333333,
    "longitude": 80.3
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-lunatus#0",
    "latitude": 6.445,
    "longitude": 80.609722222222
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-mittermeieri#0",
    "latitude": 6.1,
    "longitude": 80.333333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-mooreorum#0",
    "latitude": 7.3666666666667,
    "longitude": 80.85
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-nemus#0",
    "latitude": 6.3333333333333,
    "longitude": 80.3
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-ocularis#0",
    "latitude": 6.4,
    "longitude": 80.633333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-papillosus#0",
    "latitude": 6.445,
    "longitude": 80.609722222222
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-poppiae#0",
    "latitude": 6.445,
    "longitude": 80.609722222222
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-popularis#0",
    "latitude": 7.2666666666667,
    "longitude": 80.566666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-procax#0",
    "latitude": 6.4,
    "longitude": 80.633333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-regius#0",
    "latitude": 7.85,
    "longitude": 80.916666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-rus#0",
    "latitude": 7.2666666666667,
    "longitude": 80.566666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-silus#0",
    "latitude": 6.85,
    "longitude": 80.683333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-silvaticus#0",
    "latitude": 6.445,
    "longitude": 80.609722222222
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-simba#0",
    "latitude": 6.4,
    "longitude": 80.633333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-sordidus#0",
    "latitude": 6.25,
    "longitude": 80.333333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-steineri#0",
    "latitude": 7.3666666666667,
    "longitude": 80.85
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-stuarti#0",
    "latitude": 7.3666666666667,
    "longitude": 80.85
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-viridis#0",
    "latitude": 6.85,
    "longitude": 80.683333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Raorchestes\/Raorchestes-bobingeri#0",
    "latitude": 8.75,
    "longitude": 77.133333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Raorchestes\/Raorchestes-graminirupes#0",
    "latitude": 8.75,
    "longitude": 77.133333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Raorchestes\/Raorchestes-nerostagona#0",
    "latitude": 11.633333333333,
    "longitude": 76.133333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Raorchestes\/Raorchestes-ponmudi#0",
    "latitude": 8.75,
    "longitude": 77.133333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Rhacophorus\/Rhacophorus-bipunctatus#5",
    "latitude": 27.293583333333,
    "longitude": 97.862583333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Theloderma\/Theloderma-truongsonense#0",
    "latitude": 16.919166666667,
    "longitude": 106.58444444444
  },
  {
    "name_id": "Amphibia\/Anura\/Telmatobiidae\/Telmatobius\/Telmatobius-espadai#0",
    "latitude": -17.8,
    "longitude": -67.35
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-magnifica#0",
    "latitude": 8.7933333333333,
    "longitude": -82.500833333333
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-obscura#0",
    "latitude": 9.7216666666667,
    "longitude": -83.78
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-oresbia#0",
    "latitude": 14.7277,
    "longitude": -87.89875
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-sombra#0",
    "latitude": 8.9433333333333,
    "longitude": -82.75
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Isthmura\/Isthmura-maxima#0",
    "latitude": 16.978333333333,
    "longitude": -97.896666666667
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Pseudoeurycea\/Pseudoeurycea-obesa#0",
    "latitude": 18.139766666667,
    "longitude": -96.956616666667
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Pseudoeurycea\/Pseudoeurycea-papenfussi#0",
    "latitude": 17.579166666667,
    "longitude": -96.509833333333
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Plethodontinae\/Karsenia\/Karsenia-koreana#0",
    "latitude": 36.216666666667,
    "longitude": -127.33333333333
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Plethodontinae\/Plethodon\/Plethodon-asupak#0",
    "latitude": 41.774,
    "longitude": -123.031
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Pleurodelinae\/Ommatotriton\/Ommatotriton-nesterovi#0",
    "latitude": 40.7,
    "longitude": 31.55
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Pleurodelinae\/Tylototriton\/Tylototriton-vietnamensis#0",
    "latitude": 21.2,
    "longitude": 106.66666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Arthroleptidae\/Arthroleptinae\/Arthroleptis\/Arthroleptis-nlonakoensis#0",
    "latitude": 4.85,
    "longitude": 9.9
  },
  {
    "name_id": "Amphibia\/Anura\/Brevicipitidae\/Probreviceps\/Probreviceps-durirostris#0",
    "latitude": -6.35875,
    "longitude": 36.982722222222
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Ansonia\/Ansonia-endauensis#0",
    "latitude": 2.5344444444444,
    "longitude": 103.40722222222
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Ansonia\/Ansonia-latirostra#0",
    "latitude": 3.871,
    "longitude": 103.05216666667
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Atelopus\/Atelopus-pyrodactylus#0",
    "latitude": -6.6886111111111,
    "longitude": -77.696666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Rhinella\/Rhinella-hoogmoedi#0",
    "latitude": -15.683333333333,
    "longitude": -38.95
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Rhinella\/Rhinella-tacana#0",
    "latitude": -14.3245,
    "longitude": -68.093361111111
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Centroleninae\/Chimerella\/Chimerella-mariaelenae#0",
    "latitude": -4.25,
    "longitude": -78.933333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Centroleninae\/Cochranella\/Cochranella-phryxa#0",
    "latitude": -15.376944444444,
    "longitude": -67.201111111111
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Centroleninae\/Nymphargus\/Nymphargus-wileyi#0",
    "latitude": -0.68333333333333,
    "longitude": -77.883333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Ceratobatrachidae\/Ceratobatrachinae\/Cornufer\/Cornufer-adiastolus#0",
    "latitude": -5.3606333333333,
    "longitude": 152.08776666667
  },
  {
    "name_id": "Amphibia\/Anura\/Ceratobatrachidae\/Ceratobatrachinae\/Cornufer\/Cornufer-nakanaiorum#0",
    "latitude": -5.5518666666667,
    "longitude": 151.07115
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Fejervarya\/Fejervarya-triora#0",
    "latitude": 14.434777777778,
    "longitude": 5.2535555555556
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Boana\/Boana-nympha#0",
    "latitude": -0.083888888888889,
    "longitude": -76.215
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Bokermannohyla\/Bokermannohyla-diamantina#0",
    "latitude": -13.268888888889,
    "longitude": -41.910833333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Bokermannohyla\/Bokermannohyla-itapoty#0",
    "latitude": -12.553611111111,
    "longitude": -41.413333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Bokermannohyla\/Bokermannohyla-oxente#0",
    "latitude": -12.558888888889,
    "longitude": -41.404166666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Myersiohyla\/Myersiohyla-liliae#0",
    "latitude": 5.1808333333333,
    "longitude": -59.4825
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Dendropsophinae\/Dendropsophus\/Dendropsophus-juliani#0",
    "latitude": -11.55,
    "longitude": -66.933333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Hylinae\/Bromeliohyla\/Bromeliohyla-melacaena#0",
    "latitude": 15.516666666667,
    "longitude": -88.2
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Hylinae\/Sarcohyla\/Sarcohyla-miahuatlanensis#0",
    "latitude": 16.214066666667,
    "longitude": -96.5323
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Physalaemus\/Physalaemus-angrensis#0",
    "latitude": -22.916666666667,
    "longitude": -44.35
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leptodactylinae\/Adenomera\/Adenomera-thomei#0",
    "latitude": -19.55,
    "longitude": -39.766666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Mantellinae\/Tsingymantis\/Tsingymantis-antitra#0",
    "latitude": -12.956944444444,
    "longitude": 49.118055555556
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-fuliginosa#0",
    "latitude": 12.533333333333,
    "longitude": 99.566666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-melanoleuca#0",
    "latitude": 9.25,
    "longitude": 98.65
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-sola#0",
    "latitude": 5.8166666666667,
    "longitude": 101.78333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachium\/Leptobrachium-mouhoti#0",
    "latitude": 12.302333333333,
    "longitude": 107.05225
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachium\/Leptobrachium-promustache#0",
    "latitude": 22.907916666667,
    "longitude": 103.69586111111
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Megophryinae\/Megophrys\/Megophrys-synoria#0",
    "latitude": 12.291666666667,
    "longitude": 7.0516666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-ateles#2",
    "latitude": -9.4456,
    "longitude": 148.0064
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-timidus#0",
    "latitude": -10.0316,
    "longitude": 149.5767
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-variabilis#0",
    "latitude": -10.2851,
    "longitude": 150.1822
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Scaphiophryninae\/Paradoxophyla\/Paradoxophyla-tiarano#0",
    "latitude": -15.381166666667,
    "longitude": 49.987833333333
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/\"Litoria\"-richardsi#0",
    "latitude": -5.2916666666667,
    "longitude": 141.19861111111
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Litoriinae\/Litoria\/Litoria-biakensis#0",
    "latitude": -0.93333333333333,
    "longitude": 136.0
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Litoriinae\/Litoria\/Litoria-hilli#0",
    "latitude": -11.466666666667,
    "longitude": 153.48333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Litoriinae\/Litoria\/Litoria-megalops#0",
    "latitude": -3.1447222222222,
    "longitude": 136.57361111111
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Litoriinae\/Litoria\/Litoria-spartacus#0",
    "latitude": -6.3638833333333,
    "longitude": 143.22468333333
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Pelodryadinae\/Nyctimystes\/Nyctimystes-dux#0",
    "latitude": -5.8543833333333,
    "longitude": 146.73428333333
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Pelodryadinae\/Nyctimystes\/Nyctimystes-gramineus#2",
    "latitude": -5.8543833333333,
    "longitude": 146.73428333333
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Pelodryadinae\/Nyctimystes\/Nyctimystes-sauroni#0",
    "latitude": -7.1295166666667,
    "longitude": 143.61343333333
  },
  {
    "name_id": "Amphibia\/Anura\/Phyllomedusidae\/Phyllomedusa\/Phyllomedusa-neildi#0",
    "latitude": 11.033333333333,
    "longitude": -69.583333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Phyllomedusidae\/Pithecopus\/Pithecopus-nordestinus#0",
    "latitude": -13.433333333333,
    "longitude": -40.433333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Amolops\/Amolops-compotrix#0",
    "latitude": 17.966666666667,
    "longitude": 105.56666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Amolops\/Amolops-cucae#0",
    "latitude": 21.923055555556,
    "longitude": 104.37861111111
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Amolops\/Amolops-vitreus#0",
    "latitude": 22.151111111111,
    "longitude": 102.20527777778
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Odorrana\/Odorrana-aureola#0",
    "latitude": 17.259,
    "longitude": 1.5063333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Odorrana\/Odorrana-gigatympana#0",
    "latitude": 14.66,
    "longitude": 8.3061111111111
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Raorchestes\/Raorchestes-anili#0",
    "latitude": 11.633333333333,
    "longitude": 76.133333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Raorchestes\/Raorchestes-dubois#0",
    "latitude": 10.216666666667,
    "longitude": 77.483333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Theloderma\/Theloderma-ryabovi#0",
    "latitude": 14.690277777778,
    "longitude": 9.3252777777778
  },
  {
    "name_id": "Amphibia\/Anura\/Telmatobiidae\/Telmatobius\/Telmatobius-chusmisensis#0",
    "latitude": -19.683333333333,
    "longitude": -69.216666666667
  },
  {
    "name_id": "Amphibia\/Caudata\/Hynobiidae\/Hynobiinae\/Hynobius\/Hynobius-maoershanensis#0",
    "latitude": 25.866666666667,
    "longitude": 110.4
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Oedipina\/Oedipina-tomasi#0",
    "latitude": 15.5,
    "longitude": -88.233333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Atelopus\/Atelopus-onorei#0",
    "latitude": -2.79,
    "longitude": -79.36
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Atelopus\/Atelopus-petersi#0",
    "latitude": -0.21,
    "longitude": -78.7
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Frostius\/Frostius-erythrophthalmus#0",
    "latitude": -14.416666666667,
    "longitude": -39.066666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Ingerophrynus\/Ingerophrynus-gollum#0",
    "latitude": 2.5344444444444,
    "longitude": 103.40722222222
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Oreophrynella\/Oreophrynella-macconnelli#2",
    "latitude": 5.4018333333333,
    "longitude": -59.956833333333
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Rhinella\/Rhinella-cerradensis#0",
    "latitude": -14.816666666667,
    "longitude": -45.966666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Rhinella\/Rhinella-magnussoni#0",
    "latitude": -3.15313,
    "longitude": -54.84216
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Rhinella\/Rhinella-manu#0",
    "latitude": -13.105333333333,
    "longitude": -71.283333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Rhinella\/Rhinella-martyi#0",
    "latitude": 4.9333333333333,
    "longitude": -55.166666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Centroleninae\/Espadarana\/Espadarana-callistomma#0",
    "latitude": 1.0871666666667,
    "longitude": -78.6905
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Centroleninae\/Espadarana\/Espadarana-durrellorum#0",
    "latitude": -4.05,
    "longitude": -78.933333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Centroleninae\/Nymphargus\/Nymphargus-buenaventura#0",
    "latitude": -3.6333333333333,
    "longitude": -79.75
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Centroleninae\/Nymphargus\/Nymphargus-laurae#0",
    "latitude": -77.333333333333,
    "longitude": -0.66666666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Centroleninae\/Nymphargus\/Nymphargus-vicenteruedai#0",
    "latitude": 6.0203611111111,
    "longitude": -73.097888888889
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Centroleninae\/Teratohyla\/Teratohyla-amelie#0",
    "latitude": -1.3180555555556,
    "longitude": -77.711388888889
  },
  {
    "name_id": "Amphibia\/Anura\/Ceratobatrachidae\/Ceratobatrachinae\/Cornufer\/Cornufer-admiraltiensis#0",
    "latitude": -2.01815,
    "longitude": 146.79678333333
  },
  {
    "name_id": "Amphibia\/Anura\/Ceratobatrachidae\/Ceratobatrachinae\/Cornufer\/Cornufer-bufonulus#0",
    "latitude": -5.4985,
    "longitude": 151.4893
  },
  {
    "name_id": "Amphibia\/Anura\/Ceratobatrachidae\/Ceratobatrachinae\/Cornufer\/Cornufer-latro#0",
    "latitude": -2.01815,
    "longitude": 146.79678333333
  },
  {
    "name_id": "Amphibia\/Anura\/Ceratobatrachidae\/Ceratobatrachinae\/Cornufer\/Cornufer-sulcatus#0",
    "latitude": -5.42868,
    "longitude": 151.45654
  },
  {
    "name_id": "Amphibia\/Anura\/Ceratobatrachidae\/Ceratobatrachinae\/Platymantis\/Platymantis-diesmosi#0",
    "latitude": 13.436666666667,
    "longitude": 123.59
  },
  {
    "name_id": "Amphibia\/Anura\/Ceratobatrachidae\/Ceratobatrachinae\/Platymantis\/Platymantis-paengi#0",
    "latitude": 11.41465,
    "longitude": 122.10465
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Nannophrys\/Nannophrys-naeyakai#0",
    "latitude": 7.4,
    "longitude": 81.2
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Boana\/Boana-curupi#0",
    "latitude": -26.9175,
    "longitude": -54.430555555556
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Phyllodytes\/Phyllodytes-maculosus#0",
    "latitude": -15.816666666667,
    "longitude": -40.5
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Sphaenorhynchus\/Sphaenorhynchus-caramaschii#0",
    "latitude": -24.358333333333,
    "longitude": -48.743055555556
  },
  {
    "name_id": "Amphibia\/Anura\/Hylodidae\/Hylodes\/Hylodes-fredi#0",
    "latitude": -23.15,
    "longitude": -44.5
  },
  {
    "name_id": "Amphibia\/Anura\/Hylodidae\/Hylodes\/Hylodes-pipilans#0",
    "latitude": -22.366666666667,
    "longitude": -42.75
  },
  {
    "name_id": "Amphibia\/Anura\/Hyperoliidae\/Kassininae\/Kassina\/Kassina-jozani#0",
    "latitude": -6.2712166666667,
    "longitude": 39.418366666667
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Physalaemus\/Physalaemus-irroratus#0",
    "latitude": -16.416666666667,
    "longitude": -40.05
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leptodactylinae\/Hydrolaetare\/Hydrolaetare-caparu#0",
    "latitude": -14.81325,
    "longitude": -61.160033333333
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leptodactylinae\/Leptodactylus\/Leptodactylus-sertanejo#0",
    "latitude": -19.0,
    "longitude": -48.314722222222
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Mantellinae\/Gephyromantis\/Gephyromantis-azzurrae#0",
    "latitude": -22.373333333333,
    "longitude": 45.3785
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Mantellinae\/Gephyromantis\/Gephyromantis-runewsweeki#0",
    "latitude": -21.334216666667,
    "longitude": 47.413116666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Choerophryne\/Choerophryne-burtoni#0",
    "latitude": -6.2393833333333,
    "longitude": 143.12766666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Hylophorbus\/Hylophorbus-rainerguentheri#0",
    "latitude": -5.8737333333333,
    "longitude": 146.71096666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Cophylinae\/Anodonthyla\/Anodonthyla-hutchisoni#0",
    "latitude": -15.680333333333,
    "longitude": 49.9625
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Cophylinae\/Plethodontohyla\/Plethodontohyla-fonetana#0",
    "latitude": -18.797222222222,
    "longitude": 44.881388888889
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Cophylinae\/Plethodontohyla\/Plethodontohyla-guentheri#0",
    "latitude": -14.433333333333,
    "longitude": 49.733333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Gastrophryninae\/Chiasmocleis\/Chiasmocleis-mantiqueira#0",
    "latitude": -20.883333333333,
    "longitude": -42.516666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Gastrophryninae\/Chiasmocleis\/Chiasmocleis-sapiranga#0",
    "latitude": -12.566666666667,
    "longitude": -38.033333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Nyctibatrachidae\/Nyctibatrachinae\/Nyctibatrachus\/Nyctibatrachus-karnatakaensis#1",
    "latitude": 13.36,
    "longitude": 75.131666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Nyctibatrachidae\/Nyctibatrachinae\/Nyctibatrachus\/Nyctibatrachus-minimus#0",
    "latitude": 11.583333333333,
    "longitude": 75.966666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Litoriinae\/Litoria\/Litoria-chrisdahli#0",
    "latitude": -3.7870666666667,
    "longitude": 143.65208333333
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Litoriinae\/Litoria\/Litoria-hilli#1",
    "latitude": -11.4902,
    "longitude": 153.4198
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Litoriinae\/Litoria\/Litoria-staccato#0",
    "latitude": -15.7254,
    "longitude": 128.27953
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Pelodryadinae\/Nyctimystes\/Nyctimystes-purpureolatus#0",
    "latitude": -3.2916666666667,
    "longitude": 138.58138888889
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Pelodryadinae\/Ranoidea\/Ranoidea-fuscula#0",
    "latitude": -3.4421166666667,
    "longitude": 136.47275
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Pelodryadinae\/Ranoidea\/Ranoidea-myola#0",
    "latitude": -16.821666666667,
    "longitude": 145.63833333333
  },
  {
    "name_id": "Amphibia\/Anura\/Phrynobatrachidae\/Phrynobatrachus\/Phrynobatrachus-leveleve#0",
    "latitude": 0.3,
    "longitude": 6.7333333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Phyllomedusidae\/Pithecopus\/Pithecopus-oreades#1",
    "latitude": -19.2,
    "longitude": -47.166666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Amolops\/Amolops-minutus#0",
    "latitude": 22.41625,
    "longitude": 3.6120277777778
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Amolops\/Amolops-splendissimus#0",
    "latitude": 22.40125,
    "longitude": 3.6090833333333
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Odorrana\/Odorrana-yizhangensis#0",
    "latitude": 25.0,
    "longitude": 113.0
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Papurana\/Papurana-waliesa#0",
    "latitude": -9.4683,
    "longitude": 150.8315
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Rana\/Rana-maoershanensis#0",
    "latitude": 25.866666666667,
    "longitude": 110.4
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Chiromantis\/Chiromantis-samkosensis#0",
    "latitude": 12.14695,
    "longitude": 103.13445
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Raorchestes\/Raorchestes-luteolus#1",
    "latitude": 14.140277777778,
    "longitude": 74.795555555556
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Raorchestes\/Raorchestes-ochlandrae#0",
    "latitude": 11.554444444444,
    "longitude": 75.92
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Theloderma\/Theloderma-licin#0",
    "latitude": 3.67,
    "longitude": 2.7427777777778
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Zhangixalus\/Zhangixalus-yinggelingensis#0",
    "latitude": 18.9565,
    "longitude": 9.3839166666667
  },
  {
    "name_id": "Amphibia\/Caudata\/Hynobiidae\/Hynobiinae\/Pseudohynobius\/Pseudohynobius-kuankuoshuiensis#0",
    "latitude": 28.2,
    "longitude": 107.16666666667
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-gomezi#0",
    "latitude": 8.7930555555556,
    "longitude": -82.958333333333
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Oedipina\/Oedipina-fortunensis#0",
    "latitude": 8.7311111111111,
    "longitude": -82.259722222222
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Ichthyophiidae\/Uraeotyphlus\/Uraeotyphlus-gansi#0",
    "latitude": 8.55,
    "longitude": 77.35
  },
  {
    "name_id": "Amphibia\/Anura\/Arthroleptidae\/Arthroleptinae\/Arthroleptis\/Arthroleptis-krokosua#0",
    "latitude": 6.5995,
    "longitude": -2.8450833333333
  },
  {
    "name_id": "Amphibia\/Anura\/Arthroleptidae\/Arthroleptinae\/Cardioglossa\/Cardioglossa-manengouba#0",
    "latitude": 5.0108055555556,
    "longitude": 9.8568888888889
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Ansonia\/Ansonia-jeetsukumarani#0",
    "latitude": 3.7205666666667,
    "longitude": 101.74818333333
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Ansonia\/Ansonia-latiffi#0",
    "latitude": 3.0145166666667,
    "longitude": 103.05004166667
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Atelopus\/Atelopus-eusebiodiazi#0",
    "latitude": -4.7186666666667,
    "longitude": -79.5308
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Atelopus\/Atelopus-oxapampae#0",
    "latitude": -10.745666666667,
    "longitude": -75.500611111111
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Bufo\/Bufo-eichwaldi#0",
    "latitude": 38.65,
    "longitude": 8.8
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Dendrophryniscus\/Dendrophryniscus-krausae#0",
    "latitude": -29.583333333333,
    "longitude": -50.166666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Melanophryniscus\/Melanophryniscus-alipioi#0",
    "latitude": -25.130277777778,
    "longitude": -48.821361111111
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Melanophryniscus\/Melanophryniscus-langonei#0",
    "latitude": -30.983333333333,
    "longitude": -55.433333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Melanophryniscus\/Melanophryniscus-vilavelhensis#0",
    "latitude": -25.216666666667,
    "longitude": -50.016666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Osornophryne\/Osornophryne-puruanta#0",
    "latitude": 0.21666666666667,
    "longitude": -77.95
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Pelophryne\/Pelophryne-linanitensis#0",
    "latitude": 3.9318611111111,
    "longitude": 115.51825
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Pelophryne\/Pelophryne-murudensis#0",
    "latitude": 3.9149444444444,
    "longitude": 115.50319444444
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Centroleninae\/Centrolene\/Centrolene-condor#0",
    "latitude": -3.3069444444444,
    "longitude": -78.393333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Centroleninae\/Rulyrana\/Rulyrana-mcdiarmidi#0",
    "latitude": -4.05,
    "longitude": -78.933333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Hyalinobatrachinae\/Hyalinobatrachium\/Hyalinobatrachium-mesai#0",
    "latitude": 4.4166666666667,
    "longitude": -64.116666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Ceratobatrachidae\/Ceratobatrachinae\/Cornufer\/Cornufer-desticans#0",
    "latitude": -7.5344166666667,
    "longitude": 158.35008333333
  },
  {
    "name_id": "Amphibia\/Anura\/Ceratobatrachidae\/Ceratobatrachinae\/Cornufer\/Cornufer-parilis#0",
    "latitude": -7.6001333333333,
    "longitude": 158.65153333333
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Limnonectes\/Limnonectes-megastomias#0",
    "latitude": 14.494666666667,
    "longitude": 1.87095
  },
  {
    "name_id": "Amphibia\/Anura\/Hemiphractidae\/Hemiphractinae\/Gastrotheca\/Gastrotheca-flamma#0",
    "latitude": -12.85,
    "longitude": -39.466666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Boana\/Boana-caipora#0",
    "latitude": -23.933333333333,
    "longitude": -47.666666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Boana\/Boana-poaju#0",
    "latitude": -27.69,
    "longitude": -48.998055555556
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Boana\/Boana-roraima#2",
    "latitude": 5.9666666666667,
    "longitude": -62.55
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Boana\/Boana-tepuiana#0",
    "latitude": 4.4166666666667,
    "longitude": -64.116666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Dendropsophinae\/Dendropsophus\/Dendropsophus-reichlei#0",
    "latitude": -11.733333333333,
    "longitude": -68.566666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Hylinae\/Ecnomiohyla\/Ecnomiohyla-rabborum#0",
    "latitude": 8.6328,
    "longitude": -80.076733333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Trachycephalus\/Trachycephalus-dibernardoi#0",
    "latitude": -29.5,
    "longitude": -50.166666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Ololygon\/Ololygon-tupinamba#0",
    "latitude": -22.9125,
    "longitude": -44.103055555556
  },
  {
    "name_id": "Amphibia\/Anura\/Hylodidae\/Hylodes\/Hylodes-cardosoi#0",
    "latitude": -25.383333333333,
    "longitude": -48.866666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Physalaemus\/Physalaemus-insperatus#0",
    "latitude": -25.35,
    "longitude": -49.15
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leptodactylinae\/Adenomera\/Adenomera-ajurauna#0",
    "latitude": -23.746388888889,
    "longitude": -46.129166666667
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leptodactylinae\/Leptodactylus\/Leptodactylus-cupreus#0",
    "latitude": -20.416666666667,
    "longitude": -43.483333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Boophinae\/Boophis\/Boophis-lilianae#0",
    "latitude": -21.355833333333,
    "longitude": 47.613055555556
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Boophinae\/Boophis\/Boophis-tampoka#0",
    "latitude": -18.784166666667,
    "longitude": 44.779444444444
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Boophinae\/Boophis\/Boophis-ulftunni#0",
    "latitude": -15.381166666667,
    "longitude": 49.987833333333
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Mantellinae\/Spinomantis\/Spinomantis-nussbaumi#0",
    "latitude": -14.174166666667,
    "longitude": 48.945
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Mantellinae\/Spinomantis\/Spinomantis-tavaratra#0",
    "latitude": -13.685833333333,
    "longitude": 49.441944444444
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Gastrophryninae\/Chiasmocleis\/Chiasmocleis-avilapiresae#0",
    "latitude": -1.9833333333333,
    "longitude": -51.65
  },
  {
    "name_id": "Amphibia\/Anura\/Odontophrynidae\/Odontophrynus\/Odontophrynus-maisuma#0",
    "latitude": -34.383333333333,
    "longitude": -53.783333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Odontophrynidae\/Proceratophrys\/Proceratophrys-tupinamba#0",
    "latitude": -23.183333333333,
    "longitude": -44.2
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Litoriinae\/Litoria\/Litoria-mareku#0",
    "latitude": -2.9333333333333,
    "longitude": 134.63333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Phrynobatrachidae\/Phrynobatrachus\/Phrynobatrachus-pintoi#0",
    "latitude": 11.106283333333,
    "longitude": -13.959916666667
  },
  {
    "name_id": "Amphibia\/Anura\/Phyllomedusidae\/Phasmahyla\/Phasmahyla-spectabilis#0",
    "latitude": -16.383333333333,
    "longitude": -40.05
  },
  {
    "name_id": "Amphibia\/Anura\/Phyllomedusidae\/Phasmahyla\/Phasmahyla-timbo#0",
    "latitude": -13.066666666667,
    "longitude": -39.633333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Pipidae\/Xenopus\/Xenopus-itombwensis#0",
    "latitude": -3.35679,
    "longitude": 23.69011
  },
  {
    "name_id": "Amphibia\/Anura\/Pyxicephalidae\/Cacosterninae\/Arthroleptella\/Arthroleptella-rugosa#0",
    "latitude": -34.209166666667,
    "longitude": 19.535555555556
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Odorrana\/Odorrana-yentuensis#0",
    "latitude": 21.2,
    "longitude": 6.75
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Sylvirana\/Sylvirana-nigrovittata#11",
    "latitude": 21.48,
    "longitude": 101.56
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Sylvirana\/Sylvirana-nigrovittata#12",
    "latitude": 22.52,
    "longitude": 103.98
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Ghatixalus\/Ghatixalus-asterops#0",
    "latitude": 10.216666666667,
    "longitude": 77.483333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Leptomantis\/Leptomantis-belalongensis#0",
    "latitude": 4.5427777777778,
    "longitude": 115.15916666667
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Rhacophorus\/Rhacophorus-calcaneus#3",
    "latitude": 12.424527777778,
    "longitude": 8.3511388888889
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Rhacophorus\/Rhacophorus-marmoridorsum#0",
    "latitude": 14.333333333333,
    "longitude": 8.6
  },
  {
    "name_id": "Amphibia\/Caudata\/Hynobiidae\/Hynobiinae\/Hynobius\/Hynobius-fucus#0",
    "latitude": 24.5,
    "longitude": 121.08333333333
  },
  {
    "name_id": "Amphibia\/Caudata\/Hynobiidae\/Hynobiinae\/Hynobius\/Hynobius-glacialis#0",
    "latitude": 24.4,
    "longitude": 121.41666666667
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-indio#0",
    "latitude": 11.048555555556,
    "longitude": -83.880111111111
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-insularis#0",
    "latitude": 11.458333333333,
    "longitude": -85.515555555556
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Oedipina\/Oedipina-kasios#0",
    "latitude": 15.116666666667,
    "longitude": -86.733333333333
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Oedipina\/Oedipina-quadra#0",
    "latitude": 14.916666666667,
    "longitude": -84.683333333333
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Pleurodelinae\/Paramesotriton\/Paramesotriton-zhijinensis#0",
    "latitude": 26.666666666667,
    "longitude": 5.7666666666667
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Ichthyophiidae\/Ichthyophis\/Ichthyophis-alfredi#0",
    "latitude": 25.493008333333,
    "longitude": 90.324138888889
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Ichthyophiidae\/Ichthyophis\/Ichthyophis-daribokensis#0",
    "latitude": 25.572555555556,
    "longitude": 90.299388888889
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Ichthyophiidae\/Ichthyophis\/Ichthyophis-khumhzi#0",
    "latitude": 24.862777777778,
    "longitude": 93.623055555556
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Ichthyophiidae\/Ichthyophis\/Ichthyophis-moustakius#0",
    "latitude": 25.028611111111,
    "longitude": 93.414166666667
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Ichthyophiidae\/Ichthyophis\/Ichthyophis-nokrekensis#0",
    "latitude": 25.46925,
    "longitude": 90.261027777778
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Ichthyophiidae\/Ichthyophis\/Ichthyophis-sendenyu#0",
    "latitude": 25.915277777778,
    "longitude": 94.105277777778
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Siphonopidae\/Brasilotyphlus\/Brasilotyphlus-guarantanus#0",
    "latitude": -9.6831777777778,
    "longitude": -54.962938888889
  },
  {
    "name_id": "Amphibia\/Anura\/Arthroleptidae\/Arthroleptinae\/Arthroleptis\/Arthroleptis-fichika#0",
    "latitude": -4.8291666666667,
    "longitude": 38.512777777778
  },
  {
    "name_id": "Amphibia\/Anura\/Arthroleptidae\/Arthroleptinae\/Arthroleptis\/Arthroleptis-kidogo#0",
    "latitude": -6.0525,
    "longitude": 37.540555555556
  },
  {
    "name_id": "Amphibia\/Anura\/Arthroleptidae\/Arthroleptinae\/Arthroleptis\/Arthroleptis-langeri#0",
    "latitude": 7.40806,
    "longitude": -8.58436
  },
  {
    "name_id": "Amphibia\/Anura\/Arthroleptidae\/Arthroleptinae\/Arthroleptis\/Arthroleptis-nguruensis#0",
    "latitude": -6.0641944444444,
    "longitude": 37.50925
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Ansonia\/Ansonia-echinata#0",
    "latitude": 2.65605,
    "longitude": 12.90365
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Atelopus\/Atelopus-chirripoensis#0",
    "latitude": 9.5333333333333,
    "longitude": -83.483333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Duttaphrynus\/Duttaphrynus-kiphirensis#0",
    "latitude": 25.89275,
    "longitude": 94.784861111111
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Duttaphrynus\/Duttaphrynus-mamitensis#0",
    "latitude": 23.408083333333,
    "longitude": 92.456777777778
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Duttaphrynus\/Duttaphrynus-mizoramensis#0",
    "latitude": 23.894777777778,
    "longitude": 92.681583333333
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Duttaphrynus\/Duttaphrynus-nagalandensis#0",
    "latitude": 26.105666666667,
    "longitude": 94.256722222222
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Duttaphrynus\/Duttaphrynus-wokhaensis#0",
    "latitude": 26.105666666667,
    "longitude": 94.256722222222
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Oreophrynella\/Oreophrynella-seegobini#0",
    "latitude": 5.2163888888889,
    "longitude": -60.584722222222
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Pelophryne\/Pelophryne-saravacensis#0",
    "latitude": 2.7333333333333,
    "longitude": 113.91666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Rhaebo\/Rhaebo-andinophrynoides#0",
    "latitude": 1.41125,
    "longitude": -78.285111111111
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Xanthophryne\/Xanthophryne-tigerina#0",
    "latitude": 15.933333333333,
    "longitude": 74.0
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Hyalinobatrachinae\/Hyalinobatrachium\/Hyalinobatrachium-carlesvilai#0",
    "latitude": -14.213638888889,
    "longitude": -69.135972222222
  },
  {
    "name_id": "Amphibia\/Anura\/Ceratobatrachidae\/Ceratobatrachinae\/Cornufer\/Cornufer-caesiops#0",
    "latitude": -5.4473,
    "longitude": 151.46307
  },
  {
    "name_id": "Amphibia\/Anura\/Ceratobatrachidae\/Ceratobatrachinae\/Platymantis\/Platymantis-bayani#0",
    "latitude": 11.80255,
    "longitude": 125.29276
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Limnonectes\/Limnonectes-ferneri#0",
    "latitude": 7.9711833333333,
    "longitude": 126.29736666667
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Quasipaa\/Quasipaa-acanthophora#0",
    "latitude": 21.85,
    "longitude": 106.96666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hemiphractidae\/Hemiphractinae\/Gastrotheca\/Gastrotheca-megacephala#0",
    "latitude": -20.6,
    "longitude": -40.416666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Boana\/Boana-botumirim#0",
    "latitude": -17.116666666667,
    "longitude": -43.033333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Bokermannohyla\/Bokermannohyla-capra#0",
    "latitude": -13.066666666667,
    "longitude": -39.633333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Hylinae\/Charadrahyla\/Charadrahyla-tecuani#0",
    "latitude": 17.6422,
    "longitude": -100.818
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Aparasphenodon\/Aparasphenodon-arapapa#0",
    "latitude": -13.733333333333,
    "longitude": -39.016666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Osteocephalus\/Osteocephalus-castaneicola#0",
    "latitude": -11.3,
    "longitude": -67.383333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Trachycephalus\/Trachycephalus-mambaiensis#0",
    "latitude": -14.29,
    "longitude": -6.1936111111111
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Scinax\/Scinax-iquitorum#0",
    "latitude": -3.8294444444444,
    "longitude": -73.375555555556
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Scinax\/Scinax-rogerioi#0",
    "latitude": -14.15,
    "longitude": -47.6
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Sphaenorhynchus\/Sphaenorhynchus-botocudo#0",
    "latitude": -17.974722222222,
    "longitude": -40.438888888889
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Sphaenorhynchus\/Sphaenorhynchus-mirim#0",
    "latitude": -17.974722222222,
    "longitude": -40.438888888889
  },
  {
    "name_id": "Amphibia\/Anura\/Hyperoliidae\/Hyperoliinae\/Morerella\/Morerella-cyanophthalma#0",
    "latitude": 5.4166666666667,
    "longitude": -4.05
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Pleurodema\/Pleurodema-cordobae#0",
    "latitude": -32.399555555556,
    "longitude": -64.926416666667
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leptodactylinae\/Adenomera\/Adenomera-engelsi#0",
    "latitude": -27.816666666667,
    "longitude": -48.566666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-kecil#0",
    "latitude": 4.4777777777778,
    "longitude": 101.36583333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Callulops\/Callulops-eremnosphax#0",
    "latitude": -7.735,
    "longitude": 146.496
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Callulops\/Callulops-omnistriatus#0",
    "latitude": -6.36875,
    "longitude": 143.22431
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Choerophryne\/Choerophryne-murrita#0",
    "latitude": -5.6567028,
    "longitude": 142.6342342
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-caverniphilus#0",
    "latitude": -5.64728,
    "longitude": 142.63941
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-cupricarenus#0",
    "latitude": -11.35552,
    "longitude": 154.22459
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-desticans#0",
    "latitude": -9.9580166,
    "longitude": 150.9505333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-iovaorum#0",
    "latitude": -9.44467,
    "longitude": 148.00923
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-kethuk#0",
    "latitude": -11.33537,
    "longitude": 154.2247
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-linnaeus#0",
    "latitude": -7.295997634,
    "longitude": 147.092878935
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-melanops#0",
    "latitude": -11.5081521,
    "longitude": 153.4308608
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-phaeobalius#0",
    "latitude": -7.277998011,
    "longitude": 147.033451568
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-tomaiodactylus#0",
    "latitude": -7.28188171,
    "longitude": 147.065022341
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Hylophorbus\/Hylophorbus-proekes#0",
    "latitude": -3.39329,
    "longitude": 142.52826
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Mantophryne\/Mantophryne-axanthogaster#0",
    "latitude": -11.49179,
    "longitude": 153.41261
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-anamiatoi#0",
    "latitude": -5.66954,
    "longitude": 142.62334
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-ezra#0",
    "latitude": -11.5054347,
    "longitude": 153.429945
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-furu#0",
    "latitude": -3.2844444444444,
    "longitude": 138.63611111111
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Sphenophryne\/Sphenophryne-magnitympanum#0",
    "latitude": -9.44467,
    "longitude": 148.00923
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Gastrophryninae\/Chiasmocleis\/Chiasmocleis-devriesi#0",
    "latitude": -3.2594444444444,
    "longitude": -72.902777777778
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Gastrophryninae\/Chiasmocleis\/Chiasmocleis-supercilialba#0",
    "latitude": -11.946388888889,
    "longitude": -71.283333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Kalophryninae\/Kalophrynus\/Kalophrynus-yongi#0",
    "latitude": 4.85,
    "longitude": 101.63333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Litoriinae\/Litoria\/Litoria-gasconi#0",
    "latitude": -2.3705,
    "longitude": 138.21255
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Pelodryadinae\/Ranoidea\/Ranoidea-eschata#0",
    "latitude": -11.35552,
    "longitude": 154.22459
  },
  {
    "name_id": "Amphibia\/Anura\/Phrynobatrachidae\/Phrynobatrachus\/Phrynobatrachus-chukuchuku#0",
    "latitude": 6.1833333333333,
    "longitude": 10.516666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Phrynobatrachidae\/Phrynobatrachus\/Phrynobatrachus-intermedius#0",
    "latitude": 5.2773666666667,
    "longitude": -2.63755
  },
  {
    "name_id": "Amphibia\/Anura\/Phyllomedusidae\/Phasmahyla\/Phasmahyla-cruzi#0",
    "latitude": -9.3188888888889,
    "longitude": -36.471111111111
  },
  {
    "name_id": "Amphibia\/Anura\/Pyxicephalidae\/Cacosterninae\/Cacosternum\/Cacosternum-kinangopensis#0",
    "latitude": -0.57308333333333,
    "longitude": 36.491444444444
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Chalcorana\/Chalcorana-eschatia#0",
    "latitude": 9.9333333333333,
    "longitude": 98.716666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Chalcorana\/Chalcorana-megalonesa#0",
    "latitude": 2.65,
    "longitude": 113.05
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Chalcorana\/Chalcorana-parvaccola#0",
    "latitude": -0.1,
    "longitude": 100.66666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Chalcorana\/Chalcorana-rufipes#0",
    "latitude": -0.9,
    "longitude": 100.46666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Odorrana\/Odorrana-geminata#0",
    "latitude": 22.768888888889,
    "longitude": 104.83083333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Chiromantis\/Chiromantis-senapatiensis#0",
    "latitude": 25.1685,
    "longitude": 93.973527777778
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Philautus\/Philautus-davidlabangi#0",
    "latitude": 1.6,
    "longitude": 110.18333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-singu#0",
    "latitude": 6.9833333333333,
    "longitude": 80.333333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-tanu#0",
    "latitude": 6.25,
    "longitude": 80.333333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Raorchestes\/Raorchestes-manipurensis#0",
    "latitude": 24.589638888889,
    "longitude": 93.664333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Theloderma\/Theloderma-lateriticum#0",
    "latitude": 21.915555555556,
    "longitude": 104.36083333333
  },
  {
    "name_id": "Amphibia\/Caudata\/Hynobiidae\/Hynobiinae\/Pseudohynobius\/Pseudohynobius-jinfo#0",
    "latitude": 28.833333333333,
    "longitude": 107.33333333333
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-cataguana#0",
    "latitude": 15.016666666667,
    "longitude": -7.1
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-pygmaea#0",
    "latitude": 9.1166666666667,
    "longitude": -82.877777777778
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Cryptotriton\/Cryptotriton-sierraminensis#0",
    "latitude": 15.17,
    "longitude": -89.514444444444
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Urspelerpes\/Urspelerpes-brucei#0",
    "latitude": 34.65,
    "longitude": -83.3
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Pleurodelinae\/Paramesotriton\/Paramesotriton-labiatus#3",
    "latitude": 24.116666666667,
    "longitude": 110.21666666667
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Rhinatrematidae\/Rhinatrema\/Rhinatrema-shiv#0",
    "latitude": 5.1333333333333,
    "longitude": -59.416666666667
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Siphonopidae\/Microcaecilia\/Microcaecilia-grandis#0",
    "latitude": 4.3833333333333,
    "longitude": -54.733333333333
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Siphonopidae\/Microcaecilia\/Microcaecilia-iwokramae#0",
    "latitude": 4.3333333333333,
    "longitude": -58.8
  },
  {
    "name_id": "Amphibia\/Anura\/Arthroleptidae\/Arthroleptinae\/Arthroleptis\/Arthroleptis-bioko#0",
    "latitude": 3.6284444444444,
    "longitude": 8.8030555555556
  },
  {
    "name_id": "Amphibia\/Anura\/Brevicipitidae\/Callulina\/Callulina-hanseni#0",
    "latitude": -6.0641944444444,
    "longitude": 37.50925
  },
  {
    "name_id": "Amphibia\/Anura\/Brevicipitidae\/Callulina\/Callulina-kanga#0",
    "latitude": -5.9771305555556,
    "longitude": 37.699244444444
  },
  {
    "name_id": "Amphibia\/Anura\/Brevicipitidae\/Callulina\/Callulina-laphami#0",
    "latitude": -3.72875,
    "longitude": 37.654472222222
  },
  {
    "name_id": "Amphibia\/Anura\/Brevicipitidae\/Callulina\/Callulina-shengena#0",
    "latitude": -4.2952519444444,
    "longitude": 37.938503333333
  },
  {
    "name_id": "Amphibia\/Anura\/Brevicipitidae\/Callulina\/Callulina-stanleyi#0",
    "latitude": -4.1666666666667,
    "longitude": 37.846666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Atelopus\/Atelopus-ardila#0",
    "latitude": 1.2,
    "longitude": -77.216666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Atelopus\/Atelopus-orcesi#0",
    "latitude": 0.56666666666667,
    "longitude": -77.516666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Atelopus\/Atelopus-pastuso#0",
    "latitude": 0.68333333333333,
    "longitude": -77.883333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Atelopus\/Atelopus-podocarpus#0",
    "latitude": -4.1666666666667,
    "longitude": -79.1
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Dendrophryniscus\/Dendrophryniscus-oreites#0",
    "latitude": -15.161388888889,
    "longitude": -39.343888888889
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Dendrophryniscus\/Dendrophryniscus-organensis#0",
    "latitude": -22.45,
    "longitude": -42.983333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Incilius\/Incilius-karenlipsae#0",
    "latitude": 8.6666666666667,
    "longitude": -80.621388888889
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Osornophryne\/Osornophryne-cofanorum#0",
    "latitude": 0.48866666666667,
    "longitude": -77.5865
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Rhinella\/Rhinella-bernardoi#0",
    "latitude": -30.169166666667,
    "longitude": -67.810277777778
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Rhinella\/Rhinella-paraguayensis#0",
    "latitude": -17.853333333333,
    "longitude": -57.410833333333
  },
  {
    "name_id": "Amphibia\/Anura\/Calyptocephalellidae\/Telmatobufo\/Telmatobufo-ignotus#0",
    "latitude": -35.988611111111,
    "longitude": -72.690277777778
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Limnonectes\/Limnonectes-jarujini#0",
    "latitude": 12.95,
    "longitude": 99.533333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Limnonectes\/Limnonectes-taylori#0",
    "latitude": 18.516666666667,
    "longitude": 98.5
  },
  {
    "name_id": "Amphibia\/Anura\/Hemiphractidae\/Hemiphractinae\/Stefania\/Stefania-neblinae#0",
    "latitude": 0.66666666666667,
    "longitude": -65.933333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Boana\/Boana-aguilari#0",
    "latitude": -10.548166666667,
    "longitude": -75.371277777778
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Boana\/Boana-gladiator#0",
    "latitude": -13.403916666667,
    "longitude": -70.899361111111
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Boana\/Boana-jaguariaivensis#0",
    "latitude": -24.166666666667,
    "longitude": -49.666666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Boana\/Boana-paranaiba#0",
    "latitude": -18.659722222222,
    "longitude": -48.137222222222
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Dendropsophinae\/Dendropsophus\/Dendropsophus-salli#0",
    "latitude": -14.436388888889,
    "longitude": -67.493055555556
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Hylinae\/Ecnomiohyla\/Ecnomiohyla-sukia#0",
    "latitude": 10.037138888889,
    "longitude": -83.522888888889
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Hylinae\/Hyla\/Hyla-felixarabica#0",
    "latitude": 15.2,
    "longitude": 43.983333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Ololygon\/Ololygon-skaios#0",
    "latitude": -15.088055555556,
    "longitude": -49.039722222222
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Ololygon\/Ololygon-tripui#0",
    "latitude": -20.389444444444,
    "longitude": -3.5422222222222
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Scinax\/Scinax-fuscomarginatus#10",
    "latitude": -7.1597222222222,
    "longitude": -48.5275
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Scinax\/Scinax-juncae#0",
    "latitude": -13.833333333333,
    "longitude": -39.233333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Scinax\/Scinax-tigrinus#0",
    "latitude": -16.322222222222,
    "longitude": -47.219444444444
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Engystomops\/Engystomops-puyango#0",
    "latitude": -3.87159,
    "longitude": -80.0377
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Physalaemus\/Physalaemus-feioi#0",
    "latitude": -20.75,
    "longitude": -42.85
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Physalaemus\/Physalaemus-orophilus#0",
    "latitude": -20.098888888889,
    "longitude": -43.4875
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Pleurodema\/Pleurodema-alium#0",
    "latitude": -16.322222222222,
    "longitude": -47.219444444444
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Pseudopaludicola\/Pseudopaludicola-murundu#0",
    "latitude": -22.344880555556,
    "longitude": -47.667088888889
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Boophinae\/Boophis\/Boophis-arcanus#0",
    "latitude": -21.279216666667,
    "longitude": 47.530383333333
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Boophinae\/Boophis\/Boophis-calcaratus#0",
    "latitude": -18.92745,
    "longitude": 48.523283333333
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Boophinae\/Boophis\/Boophis-entingae#0",
    "latitude": -12.493888888889,
    "longitude": 49.181944444444
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Boophinae\/Boophis\/Boophis-haingana#0",
    "latitude": -24.544033333333,
    "longitude": 46.714116666667
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Boophinae\/Boophis\/Boophis-luciae#0",
    "latitude": -18.965833333333,
    "longitude": 48.510277777778
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Boophinae\/Boophis\/Boophis-miadana#0",
    "latitude": -24.544033333333,
    "longitude": 46.714116666667
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Boophinae\/Boophis\/Boophis-piperatus#0",
    "latitude": -21.247866666667,
    "longitude": 47.376333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Boophinae\/Boophis\/Boophis-praedictus#0",
    "latitude": -22.794766666667,
    "longitude": 47.187133333333
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Boophinae\/Boophis\/Boophis-quasiboehmei#0",
    "latitude": -21.237983333333,
    "longitude": 47.424783333333
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Boophinae\/Boophis\/Boophis-roseipalmatus#0",
    "latitude": -12.516666666667,
    "longitude": 49.166666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Boophinae\/Boophis\/Boophis-sandrae#0",
    "latitude": -21.247866666667,
    "longitude": 47.376333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Boophinae\/Boophis\/Boophis-spinophis#0",
    "latitude": -21.243866666667,
    "longitude": 47.426216666667
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Mantellinae\/Blommersia\/Blommersia-dejongi#0",
    "latitude": -16.908933333333,
    "longitude": 49.8678
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Mantellinae\/Blommersia\/Blommersia-galani#0",
    "latitude": -16.908933333333,
    "longitude": 49.8678
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-aerea#0",
    "latitude": 16.96317,
    "longitude": 106.0466
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-crocea#0",
    "latitude": 15.23587,
    "longitude": 107.70982
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-khasiorum#0",
    "latitude": 25.455777777778,
    "longitude": 91.761055555556
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-melica#0",
    "latitude": 14.19287,
    "longitude": 106.99612
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-nokrekensis#0",
    "latitude": 25.483358333333,
    "longitude": 90.315333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-tamdil#0",
    "latitude": 23.739983333333,
    "longitude": 92.955216666667
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachium\/Leptobrachium-lumadorum#0",
    "latitude": 7.108,
    "longitude": 122.0289
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachium\/Leptobrachium-waysepuntiense#0",
    "latitude": -5.0641666666667,
    "longitude": 104.03472222222
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Cophylinae\/Anodonthyla\/Anodonthyla-emilei#0",
    "latitude": -21.235216666667,
    "longitude": 47.396116666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Cophylinae\/Anodonthyla\/Anodonthyla-jeanbai#0",
    "latitude": -24.544033333333,
    "longitude": 46.714116666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Cophylinae\/Anodonthyla\/Anodonthyla-theoi#0",
    "latitude": -23.028316666667,
    "longitude": 47.731533333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Cophylinae\/Anodonthyla\/Anodonthyla-vallani#0",
    "latitude": -18.19945,
    "longitude": 47.280883333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Cophylinae\/Rhombophryne\/Rhombophryne-mangabensis#0",
    "latitude": -15.5,
    "longitude": 49.766666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Cophylinae\/Rhombophryne\/Rhombophryne-matavy#0",
    "latitude": -12.462777777778,
    "longitude": 49.223333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Gastrophryninae\/Elachistocleis\/Elachistocleis-bumbameuboi#0",
    "latitude": -2.5333333333333,
    "longitude": -44.3
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Gastrophryninae\/Elachistocleis\/Elachistocleis-carvalhoi#0",
    "latitude": -7.1666666666667,
    "longitude": -48.533333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Gastrophryninae\/Elachistocleis\/Elachistocleis-helianneae#0",
    "latitude": -7.5833333333333,
    "longitude": -62.666666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Gastrophryninae\/Elachistocleis\/Elachistocleis-matogrosso#0",
    "latitude": -15.6,
    "longitude": -56.1
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Gastrophryninae\/Elachistocleis\/Elachistocleis-surumu#1",
    "latitude": 4.2,
    "longitude": -60.8
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Microhylinae\/Microhyla\/Microhyla-borneensis#3",
    "latitude": 1.6066666666667,
    "longitude": 110.19
  },
  {
    "name_id": "Amphibia\/Anura\/Odontophrynidae\/Proceratophrys\/Proceratophrys-sanctaritae#0",
    "latitude": -13.066666666667,
    "longitude": -39.633333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Litoriinae\/Litoria\/Litoria-aurifera#0",
    "latitude": -15.988388888889,
    "longitude": 125.32725
  },
  {
    "name_id": "Amphibia\/Anura\/Petropedetidae\/Petropedetes\/Petropedetes-vulpiae#0",
    "latitude": 4.85,
    "longitude": 9.9
  },
  {
    "name_id": "Amphibia\/Anura\/Phrynobatrachidae\/Phrynobatrachus\/Phrynobatrachus-danko#0",
    "latitude": 7.1151666666667,
    "longitude": 11.026611111111
  },
  {
    "name_id": "Amphibia\/Anura\/Phrynobatrachidae\/Phrynobatrachus\/Phrynobatrachus-kakamikro#0",
    "latitude": 0.033333333333333,
    "longitude": 34.083333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Amolops\/Amolops-akhaorum#0",
    "latitude": 20.868888888889,
    "longitude": 1.0552777777778
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Amolops\/Amolops-kohimaensis#0",
    "latitude": 25.639722222222,
    "longitude": 4.0586111111111
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Amolops\/Amolops-nidorbellus#0",
    "latitude": 25.639722222222,
    "longitude": 4.0586111111111
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Meristogenys\/Meristogenys-maryatiae#0",
    "latitude": 5.5333333333333,
    "longitude": 116.0
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Odorrana\/Odorrana-huanggangensis#0",
    "latitude": 27.75,
    "longitude": 117.68333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Feihyla\/Feihyla-fuhua#0",
    "latitude": 22.58,
    "longitude": 103.41
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Philautus\/Philautus-juliandringi#0",
    "latitude": 4.1166666666667,
    "longitude": 114.88333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Rhacophorus\/Rhacophorus-spelaeus#0",
    "latitude": 17.557222222222,
    "longitude": 4.8244444444444
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Rhacophorus\/Rhacophorus-vampyrus#0",
    "latitude": 12.1865,
    "longitude": 108.7151
  },
  {
    "name_id": "Amphibia\/Caudata\/Hynobiidae\/Hynobiinae\/Pseudohynobius\/Pseudohynobius-guizhouensis#0",
    "latitude": 26.2,
    "longitude": 107.5
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Aquiloeurycea\/Aquiloeurycea-cafetalera#0",
    "latitude": 19.1855,
    "longitude": -96.962
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-daryorum#0",
    "latitude": 15.204732,
    "longitude": -90.233556
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-eremia#0",
    "latitude": 14.530146,
    "longitude": -90.142417
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-huehuetenanguensis#0",
    "latitude": 15.891944,
    "longitude": -91.564166
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-kaqchikelorum#0",
    "latitude": 14.717798,
    "longitude": -90.650107
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-la#0",
    "latitude": 14.921181,
    "longitude": -91.103626
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-ninadormida#0",
    "latitude": 15.469815,
    "longitude": -91.543401
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-nussbaumi#0",
    "latitude": 15.484167,
    "longitude": -90.552222
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-nympha#0",
    "latitude": 15.357485,
    "longitude": -88.719444
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-psephena#0",
    "latitude": 14.791487,
    "longitude": -91.051613
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-suchitanensis#0",
    "latitude": 14.403209,
    "longitude": -89.779753
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-tzultacaj#0",
    "latitude": 15.116067,
    "longitude": -89.614982
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-xibalba#0",
    "latitude": 15.570678,
    "longitude": -91.441228
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-zacapensis#0",
    "latitude": 15.173333333333,
    "longitude": -89.507222222222
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Dendrotriton\/Dendrotriton-chujorum#0",
    "latitude": 15.892222,
    "longitude": -91.564167
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Dendrotriton\/Dendrotriton-kekchiorum#0",
    "latitude": 15.511944,
    "longitude": -90.791944
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Nototriton\/Nototriton-tomamorum#0",
    "latitude": 15.43275,
    "longitude": -87.309266666667
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Oedipina\/Oedipina-nica#0",
    "latitude": 13.15,
    "longitude": -85.866666666667
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Plethodontinae\/Desmognathus\/Desmognathus-organi#0",
    "latitude": 36.639033333333,
    "longitude": -81.60915
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Pleurodelinae\/Cynops\/Cynops-fudingensis#0",
    "latitude": 27.116666666667,
    "longitude": 120.16666666667
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Pleurodelinae\/Paramesotriton\/Paramesotriton-yunwuensis#0",
    "latitude": 22.616666666667,
    "longitude": 111.16666666667
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Pleurodelinae\/Tylototriton\/Tylototriton-dabienicus#0",
    "latitude": 31.4,
    "longitude": 115.33333333333
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Pleurodelinae\/Tylototriton\/Tylototriton-notialis#0",
    "latitude": 17.644333333333,
    "longitude": 5.73675
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Ichthyophiidae\/Ichthyophis\/Ichthyophis-davidi#0",
    "latitude": 15.65,
    "longitude": 74.133333333333
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Indotyphlidae\/Gegeneophis\/Gegeneophis-pareshi#0",
    "latitude": 15.016666666667,
    "longitude": 74.208333333333
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Siphonopidae\/Microcaecilia\/Microcaecilia-rochai#0",
    "latitude": -0.63333333333333,
    "longitude": -52.566666666667
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Siphonopidae\/Microcaecilia\/Microcaecilia-trombetas#0",
    "latitude": -0.96276944444444,
    "longitude": -55.5223
  },
  {
    "name_id": "Amphibia\/Anura\/Arthroleptidae\/Arthroleptinae\/Arthroleptis\/Arthroleptis-anotis#0",
    "latitude": -4.3,
    "longitude": 37.883333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Atelopus\/Atelopus-loettersi#0",
    "latitude": -13.185702777778,
    "longitude": -70.582997222222
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Incilius\/Incilius-mccoyi#0",
    "latitude": 27.643055555556,
    "longitude": -107.80583333333
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Melanophryniscus\/Melanophryniscus-peritus#0",
    "latitude": -22.884722222222,
    "longitude": -46.028611111111
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Osornophryne\/Osornophryne-angel#0",
    "latitude": 0.68455555555556,
    "longitude": -77.879138888889
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Osornophryne\/Osornophryne-occidentalis#0",
    "latitude": -0.033333333333333,
    "longitude": -78.65
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Osornophryne\/Osornophryne-simpsoni#0",
    "latitude": -1.2762805555556,
    "longitude": -78.072538888889
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Hyalinobatrachinae\/Hyalinobatrachium\/Hyalinobatrachium-kawense#0",
    "latitude": 4.6091666666667,
    "longitude": -52.056944444444
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Hyalinobatrachinae\/Hyalinobatrachium\/Hyalinobatrachium-tricolor#0",
    "latitude": 4.4333333333333,
    "longitude": -52.15
  },
  {
    "name_id": "Amphibia\/Anura\/Cycloramphidae\/Cycloramphus\/Cycloramphus-organensis#0",
    "latitude": -22.486388888889,
    "longitude": -43.070555555556
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Fejervarya\/Fejervarya-kawamurai#0",
    "latitude": 34.383333333333,
    "longitude": 132.7
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Limnonectes\/Limnonectes-sisikdagu#0",
    "latitude": -1.0102777777778,
    "longitude": 0.63194444444444
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Nanorana\/Nanorana-kangxianensis#0",
    "latitude": 33.240566666667,
    "longitude": 5.4008
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Occidozyginae\/Occidozyga\/Occidozyga-tompotika#0",
    "latitude": -0.66097222222222,
    "longitude": 123.11086111111
  },
  {
    "name_id": "Amphibia\/Anura\/Hemiphractidae\/Hemiphractinae\/Gastrotheca\/Gastrotheca-nebulanastes#0",
    "latitude": -13.154444444444,
    "longitude": -71.586388888889
  },
  {
    "name_id": "Amphibia\/Anura\/Hemiphractidae\/Hemiphractinae\/Gastrotheca\/Gastrotheca-pachachacae#0",
    "latitude": -13.546388888889,
    "longitude": -73.103055555556
  },
  {
    "name_id": "Amphibia\/Anura\/Hemiphractidae\/Hemiphractinae\/Gastrotheca\/Gastrotheca-phelloderma#0",
    "latitude": -7.58,
    "longitude": -77.45
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Osteocephalus\/Osteocephalus-duellmani#0",
    "latitude": -3.4166666666667,
    "longitude": -78.45
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Ololygon\/Ololygon-muriciensis#0",
    "latitude": -9.2,
    "longitude": -35.866666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Ololygon\/Ololygon-skuki#0",
    "latitude": -9.55,
    "longitude": -35.783333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Scinax\/Scinax-cretatus#0",
    "latitude": -12.35,
    "longitude": -37.883333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Scinax\/Scinax-fuscomarginatus#11",
    "latitude": -17.801672222222,
    "longitude": -51.089416666667
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leptodactylinae\/Leptodactylus\/Leptodactylus-guianensis#0",
    "latitude": 4.7547222222222,
    "longitude": -59.024444444444
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Boophinae\/Boophis\/Boophis-fayi#0",
    "latitude": -15.289944444444,
    "longitude": 49.620277777778
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Boophinae\/Boophis\/Boophis-popi#0",
    "latitude": -19.7165,
    "longitude": 47.821638888889
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Mantellinae\/Gephyromantis\/Gephyromantis-atsingy#0",
    "latitude": -19.031,
    "longitude": 44.78
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Mantellinae\/Gephyromantis\/Gephyromantis-tahotra#0",
    "latitude": -14.43665,
    "longitude": 49.74335
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Mantellinae\/Guibemantis\/Guibemantis-annulatus#0",
    "latitude": -24.951583333333,
    "longitude": 47.0347
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Mantellinae\/Guibemantis\/Guibemantis-wattersoni#0",
    "latitude": -24.779833333333,
    "longitude": 47.171333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Mantellinae\/Mantidactylus\/Mantidactylus-paidroa#0",
    "latitude": -21.2597,
    "longitude": 47.422
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-bidoupensis#0",
    "latitude": 12.19225,
    "longitude": 108.71494
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-eos#0",
    "latitude": 21.233333333333,
    "longitude": 101.93333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachium\/Leptobrachium-bompu#0",
    "latitude": 27.116944444444,
    "longitude": 92.684444444444
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachium\/Leptobrachium-leucops#0",
    "latitude": 2.1864444444444,
    "longitude": 8.7148611111111
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-pakayakulangun#0",
    "latitude": -12.463888888889,
    "longitude": 143.27055555556
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-ampelos#0",
    "latitude": -5.2833,
    "longitude": 41.4833
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Paedophryne\/Paedophryne-dekot#0",
    "latitude": -9.7071,
    "longitude": 149.2498
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Paedophryne\/Paedophryne-verrucosa#0",
    "latitude": -9.758,
    "longitude": 149.1822
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Xenorhina\/Xenorhina-brachyrhyncha#0",
    "latitude": -5.123,
    "longitude": 141.637
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Kalophryninae\/Kalophrynus\/Kalophrynus-barioensis#0",
    "latitude": 3.75,
    "longitude": 115.43333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Kalophryninae\/Kalophrynus\/Kalophrynus-tiomanensis#0",
    "latitude": 2.7700611111111,
    "longitude": 4.154375
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Microhylinae\/Microhyla\/Microhyla-malang#0",
    "latitude": 1.6,
    "longitude": 110.18333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Odontophrynidae\/Proceratophrys\/Proceratophrys-minuta#0",
    "latitude": -11.433333333333,
    "longitude": -40.55
  },
  {
    "name_id": "Amphibia\/Anura\/Odontophrynidae\/Proceratophrys\/Proceratophrys-strussmannae#0",
    "latitude": -15.09,
    "longitude": -8.7402777777778
  },
  {
    "name_id": "Amphibia\/Anura\/Odontophrynidae\/Proceratophrys\/Proceratophrys-vielliardi#0",
    "latitude": -17.766666666667,
    "longitude": -48.7
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Litoriinae\/Litoria\/Litoria-axillaris#0",
    "latitude": -15.293611111111,
    "longitude": 125.49611111111
  },
  {
    "name_id": "Amphibia\/Anura\/Pipidae\/Xenopus\/Xenopus-lenduensis#0",
    "latitude": 1.8688,
    "longitude": 30.6959
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Meristogenys\/Meristogenys-stenocephalus#0",
    "latitude": 5.3444444444444,
    "longitude": 116.02916666667
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Meristogenys\/Meristogenys-stigmachilus#0",
    "latitude": 5.8,
    "longitude": 116.40138888889
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Rana\/Rana-jiemuxiensis#0",
    "latitude": 28.879166666667,
    "longitude": 110.56888888889
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Rana\/Rana-kobai#0",
    "latitude": 28.35,
    "longitude": 129.45
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Rana\/Rana-ulma#0",
    "latitude": 26.65,
    "longitude": 128.13333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Sanguirana\/Sanguirana-aurantipunctata#0",
    "latitude": 16.438,
    "longitude": 121.225
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Gracixalus\/Gracixalus-quangi#0",
    "latitude": 19.7,
    "longitude": 104.738
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Polypedates\/Polypedates-iskandari#0",
    "latitude": -0.3275,
    "longitude": 120.05083333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-hankeni#0",
    "latitude": 7.4333333333333,
    "longitude": 80.766666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Raorchestes\/Raorchestes-agasthyaensis#0",
    "latitude": 8.6666666666667,
    "longitude": 77.183333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Raorchestes\/Raorchestes-crustai#0",
    "latitude": 8.6666666666667,
    "longitude": 77.183333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Raorchestes\/Raorchestes-johnceei#0",
    "latitude": 8.6666666666667,
    "longitude": 77.183333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Raorchestes\/Raorchestes-kadalarensis#0",
    "latitude": 10.116666666667,
    "longitude": 77.016666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Raorchestes\/Raorchestes-manohari#0",
    "latitude": 8.6666666666667,
    "longitude": 77.183333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Raorchestes\/Raorchestes-ravii#0",
    "latitude": 11.383333333333,
    "longitude": 76.566666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Raorchestes\/Raorchestes-theuerkaufi#0",
    "latitude": 10.116666666667,
    "longitude": 77.016666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Raorchestes\/Raorchestes-thodai#0",
    "latitude": 11.4,
    "longitude": 76.666666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Raorchestes\/Raorchestes-uthamani#0",
    "latitude": 9.4333333333333,
    "longitude": 77.15
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Theloderma\/Theloderma-palliatum#0",
    "latitude": 12.1865,
    "longitude": 108.7151
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Nototriton\/Nototriton-picucha#0",
    "latitude": 14.9733,
    "longitude": -85.9279
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Oedipina\/Oedipina-koehleri#0",
    "latitude": 13.713333333333,
    "longitude": -85.031666666667
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Oedipina\/Oedipina-petiola#0",
    "latitude": 15.65,
    "longitude": -86.8
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Pleurodelinae\/Pachytriton\/Pachytriton-feii#0",
    "latitude": 30.1,
    "longitude": 118.16666666667
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Pleurodelinae\/Pachytriton\/Pachytriton-inexpectatus#0",
    "latitude": 24.083333333333,
    "longitude": 110.21666666667
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Pleurodelinae\/Pachytriton\/Pachytriton-moi#0",
    "latitude": 25.6,
    "longitude": 109.9
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Ichthyophiidae\/Ichthyophis\/Ichthyophis-lakimi#0",
    "latitude": 6.05,
    "longitude": 116.55
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Ichthyophiidae\/Ichthyophis\/Ichthyophis-nguyenorum#0",
    "latitude": 14.688333333333,
    "longitude": 108.32444444444
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Indotyphlidae\/Gegeneophis\/Gegeneophis-primus#0",
    "latitude": 11.55,
    "longitude": 76.0
  },
  {
    "name_id": "Amphibia\/Anura\/Allophrynidae\/Allophryne\/Allophryne-resplendens#0",
    "latitude": -4.4597222222222,
    "longitude": -71.750972222222
  },
  {
    "name_id": "Amphibia\/Anura\/Alsodidae\/Eupsophus\/Eupsophus-altor#0",
    "latitude": -39.683333333333,
    "longitude": -73.316666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Arthroleptidae\/Arthroleptinae\/Arthroleptis\/Arthroleptis-kutogundua#0",
    "latitude": -28.983,
    "longitude": 33.567
  },
  {
    "name_id": "Amphibia\/Anura\/Brevicipitidae\/Breviceps\/Breviceps-branchi#0",
    "latitude": -28.932888888889,
    "longitude": 16.769138888889
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Amazophrynella\/Amazophrynella-vote#0",
    "latitude": -9.8453611111111,
    "longitude": -58.219611111111
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Ansonia\/Ansonia-thinthinae#0",
    "latitude": 14.684611111111,
    "longitude": 98.333138888889
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Dendrophryniscus\/Dendrophryniscus-skuki#0",
    "latitude": -14.283333333333,
    "longitude": -39.0
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Incilius\/Incilius-aurarius#0",
    "latitude": 15.968655555556,
    "longitude": -91.56275
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Melanophryniscus\/Melanophryniscus-setiba#0",
    "latitude": -20.606944444444,
    "longitude": -40.416944444444
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Rhaebo\/Rhaebo-ecuadorensis#0",
    "latitude": -0.67130555555556,
    "longitude": -77.4005
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Rhinella\/Rhinella-inopina#0",
    "latitude": -13.383333333333,
    "longitude": -46.333333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Centroleninae\/Centrolene\/Centrolene-sabini#0",
    "latitude": -13.176944444444,
    "longitude": -71.608611111111
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Centroleninae\/Nymphargus\/Nymphargus-lasgralarias#0",
    "latitude": -0.031166666666667,
    "longitude": -78.705966666667
  },
  {
    "name_id": "Amphibia\/Anura\/Cycloramphidae\/Cycloramphus\/Cycloramphus-lithomimeticus#0",
    "latitude": -22.900955555556,
    "longitude": -43.892941666667
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Hoplobatrachus\/Hoplobatrachus-litoralis#0",
    "latitude": 20.866666666667,
    "longitude": 92.3
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Limnonectes\/Limnonectes-isanensis#0",
    "latitude": 17.280194444444,
    "longitude": 1.51875
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Minervarya\/Minervarya-sengupti#0",
    "latitude": 25.445188888889,
    "longitude": 91.753052777778
  },
  {
    "name_id": "Amphibia\/Anura\/Hemiphractidae\/Hemiphractinae\/Gastrotheca\/Gastrotheca-prasina#0",
    "latitude": -16.341688888889,
    "longitude": -40.996991666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hemiphractidae\/Hemiphractinae\/Gastrotheca\/Gastrotheca-recava#0",
    "latitude": -13.594944444444,
    "longitude": -39.719583333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Bokermannohyla\/Bokermannohyla-napolii#0",
    "latitude": -19.2,
    "longitude": -47.133333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Bokermannohyla\/Bokermannohyla-sapiranga#0",
    "latitude": -15.930277777778,
    "longitude": -47.883055555556
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Hyloscirtus\/Hyloscirtus-criptico#0",
    "latitude": 0.47327,
    "longitude": -78.57021
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Dendropsophinae\/Dendropsophus\/Dendropsophus-frosti#0",
    "latitude": -4.1067222222222,
    "longitude": -69.949277777778
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Dendropsophinae\/Dendropsophus\/Dendropsophus-luddeckei#0",
    "latitude": 5.7507777777778,
    "longitude": -73.277694444444
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Dendropsophinae\/Dendropsophus\/Dendropsophus-norandinus#0",
    "latitude": 6.9805555555556,
    "longitude": -75.135277777778
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Corythomantis\/Corythomantis-galeata#0",
    "latitude": -11.507694444444,
    "longitude": -41.135361111111
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Osteocephalus\/Osteocephalus-buckleyi#2",
    "latitude": -3.065,
    "longitude": -75.8264
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Osteocephalus\/Osteocephalus-cannatellai#0",
    "latitude": -1.3578,
    "longitude": -77.8477
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Osteocephalus\/Osteocephalus-helenae#1",
    "latitude": -12.2581,
    "longitude": -72.8425
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Scinax\/Scinax-imbegue#0",
    "latitude": -27.05,
    "longitude": -49.083333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Scinax\/Scinax-tymbamirim#0",
    "latitude": -27.583333333333,
    "longitude": -48.516666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hyperoliidae\/Hyperoliinae\/Hyperolius\/Hyperolius-chelaensis#0",
    "latitude": -14.889444444444,
    "longitude": 13.274166666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hyperoliidae\/Hyperoliinae\/Hyperolius\/Hyperolius-jackie#0",
    "latitude": -2.4789666666667,
    "longitude": 29.112361111111
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Pseudopaludicola\/Pseudopaludicola-giarettai#0",
    "latitude": -18.769038888889,
    "longitude": -44.448286111111
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Pseudopaludicola\/Pseudopaludicola-hyleaustralis#0",
    "latitude": -10.333333333333,
    "longitude": -56.933333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Boophinae\/Boophis\/Boophis-narinsi#0",
    "latitude": -21.265466666667,
    "longitude": 47.412383333333
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Mantellinae\/Gephyromantis\/Gephyromantis-hintelmannae#0",
    "latitude": -21.357183333333,
    "longitude": 47.815683333333
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Mantellinae\/Gephyromantis\/Gephyromantis-mafy#0",
    "latitude": -17.29769,
    "longitude": 48.70199
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Mantellinae\/Guibemantis\/Guibemantis-tasifotsy#0",
    "latitude": -21.3872,
    "longitude": 47.455
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-firthi#0",
    "latitude": 15.0628,
    "longitude": 107.8587
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachium\/Leptobrachium-ingeri#0",
    "latitude": 1.6094444444444,
    "longitude": 110.16
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachium\/Leptobrachium-kanowitense#0",
    "latitude": 2.13325,
    "longitude": 112.14669444444
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachium\/Leptobrachium-rakhinense#0",
    "latitude": 17.703888888889,
    "longitude": 94.648416666667
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachium\/Leptobrachium-xanthops#0",
    "latitude": 15.68239,
    "longitude": 7.19424
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Scutiger\/Scutiger-wuguanfui#0",
    "latitude": 29.709333333333,
    "longitude": 95.582222222222
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Callulops\/Callulops-fojaensis#0",
    "latitude": -2.575,
    "longitude": 138.715
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Callulops\/Callulops-mediodiscus#0",
    "latitude": -6.24695,
    "longitude": 143.12538333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Choerophryne\/Choerophryne-brevicrus#0",
    "latitude": -5.50305,
    "longitude": 143.0811
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Choerophryne\/Choerophryne-pandanicola#0",
    "latitude": -5.50305,
    "longitude": 143.0811
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-albolineatus#0",
    "latitude": -6.8188,
    "longitude": 146.6933
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-amabilis#0",
    "latitude": -9.1216,
    "longitude": 152.7486
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-australis#0",
    "latitude": -18.95,
    "longitude": 146.18333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-clapporum#0",
    "latitude": -9.1216,
    "longitude": 152.7486
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-hinchinbrookensis#0",
    "latitude": -18.366666666667,
    "longitude": 146.25
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-nexipus#0",
    "latitude": -9.4601,
    "longitude": 148.0304
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-pictus#0",
    "latitude": -2.766,
    "longitude": 132.788
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-tenuidactylus#0",
    "latitude": -5.52555,
    "longitude": 143.05443333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-graminis#0",
    "latitude": -5.5702666666667,
    "longitude": 143.05876666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-streiffeleri#0",
    "latitude": -5.50305,
    "longitude": 143.0811
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Paedophryne\/Paedophryne-amauensis#0",
    "latitude": -9.9824,
    "longitude": 148.5785
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Paedophryne\/Paedophryne-swiftorum#0",
    "latitude": -7.255997,
    "longitude": 147.092879
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Cophylinae\/Cophyla\/Cophyla-rava#0",
    "latitude": -14.43665,
    "longitude": 9.74335
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Gastrophryninae\/Elachistocleis\/Elachistocleis-muiraquitan#0",
    "latitude": -10.651944444444,
    "longitude": -68.504166666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Gastrophryninae\/Stereocyclops\/Stereocyclops-palmipes#0",
    "latitude": -21.516666666667,
    "longitude": -43.183333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Kalophryninae\/Kalophrynus\/Kalophrynus-limbooliati#0",
    "latitude": 1.6,
    "longitude": 103.53333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Odontophrynidae\/Odontophrynus\/Odontophrynus-monachus#0",
    "latitude": -20.166666666667,
    "longitude": -46.5
  },
  {
    "name_id": "Amphibia\/Anura\/Odontophrynidae\/Proceratophrys\/Proceratophrys-redacta#0",
    "latitude": -11.590561111111,
    "longitude": -41.209130555556
  },
  {
    "name_id": "Amphibia\/Anura\/Phrynobatrachidae\/Phrynobatrachus\/Phrynobatrachus-ruthbeateae#0",
    "latitude": 3.4042833333333,
    "longitude": 13.138566666667
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Amolops\/Amolops-indoburmanensis#0",
    "latitude": 21.598722222222,
    "longitude": 93.866638888889
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Glandirana\/Glandirana-susurra#0",
    "latitude": 38.066666666667,
    "longitude": 138.4
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Pelophylax\/Pelophylax-cypriensis#0",
    "latitude": 34.91611111,
    "longitude": 32.90027778
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Pulchrana\/Pulchrana-rawa#1",
    "latitude": 1.25,
    "longitude": 101.5
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Polypedates\/Polypedates-ranwellai#0",
    "latitude": 6.7632222222222,
    "longitude": 80.434166666667
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Rhacophorus\/Rhacophorus-helenae#0",
    "latitude": 11.0175,
    "longitude": 107.7241
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Rhacophorus\/Rhacophorus-robertingeri#0",
    "latitude": 14.688333333333,
    "longitude": 8.3244444444444
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Theloderma\/Theloderma-laeve#5",
    "latitude": 12.326666666667,
    "longitude": 7.42
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Zhangixalus\/Zhangixalus-hongchibaensis#0",
    "latitude": 31.540811111111,
    "longitude": 109.06421944444
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Zhangixalus\/Zhangixalus-wui#0",
    "latitude": 30.525261111111,
    "longitude": 109.09418055556
  },
  {
    "name_id": "Amphibia\/Anura\/Telmatobiidae\/Telmatobius\/Telmatobius-mendelsoni#0",
    "latitude": -13.158611111111,
    "longitude": -71.643333333333
  },
  {
    "name_id": "Amphibia\/Caudata\/Hynobiidae\/Onychodactylinae\/Onychodactylus\/Onychodactylus-koreanus#0",
    "latitude": 37.333333333333,
    "longitude": 129.05
  },
  {
    "name_id": "Amphibia\/Caudata\/Hynobiidae\/Onychodactylinae\/Onychodactylus\/Onychodactylus-nipponoborealis#0",
    "latitude": 40.55,
    "longitude": 140.63333333333
  },
  {
    "name_id": "Amphibia\/Caudata\/Hynobiidae\/Onychodactylinae\/Onychodactylus\/Onychodactylus-zhangyapingi#0",
    "latitude": 41.466666666667,
    "longitude": 126.58333333333
  },
  {
    "name_id": "Amphibia\/Caudata\/Hynobiidae\/Onychodactylinae\/Onychodactylus\/Onychodactylus-zhaoermii#0",
    "latitude": 40.466666666667,
    "longitude": 123.26666666667
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Batrachoseps\/Batrachoseps-altasierrae#0",
    "latitude": 35.732,
    "longitude": -118.538
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Batrachoseps\/Batrachoseps-bramei#0",
    "latitude": 35.945,
    "longitude": -118.476
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-aureogularis#0",
    "latitude": 9.3925,
    "longitude": -83.2119
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-chinanteca#0",
    "latitude": 17.7239,
    "longitude": -96.321
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-kamuk#0",
    "latitude": 9.2546,
    "longitude": -83.059
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-splendida#0",
    "latitude": 9.3567,
    "longitude": -83.229
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Nototriton\/Nototriton-matama#0",
    "latitude": 9.8071,
    "longitude": -83.1683
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Pleurodelinae\/Cynops\/Cynops-orientalis#6",
    "latitude": 30.616666666667,
    "longitude": 116.56666666667
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Pleurodelinae\/Pachytriton\/Pachytriton-xanthospilos#0",
    "latitude": 24.93,
    "longitude": 12.97
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Pleurodelinae\/Paramesotriton\/Paramesotriton-maolanensis#0",
    "latitude": 25.666666666667,
    "longitude": 7.8833333333333
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Pleurodelinae\/Tylototriton\/Tylototriton-broadoridgus#0",
    "latitude": 29.816666666667,
    "longitude": 110.15
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Ichthyophiidae\/Ichthyophis\/Ichthyophis-pauli#0",
    "latitude": 6.0491666666667,
    "longitude": 116.7
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Siphonopidae\/Microcaecilia\/Microcaecilia-marvaleewakeae#0",
    "latitude": -1.7730555555556,
    "longitude": -56.370555555556
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Siphonopidae\/Microcaecilia\/Microcaecilia-savagei#0",
    "latitude": 4.3333333333333,
    "longitude": -58.816666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Allophrynidae\/Allophryne\/Allophryne-relicta#2",
    "latitude": -14.583333333333,
    "longitude": -39.283333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Centroleninae\/Nymphargus\/Nymphargus-sucre#0",
    "latitude": -3.0077,
    "longitude": -78.53318
  },
  {
    "name_id": "Amphibia\/Anura\/Ceratobatrachidae\/Ceratobatrachinae\/Cornufer\/Cornufer-citrinospilus#0",
    "latitude": -5.3437166666667,
    "longitude": 151.31455
  },
  {
    "name_id": "Amphibia\/Anura\/Hemiphractidae\/Hemiphractinae\/Gastrotheca\/Gastrotheca-dysprosita#0",
    "latitude": -6.7916666666667,
    "longitude": -77.866666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Boana\/Boana-bandeirantes#0",
    "latitude": -23.716666666667,
    "longitude": -46.85
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Dendropsophinae\/Dendropsophus\/Dendropsophus-manonegra#0",
    "latitude": 1.7950555555556,
    "longitude": -75.646861111111
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Dendropsophinae\/Dendropsophus\/Dendropsophus-shiwiarum#0",
    "latitude": -2.06,
    "longitude": -76.78
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Aparasphenodon\/Aparasphenodon-pomba#0",
    "latitude": -21.333333333333,
    "longitude": -42.75
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Trachycephalus\/Trachycephalus-cunauaru#3",
    "latitude": -5.6999722222222,
    "longitude": -64.415361111111
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Trachycephalus\/Trachycephalus-helioi#0",
    "latitude": -2.6128027777778,
    "longitude": -56.194036111111
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Ololygon\/Ololygon-pombali#0",
    "latitude": -20.600833333333,
    "longitude": -46.293027777778
  },
  {
    "name_id": "Amphibia\/Anura\/Hyperoliidae\/Hyperoliinae\/Hyperolius\/Hyperolius-inyangae#0",
    "latitude": -18.288972222222,
    "longitude": 32.723444444444
  },
  {
    "name_id": "Amphibia\/Anura\/Hyperoliidae\/Hyperoliinae\/Hyperolius\/Hyperolius-jacobseni#0",
    "latitude": 5.0786111111111,
    "longitude": 20.667222222222
  },
  {
    "name_id": "Amphibia\/Anura\/Hyperoliidae\/Hyperoliinae\/Hyperolius\/Hyperolius-lupiroensis#0",
    "latitude": -8.4248055555556,
    "longitude": 36.692527777778
  },
  {
    "name_id": "Amphibia\/Anura\/Hyperoliidae\/Hyperoliinae\/Hyperolius\/Hyperolius-raymondi#0",
    "latitude": -7.7442222222222,
    "longitude": 19.954666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hyperoliidae\/Hyperoliinae\/Hyperolius\/Hyperolius-rwandae#0",
    "latitude": -2.6196638888889,
    "longitude": 29.752347222222
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Pseudopaludicola\/Pseudopaludicola-facureae#0",
    "latitude": -18.975127777778,
    "longitude": -48.290619444444
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Pseudopaludicola\/Pseudopaludicola-parnaiba#0",
    "latitude": -7.5950416666667,
    "longitude": -45.343508333333
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leptodactylinae\/Adenomera\/Adenomera-cotuba#0",
    "latitude": -13.866666666667,
    "longitude": -47.25
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leptodactylinae\/Adenomera\/Adenomera-juikitam#0",
    "latitude": -13.866666666667,
    "longitude": -47.25
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leptodactylinae\/Adenomera\/Adenomera-saci#0",
    "latitude": -14.166666666667,
    "longitude": -47.783333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leptodactylinae\/Leptodactylus\/Leptodactylus-oreomantis#0",
    "latitude": -13.523055555556,
    "longitude": -41.957777777778
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Paratelmatobiinae\/Crossodactylodes\/Crossodactylodes-itambe#0",
    "latitude": -18.398083333333,
    "longitude": -43.344333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Paratelmatobiinae\/Crossodactylodes\/Crossodactylodes-septentrionalis#0",
    "latitude": -15.163244444444,
    "longitude": -39.342786111111
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-botsfordi#0",
    "latitude": 22.3135,
    "longitude": 103.7652
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-fritinniens#0",
    "latitude": 4.1368,
    "longitude": 114.8937
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-zhangyapingi#0",
    "latitude": 18.98,
    "longitude": 99.33
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachium\/Leptobrachium-masatakasatoi#0",
    "latitude": 20.2,
    "longitude": 104.01666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Megophryinae\/Megophrys\/Megophrys-ancrae#0",
    "latitude": 27.497216666667,
    "longitude": 6.3911166666667
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Megophryinae\/Megophrys\/Megophrys-oropedion#0",
    "latitude": 25.560733333333,
    "longitude": 1.8826666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Megophryinae\/Megophrys\/Megophrys-vegrandis#0",
    "latitude": 27.101116666667,
    "longitude": 2.5273666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Barygenys\/Barygenys-apodasta#0",
    "latitude": -9.1216,
    "longitude": 152.7486
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Barygenys\/Barygenys-resima#1",
    "latitude": -10.2851,
    "longitude": 150.1822
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Choerophryne\/Choerophryne-bryonopsis#0",
    "latitude": -9.1906,
    "longitude": 149.1611
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Hylophorbus\/Hylophorbus-atrifasciatus#0",
    "latitude": -4.7052,
    "longitude": 145.4018
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-cameroni#0",
    "latitude": -4.7048,
    "longitude": 145.4042
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-gagneorum#0",
    "latitude": -11.3555,
    "longitude": 154.2246
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-parkopanorum#0",
    "latitude": -3.3773,
    "longitude": 142.518
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Gastrophryninae\/Elachistocleis\/Elachistocleis-haroi#0",
    "latitude": -24.190916666667,
    "longitude": -65.231780555556
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Microhylinae\/Kaloula\/Kaloula-indochinensis#0",
    "latitude": 14.3413889,
    "longitude": 8.4794444
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Microhylinae\/Microhyla\/Microhyla-orientalis#0",
    "latitude": -8.4175,
    "longitude": 115.12444444444
  },
  {
    "name_id": "Amphibia\/Anura\/Odontophrynidae\/Proceratophrys\/Proceratophrys-bagnoi#0",
    "latitude": -13.829861111111,
    "longitude": -48.321388888889
  },
  {
    "name_id": "Amphibia\/Anura\/Odontophrynidae\/Proceratophrys\/Proceratophrys-branti#0",
    "latitude": -10.505,
    "longitude": -46.433333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Odontophrynidae\/Proceratophrys\/Proceratophrys-carranca#0",
    "latitude": -17.403611111111,
    "longitude": -45.06
  },
  {
    "name_id": "Amphibia\/Anura\/Odontophrynidae\/Proceratophrys\/Proceratophrys-izecksohni#0",
    "latitude": -22.991388888889,
    "longitude": -44.100277777778
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Pelodryadinae\/Ranoidea\/Ranoidea-callista#0",
    "latitude": -9.234,
    "longitude": 149.1541
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Pelodryadinae\/Ranoidea\/Ranoidea-kroombitensis#0",
    "latitude": -24.384166666667,
    "longitude": 151.00138888889
  },
  {
    "name_id": "Amphibia\/Anura\/Phrynobatrachidae\/Phrynobatrachus\/Phrynobatrachus-njiomock#5",
    "latitude": 6.2021111111111,
    "longitude": 0.45925
  },
  {
    "name_id": "Amphibia\/Anura\/Phyllomedusidae\/Agalychnis\/Agalychnis-terranova#0",
    "latitude": 5.8355666666667,
    "longitude": -74.837930555556
  },
  {
    "name_id": "Amphibia\/Anura\/Pyxicephalidae\/Cacosterninae\/Amietia\/Amietia-poyntoni#0",
    "latitude": -29.5,
    "longitude": 30.016666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Pyxicephalidae\/Cacosterninae\/Cacosternum\/Cacosternum-aggestum#0",
    "latitude": -33.696861111111,
    "longitude": 18.724333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Pyxicephalidae\/Cacosterninae\/Cacosternum\/Cacosternum-nanogularum#0",
    "latitude": -28.851111111111,
    "longitude": 31.2075
  },
  {
    "name_id": "Amphibia\/Anura\/Pyxicephalidae\/Cacosterninae\/Cacosternum\/Cacosternum-rhythmum#0",
    "latitude": -29.355833333333,
    "longitude": 29.993333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Pyxicephalidae\/Cacosterninae\/Tomopterna\/Tomopterna-wambensis#0",
    "latitude": 0.98333333333333,
    "longitude": 37.333333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Gracixalus\/Gracixalus-nonggangensis#0",
    "latitude": 22.5233,
    "longitude": 106.9523
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Gracixalus\/Gracixalus-waza#0",
    "latitude": 22.720266666667,
    "longitude": 106.65728333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Philautus\/Philautus-kakipanjang#0",
    "latitude": 1.5876833333333,
    "longitude": 110.19296666667
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Philautus\/Philautus-nianeae#0",
    "latitude": 19.01807,
    "longitude": 2.87633
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Polypedates\/Polypedates-discantus#0",
    "latitude": 6.94025,
    "longitude": 100.25438888889
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Rhacophorus\/Rhacophorus-borneensis#1",
    "latitude": 128.7,
    "longitude": 264.1
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Rhacophorus\/Rhacophorus-viridimaculatus#0",
    "latitude": 22.9,
    "longitude": 105.23333333333
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-jugivagans#0",
    "latitude": 8.789,
    "longitude": -82.2154
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-tapajonica#0",
    "latitude": -2.4716666666667,
    "longitude": -56.012222222222
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Nototriton\/Nototriton-mime#0",
    "latitude": 15.3833,
    "longitude": -86.0399
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Pleurodelinae\/Triturus\/Triturus-ivanbureschi#6",
    "latitude": 41.878,
    "longitude": 25.853
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Pleurodelinae\/Tylototriton\/Tylototriton-ziegleri#0",
    "latitude": 23.056944444444,
    "longitude": 104.84638888889
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Ichthyophiidae\/Ichthyophis\/Ichthyophis-multicolor#0",
    "latitude": 26.277555555556,
    "longitude": 94.759027777778
  },
  {
    "name_id": "Amphibia\/Anura\/Arthroleptidae\/Leptopelinae\/Leptopelis\/Leptopelis-anebos#0",
    "latitude": -3.56455,
    "longitude": 28.66619
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Amazophrynella\/Amazophrynella-manaos#0",
    "latitude": -3.0988888888889,
    "longitude": -59.969166666667
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Ansonia\/Ansonia-lumut#0",
    "latitude": 5.6018333333333,
    "longitude": 2.6031666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Ansonia\/Ansonia-vidua#0",
    "latitude": 3.9120166666667,
    "longitude": 115.49923333333
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Rhinella\/Rhinella-casconi#0",
    "latitude": -4.2547222222222,
    "longitude": -38.934722222222
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Rhinella\/Rhinella-yunga#0",
    "latitude": -10.566666666667,
    "longitude": -75.383333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Centroleninae\/Centrolene\/Centrolene-charapita#0",
    "latitude": -5.3010722222222,
    "longitude": -78.395713888889
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Centroleninae\/Cochranella\/Cochranella-guayasamini#0",
    "latitude": -6.4207416666667,
    "longitude": -76.291241666667
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Centroleninae\/Vitreorana\/Vitreorana-baliomma#0",
    "latitude": -16.989444444444,
    "longitude": -39.582777777778
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Hyalinobatrachinae\/Hyalinobatrachium\/Hyalinobatrachium-anachoretus#0",
    "latitude": -5.6775166666667,
    "longitude": -77.773330555556
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Limnonectes\/Limnonectes-cintalubang#0",
    "latitude": 1.1416666666667,
    "longitude": 110.5825
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Limnonectes\/Limnonectes-hikidai#0",
    "latitude": 1.6069444444444,
    "longitude": 110.19083333333
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Limnonectes\/Limnonectes-larvaepartus#0",
    "latitude": 0.92353,
    "longitude": 122.64386
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Limnonectes\/Limnonectes-selatan#0",
    "latitude": 3.4,
    "longitude": 101.76666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Limnonectes\/Limnonectes-utara#0",
    "latitude": 4.85,
    "longitude": 100.8
  },
  {
    "name_id": "Amphibia\/Anura\/Hemiphractidae\/Hemiphractinae\/Gastrotheca\/Gastrotheca-aguaruna#0",
    "latitude": -6.1805555555556,
    "longitude": -77.616944444444
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Boana\/Boana-alfaroi#0",
    "latitude": -0.6893,
    "longitude": -76.429
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Boana\/Boana-almendarizae#0",
    "latitude": -2.9796,
    "longitude": -78.4415
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Boana\/Boana-maculateralis#0",
    "latitude": -1.02337,
    "longitude": -77.48359
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Boana\/Boana-tetete#0",
    "latitude": -1.0214,
    "longitude": -77.4782
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Scinax\/Scinax-villasboasi#0",
    "latitude": -8.5833333333333,
    "longitude": -55.5
  },
  {
    "name_id": "Amphibia\/Anura\/Hylodidae\/Crossodactylus\/Crossodactylus-werneri#0",
    "latitude": -22.433333333333,
    "longitude": -44.6
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Pseudopaludicola\/Pseudopaludicola-atragula#0",
    "latitude": -20.341944444444,
    "longitude": -49.195
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Pseudopaludicola\/Pseudopaludicola-pocoto#0",
    "latitude": -4.3166666666667,
    "longitude": -40.166666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Boophinae\/Boophis\/Boophis-ankarafensis#0",
    "latitude": -14.380833333333,
    "longitude": 47.758666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-marmorata#0",
    "latitude": 1.1430555555556,
    "longitude": 110.26305555556
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-sabahmontana#0",
    "latitude": 6.0,
    "longitude": 116.53333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachium\/Leptobrachium-kantonishikawai#0",
    "latitude": 3.75,
    "longitude": 115.43333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Megophryinae\/Megophrys\/Megophrys-acuta#0",
    "latitude": 23.474166666667,
    "longitude": 111.89805555556
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Megophryinae\/Megophrys\/Megophrys-obesa#0",
    "latitude": 23.474166666667,
    "longitude": 111.89805555556
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Megophryinae\/Megophrys\/Megophrys-popei#0",
    "latitude": 26.502441666667,
    "longitude": 114.06063055556
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Austrochaperina\/Austrochaperina-alexanderi#0",
    "latitude": -5.6566166666667,
    "longitude": 142.30461666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Austrochaperina\/Austrochaperina-laurae#0",
    "latitude": -5.6566166666667,
    "longitude": 142.30461666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Choerophryne\/Choerophryne-gracilirostris#0",
    "latitude": -5.8078,
    "longitude": 142.3083
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-viridis#0",
    "latitude": -5.6566166666667,
    "longitude": 142.30461666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Copiula\/Copiula-annanoreenae#0",
    "latitude": -5.6566166666667,
    "longitude": 142.30461666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Copiula\/Copiula-lennarti#0",
    "latitude": -5.7291833333333,
    "longitude": 142.26328333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Hylophorbus\/Hylophorbus-sigridae#0",
    "latitude": -5.7291833333333,
    "longitude": 142.26328333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-albomaculata#0",
    "latitude": -5.6566166666667,
    "longitude": 142.30461666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-curator#0",
    "latitude": -5.6566166666667,
    "longitude": 142.30461666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Xenorhina\/Xenorhina-tillacki#0",
    "latitude": -5.7291833333333,
    "longitude": 142.26328333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Cophylinae\/Cophyla\/Cophyla-karenae#0",
    "latitude": -17.898472222222,
    "longitude": 49.215333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Cophylinae\/Rhombophryne\/Rhombophryne-vaventy#0",
    "latitude": -14.43665,
    "longitude": 49.74335
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Gastrophryninae\/Chiasmocleis\/Chiasmocleis-haddadi#0",
    "latitude": 3.9333333333333,
    "longitude": -54.184722222222
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Gastrophryninae\/Chiasmocleis\/Chiasmocleis-papachibe#0",
    "latitude": -3.1063888888889,
    "longitude": -47.781944444444
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Gastrophryninae\/Chiasmocleis\/Chiasmocleis-royi#0",
    "latitude": -12.833333333333,
    "longitude": -69.283333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Kalophryninae\/Kalophrynus\/Kalophrynus-cryptophonus#0",
    "latitude": 11.738055555556,
    "longitude": 107.70694444444
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Kalophryninae\/Kalophrynus\/Kalophrynus-honbaensis#0",
    "latitude": 12.121111111111,
    "longitude": 108.94861111111
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Microhylinae\/Glyphoglossus\/Glyphoglossus-capsus#0",
    "latitude": 1.173889,
    "longitude": 110.2
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Microhylinae\/Microhyla\/Microhyla-arboricola#0",
    "latitude": 12.395,
    "longitude": 8.3503
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Microhylinae\/Microhyla\/Microhyla-darevskii#0",
    "latitude": 15.752744444444,
    "longitude": 7.9501
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Microhylinae\/Microhyla\/Microhyla-minuta#0",
    "latitude": 11.4389,
    "longitude": 7.4035
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Microhylinae\/Microhyla\/Microhyla-mukhlesuri#0",
    "latitude": 22.583333333333,
    "longitude": 91.916666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Microhylinae\/Microhyla\/Microhyla-mymensinghensis#1",
    "latitude": 24.747222222222,
    "longitude": 90.406666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Odontophrynidae\/Proceratophrys\/Proceratophrys-gladius#0",
    "latitude": -22.566666666667,
    "longitude": -44.75
  },
  {
    "name_id": "Amphibia\/Anura\/Odontophrynidae\/Proceratophrys\/Proceratophrys-itamari#0",
    "latitude": -22.683333333333,
    "longitude": -45.45
  },
  {
    "name_id": "Amphibia\/Anura\/Odontophrynidae\/Proceratophrys\/Proceratophrys-mantiqueira#0",
    "latitude": -20.883333333333,
    "longitude": -42.866666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Pyxicephalidae\/Cacosterninae\/Cacosternum\/Cacosternum-thorini#0",
    "latitude": -32.58,
    "longitude": 26.942777777778
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Feihyla\/Feihyla-inexpectata#1",
    "latitude": 4.9,
    "longitude": 116.88333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Gracixalus\/Gracixalus-lumarius#0",
    "latitude": 15.063,
    "longitude": 107.786
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Kurixalus\/Kurixalus-viridescens#0",
    "latitude": 12.117777777778,
    "longitude": 108.94611111111
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Liuixalus\/Liuixalus-calcarius#1",
    "latitude": 20.798888888889,
    "longitude": 106.99777777778
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Polypedates\/Polypedates-pseudotilophus#0",
    "latitude": -3.5127777777778,
    "longitude": 102.54805555556
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-chucantiensis#0",
    "latitude": 8.8034,
    "longitude": -78.4601
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Pleurodelinae\/Paramesotriton\/Paramesotriton-qixilingensis#0",
    "latitude": 26.75,
    "longitude": 114.17
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Pleurodelinae\/Tylototriton\/Tylototriton-liuyangensis#0",
    "latitude": 28.416666666667,
    "longitude": 114.1
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Pleurodelinae\/Tylototriton\/Tylototriton-shanorum#0",
    "latitude": 20.807916666667,
    "longitude": 97.045861111111
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Salamandrinae\/Lyciasalamandra\/Lyciasalamandra-antalyana#3",
    "latitude": 37.054780555556,
    "longitude": 30.555127777778
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Ichthyophiidae\/Ichthyophis\/Ichthyophis-cardamomensis#0",
    "latitude": 12.470555555556,
    "longitude": 3.1102777777778
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Ichthyophiidae\/Ichthyophis\/Ichthyophis-catlocensis#0",
    "latitude": 11.622916666667,
    "longitude": 7.2992222222222
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Ichthyophiidae\/Ichthyophis\/Ichthyophis-chaloensis#0",
    "latitude": 17.70325,
    "longitude": 5.7831388888889
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Indotyphlidae\/Gegeneophis\/Gegeneophis-tejaswini#0",
    "latitude": 12.268333333333,
    "longitude": 75.287222222222
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Typhlonectidae\/Chthonerpeton\/Chthonerpeton-tremembe#0",
    "latitude": -2.8497222222222,
    "longitude": -41.808055555556
  },
  {
    "name_id": "Amphibia\/Anura\/Alsodidae\/Alsodes\/Alsodes-cantillanensis#0",
    "latitude": -33.925722222222,
    "longitude": -71.042944444444
  },
  {
    "name_id": "Amphibia\/Anura\/Arthroleptidae\/Arthroleptinae\/Cardioglossa\/Cardioglossa-annulata#0",
    "latitude": -2.3267777777778,
    "longitude": 12.793027777778
  },
  {
    "name_id": "Amphibia\/Anura\/Arthroleptidae\/Arthroleptinae\/Cardioglossa\/Cardioglossa-congolia#0",
    "latitude": -2.58555,
    "longitude": 16.47182
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Amazophrynella\/Amazophrynella-amazonicola#0",
    "latitude": -3.8280555555556,
    "longitude": -73.368611111111
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Amazophrynella\/Amazophrynella-matses#0",
    "latitude": -5.0425,
    "longitude": -73.833888888889
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Melanophryniscus\/Melanophryniscus-biancae#0",
    "latitude": -26.028333333333,
    "longitude": -48.965
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Melanophryniscus\/Melanophryniscus-milanoi#0",
    "latitude": -26.798611111111,
    "longitude": -48.931944444444
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Melanophryniscus\/Melanophryniscus-xanthostomus#0",
    "latitude": -26.021388888889,
    "longitude": -48.996388888889
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Rhinella\/Rhinella-gildae#0",
    "latitude": -5.0833333333333,
    "longitude": -48.316666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Rhinella\/Rhinella-sebbeni#0",
    "latitude": -16.573333333333,
    "longitude": -49.182777777778
  },
  {
    "name_id": "Amphibia\/Anura\/Ceratobatrachidae\/Ceratobatrachinae\/Cornufer\/Cornufer-custos#0",
    "latitude": -2.01815,
    "longitude": 146.79678333333
  },
  {
    "name_id": "Amphibia\/Anura\/Ceratobatrachidae\/Ceratobatrachinae\/Platymantis\/Platymantis-quezoni#0",
    "latitude": 13.989,
    "longitude": 121.818
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Euphlyctis\/Euphlyctis-kalasgramensis#0",
    "latitude": 22.75,
    "longitude": 90.3
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Limnonectes\/Limnonectes-lauhachindai#0",
    "latitude": 15.296555555556,
    "longitude": 5.4727777777778
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Limnonectes\/Limnonectes-sinuatodorsalis#0",
    "latitude": 4.2833333333333,
    "longitude": 115.95
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Hyloscirtus\/Hyloscirtus-mashpi#0",
    "latitude": 0.1631,
    "longitude": -78.8678
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Tepuihyla\/Tepuihyla-obscura#0",
    "latitude": 5.3241666666667,
    "longitude": -62.202777777778
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Scinax\/Scinax-montivagus#0",
    "latitude": -11.396944444444,
    "longitude": -40.526944444444
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Scinax\/Scinax-rupestris#0",
    "latitude": -14.158333333333,
    "longitude": -47.611666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Sphaenorhynchus\/Sphaenorhynchus-canga#0",
    "latitude": -20.127777777778,
    "longitude": -43.384722222222
  },
  {
    "name_id": "Amphibia\/Anura\/Hylodidae\/Crossodactylus\/Crossodactylus-franciscanus#0",
    "latitude": -20.216666666667,
    "longitude": -46.366666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hylodidae\/Hylodes\/Hylodes-japi#0",
    "latitude": -23.227777777778,
    "longitude": -46.966388888889
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Physalaemus\/Physalaemus-atim#0",
    "latitude": -16.328444444444,
    "longitude": -49.163111111111
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Laliostominae\/Aglyptodactylus\/Aglyptodactylus-australis#0",
    "latitude": -24.758611111111,
    "longitude": 46.854166666667
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-juliandringi#0",
    "latitude": 4.0388888888889,
    "longitude": 114.87222222222
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-pyrrhops#0",
    "latitude": 11.738055555556,
    "longitude": 107.70694444444
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Choerophryne\/Choerophryne-epirrhina#0",
    "latitude": -4.6530833333333,
    "longitude": 141.72413333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Choerophryne\/Choerophryne-grylloides#0",
    "latitude": -4.6530833333333,
    "longitude": 141.72413333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-rajampatensis#1",
    "latitude": -0.33718333333333,
    "longitude": 131.2588
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-salawatiensis#2",
    "latitude": -0.95638333333333,
    "longitude": 130.78433333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Paedophryne\/Paedophryne-titan#0",
    "latitude": -10.0579,
    "longitude": 151.0703
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Cophylinae\/Rhombophryne\/Rhombophryne-tany#0",
    "latitude": -14.15256,
    "longitude": 48.95728
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Kalophryninae\/Kalophrynus\/Kalophrynus-anya#0",
    "latitude": 23.599166666667,
    "longitude": 95.520277777778
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Kalophryninae\/Kalophrynus\/Kalophrynus-meizon#0",
    "latitude": 2.9333333333333,
    "longitude": 13.083333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Phrynobatrachidae\/Phrynobatrachus\/Phrynobatrachus-horsti#0",
    "latitude": -2.2132777777778,
    "longitude": 12.835
  },
  {
    "name_id": "Amphibia\/Anura\/Phrynobatrachidae\/Phrynobatrachus\/Phrynobatrachus-mayokoensis#0",
    "latitude": -2.4348888888889,
    "longitude": 12.938027777778
  },
  {
    "name_id": "Amphibia\/Anura\/Phyllomedusidae\/Pithecopus\/Pithecopus-rusticus#0",
    "latitude": -26.599972222222,
    "longitude": -51.577611111111
  },
  {
    "name_id": "Amphibia\/Anura\/Pipidae\/Xenopus\/Xenopus-allofraseri#0",
    "latitude": 3.5275,
    "longitude": 8.5793
  },
  {
    "name_id": "Amphibia\/Anura\/Pipidae\/Xenopus\/Xenopus-eysoole#0",
    "latitude": 6.2427,
    "longitude": 10.5011
  },
  {
    "name_id": "Amphibia\/Anura\/Pipidae\/Xenopus\/Xenopus-kobeli#0",
    "latitude": 4.6116,
    "longitude": 12.2254
  },
  {
    "name_id": "Amphibia\/Anura\/Pipidae\/Xenopus\/Xenopus-mellotropicalis#0",
    "latitude": 0.4536,
    "longitude": 10.2781
  },
  {
    "name_id": "Amphibia\/Anura\/Pipidae\/Xenopus\/Xenopus-parafraseri#0",
    "latitude": 3.7931,
    "longitude": 11.417
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Clinotarsus\/Clinotarsus-penelope#0",
    "latitude": 8.45,
    "longitude": 98.533333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Odorrana\/Odorrana-fengkaiensis#0",
    "latitude": 23.461155555556,
    "longitude": 111.90911111111
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Pulchrana\/Pulchrana-guttmani#0",
    "latitude": 6.0923,
    "longitude": 124.6709
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Ghatixalus\/Ghatixalus-magnus#0",
    "latitude": 10.131597222222,
    "longitude": 76.985333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Gracixalus\/Gracixalus-seesom#0",
    "latitude": 14.683333333333,
    "longitude": 98.4
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Liuixalus\/Liuixalus-feii#0",
    "latitude": 23.452888888889,
    "longitude": 111.88761111111
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Liuixalus\/Liuixalus-shiwandashan#0",
    "latitude": 21.72064,
    "longitude": 7.5427
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Rhacophorus\/Rhacophorus-indonesiensis#0",
    "latitude": -2.1976805555556,
    "longitude": 101.86952777778
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Theloderma\/Theloderma-vietnamense#0",
    "latitude": 11.428611111111,
    "longitude": 7.4272222222222
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Bolitoglossa\/Bolitoglossa-tenebrosa#0",
    "latitude": 15.216111111111,
    "longitude": -90.213611111111
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Chiropterotriton\/Chiropterotriton-cieloensis#0",
    "latitude": 23.10043,
    "longitude": -99.19044
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Chiropterotriton\/Chiropterotriton-infernalis#0",
    "latitude": 23.95949,
    "longitude": -99.47447
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Cryptotriton\/Cryptotriton-xucaneborum#0",
    "latitude": 15.46102,
    "longitude": -9.87055
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Pleurodelinae\/Tylototriton\/Tylototriton-anguliceps#0",
    "latitude": 22.309666666667,
    "longitude": 102.18376666667
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Pleurodelinae\/Tylototriton\/Tylototriton-himalayanus#0",
    "latitude": 27.006944444444,
    "longitude": 7.93
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Pleurodelinae\/Tylototriton\/Tylototriton-podichthys#0",
    "latitude": 19.300083333333,
    "longitude": 2.5736666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Ansonia\/Ansonia-khaochangensis#1",
    "latitude": 8.4421666666667,
    "longitude": 98.514472222222
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Blythophryne\/Blythophryne-beryet#0",
    "latitude": 11.7,
    "longitude": 92.733333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Limnonectes\/Limnonectes-longchuanensis#0",
    "latitude": 24.459,
    "longitude": 97.753
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Minervarya\/Minervarya-chiangmaiensis#0",
    "latitude": 17.471369444444,
    "longitude": 98.45785
  },
  {
    "name_id": "Amphibia\/Anura\/Hemiphractidae\/Hemiphractinae\/Fritziana\/Fritziana-tonimi#0",
    "latitude": -19.906944444444,
    "longitude": -40.506666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hemiphractidae\/Hemiphractinae\/Gastrotheca\/Gastrotheca-oresbios#0",
    "latitude": -6.7161666666667,
    "longitude": -77.864944444444
  },
  {
    "name_id": "Amphibia\/Anura\/Hemiphractidae\/Hemiphractinae\/Gastrotheca\/Gastrotheca-spectabilis#0",
    "latitude": -6.5013888888889,
    "longitude": -77.484694444444
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Boana\/Boana-cambui#0",
    "latitude": -22.005277777778,
    "longitude": -43.888888888889
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Dendropsophinae\/Dendropsophus\/Dendropsophus-mapinguari#0",
    "latitude": -3.8883333333333,
    "longitude": -58.345
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Osteocephalus\/Osteocephalus-camufatus#0",
    "latitude": -4.3444444444444,
    "longitude": -8.635
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Tepuihyla\/Tepuihyla-shushupe#0",
    "latitude": -1.679,
    "longitude": -73.7197
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Scinax\/Scinax-haddadorum#0",
    "latitude": -15.692777777778,
    "longitude": -52.349722222222
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Scinax\/Scinax-rossaferesae#1",
    "latitude": -24.246433333333,
    "longitude": -49.752052777778
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Pseudopaludicola\/Pseudopaludicola-ibisoroca#0",
    "latitude": -17.730555555556,
    "longitude": -53.289722222222
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Pseudopaludicola\/Pseudopaludicola-jaredi#0",
    "latitude": -3.3852777777778,
    "longitude": -41.158055555556
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Pseudopaludicola\/Pseudopaludicola-motorzinho#0",
    "latitude": -16.588611111111,
    "longitude": -56.280555555556
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-ardens#0",
    "latitude": 14.2258,
    "longitude": 108.323
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-itiokai#0",
    "latitude": 4.0386111111111,
    "longitude": 114.91777777778
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-kalonensis#0",
    "latitude": 11.2748,
    "longitude": 108.2109
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-maculosa#0",
    "latitude": 12.0152,
    "longitude": 108.7271
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-pallida#0",
    "latitude": 12.152,
    "longitude": 108.695
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-tadungensis#0",
    "latitude": 11.835,
    "longitude": 108.0081
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-tengchongensis#0",
    "latitude": 25.297572222222,
    "longitude": 98.701091666667
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachium\/Leptobrachium-tengchongense#1",
    "latitude": 25.740619444444,
    "longitude": 98.696038888889
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Scutiger\/Scutiger-spinosus#0",
    "latitude": 29.709333333333,
    "longitude": 95.582222222222
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Mantophryne\/Mantophryne-insignis#0",
    "latitude": -9.1560666666667,
    "longitude": 152.77491666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-anser#0",
    "latitude": -10.4994,
    "longitude": 150.2312
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-aurora#0",
    "latitude": -11.3635,
    "longitude": 154.0024
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-banshee#0",
    "latitude": -11.4903,
    "longitude": 153.4136
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-equus#0",
    "latitude": -10.4956,
    "longitude": 150.234
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-lemur#0",
    "latitude": -8.4553,
    "longitude": 147.263
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-matawan#0",
    "latitude": -10.0211,
    "longitude": 149.593
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-meliades#0",
    "latitude": -11.4347,
    "longitude": 153.4311
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-penelopeia#1",
    "latitude": -10.0781,
    "longitude": 151.007
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-philosylleptoris#1",
    "latitude": -10.0315,
    "longitude": 150.9781
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-picticrus#0",
    "latitude": -10.6725,
    "longitude": 152.6838
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-pseudunicolor#0",
    "latitude": -7.1295166666667,
    "longitude": 143.61343333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Cophylinae\/Rhombophryne\/Rhombophryne-botabota#0",
    "latitude": -14.4364,
    "longitude": 49.7433
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Cophylinae\/Rhombophryne\/Rhombophryne-savaka#1",
    "latitude": -14.435,
    "longitude": 49.7605
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Microhylinae\/Microhyla\/Microhyla-mihintalei#0",
    "latitude": 8.3541,
    "longitude": 80.3967
  },
  {
    "name_id": "Amphibia\/Anura\/Odontophrynidae\/Proceratophrys\/Proceratophrys-pombali#0",
    "latitude": -24.183333333333,
    "longitude": -46.783333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Pelodryadinae\/Ranoidea\/Ranoidea-bella#0",
    "latitude": 13.8869,
    "longitude": 143.2673
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Pelodryadinae\/Ranoidea\/Ranoidea-occidentalis#0",
    "latitude": -23.4908,
    "longitude": 120.3172
  },
  {
    "name_id": "Amphibia\/Anura\/Phyllomedusidae\/Phrynomedusa\/Phrynomedusa-dryade#0",
    "latitude": -23.3322,
    "longitude": -45.096827777778
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Amolops\/Amolops-albispinus#0",
    "latitude": 22.581888888889,
    "longitude": 114.20075
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Amolops\/Amolops-nyingchiensis#0",
    "latitude": 29.43871,
    "longitude": 95.66502
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Odorrana\/Odorrana-mutschmanni#0",
    "latitude": 22.711866666667,
    "longitude": 106.66791666667
  },
  {
    "name_id": "Amphibia\/Anura\/Ranixalidae\/Indirana\/Indirana-bhadrai#0",
    "latitude": 12.2201,
    "longitude": 5.6557
  },
  {
    "name_id": "Amphibia\/Anura\/Ranixalidae\/Indirana\/Indirana-paramakri#0",
    "latitude": 11.5386,
    "longitude": 6.0539
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Kurixalus\/Kurixalus-berylliniris#1",
    "latitude": 22.824108333333,
    "longitude": 121.00984722222
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Kurixalus\/Kurixalus-wangi#1",
    "latitude": 22.244755555556,
    "longitude": 120.83059444444
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Nasutixalus\/Nasutixalus-medogensis#0",
    "latitude": 29.21665,
    "longitude": 95.17571
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Philautus\/Philautus-nephophilus#0",
    "latitude": 6.0064444444444,
    "longitude": 116.54575
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Raorchestes\/Raorchestes-honnametti#3",
    "latitude": 11.8987,
    "longitude": 77.1741
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Raorchestes\/Raorchestes-lechiya#1",
    "latitude": 11.201583333333,
    "longitude": 76.440455555556
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Raorchestes\/Raorchestes-silentvalley#0",
    "latitude": 11.202038888889,
    "longitude": 76.440713888889
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Theloderma\/Theloderma-annae#0",
    "latitude": 20.41515,
    "longitude": 105.31836666667
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Theloderma\/Theloderma-lacustrinum#0",
    "latitude": 18.816527777778,
    "longitude": 2.1350277777778
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Zhangixalus\/Zhangixalus-pinglongensis#0",
    "latitude": 22.457,
    "longitude": 107.043
  },
  {
    "name_id": "Amphibia\/Anura\/Telmatobiidae\/Telmatobius\/Telmatobius-mantaro#0",
    "latitude": -12.264805555556,
    "longitude": -74.671444444444
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Nototriton\/Nototriton-nelsoni#0",
    "latitude": 15.525394,
    "longitude": -87.278672
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Nototriton\/Nototriton-oreadorum#0",
    "latitude": 15.66,
    "longitude": -86.79
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Oedipina\/Oedipina-berlini#0",
    "latitude": 10.0575,
    "longitude": -83.54862
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Oedipina\/Oedipina-capitalina#0",
    "latitude": 14.130555555556,
    "longitude": -87.241111111111
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Thorius\/Thorius-longicaudus#0",
    "latitude": 16.459722222222,
    "longitude": -97.007222222222
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Thorius\/Thorius-pinicola#0",
    "latitude": 16.119722222222,
    "longitude": -96.490555555556
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Thorius\/Thorius-tlaxiacus#0",
    "latitude": 17.148333333333,
    "longitude": -97.62
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Pleurodelinae\/Pachytriton\/Pachytriton-wuguanfui#0",
    "latitude": 24.64,
    "longitude": 111.53
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Pleurodelinae\/Paramesotriton\/Paramesotriton-aurantius#0",
    "latitude": 27.2,
    "longitude": 119.99
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Salamandrinae\/Lyciasalamandra\/Lyciasalamandra-billae#6",
    "latitude": 36.866666666667,
    "longitude": 30.433333333333
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Herpelidae\/Boulengerula\/Boulengerula-spawlsi#0",
    "latitude": 0.37980555555556,
    "longitude": 38.013194444444
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Indotyphlidae\/Hypogeophis\/Hypogeophis-pti#0",
    "latitude": -4.3346944444444,
    "longitude": 55.74025
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Capensibufo\/Capensibufo-deceptus#0",
    "latitude": -33.78419,
    "longitude": 19.19886
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Capensibufo\/Capensibufo-magistratus#0",
    "latitude": -34.048857,
    "longitude": 19.008481
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Capensibufo\/Capensibufo-selenophos#0",
    "latitude": -34.372889,
    "longitude": 19.326712
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Pelophryne\/Pelophryne-penrissenensis#0",
    "latitude": 1.1225,
    "longitude": 110.22861111111
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Sigalegalephrynus\/Sigalegalephrynus-mandailinguensis#0",
    "latitude": 0.70164,
    "longitude": 99.55262
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Sigalegalephrynus\/Sigalegalephrynus-minangkabauensis#0",
    "latitude": -2.26013,
    "longitude": 101.49512
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Centroleninae\/Nymphargus\/Nymphargus-caucanus#0",
    "latitude": 2.5363611111111,
    "longitude": -76.967833333333
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Hyalinobatrachinae\/Hyalinobatrachium\/Hyalinobatrachium-yaku#0",
    "latitude": -1.4696,
    "longitude": -77.2784
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Limnonectes\/Limnonectes-kong#0",
    "latitude": 1.60685,
    "longitude": 110.18998333333
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Limnonectes\/Limnonectes-quangninhensis#0",
    "latitude": 21.52975,
    "longitude": 107.64941666667
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Minervarya\/Minervarya-cepfi#0",
    "latitude": 15.954613888889,
    "longitude": 3.9986027777778
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Minervarya\/Minervarya-kadar#0",
    "latitude": 10.283805555556,
    "longitude": 6.6851111111111
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Minervarya\/Minervarya-neilcoxi#0",
    "latitude": 10.410138888889,
    "longitude": 6.7679444444444
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Sphaerotheca\/Sphaerotheca-pashchima#0",
    "latitude": 18.35,
    "longitude": 74.041
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Aplastodiscus\/Aplastodiscus-lutzorum#0",
    "latitude": -14.160833333333,
    "longitude": -47.581944444444
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Dendropsophinae\/Dendropsophus\/Dendropsophus-arndti#0",
    "latitude": -16.3596,
    "longitude": -62.0
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Dendropsophinae\/Dendropsophus\/Dendropsophus-nekronastes#0",
    "latitude": -14.700141666667,
    "longitude": -39.63
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Dendropsophinae\/Dendropsophus\/Dendropsophus-vraemi#0",
    "latitude": -12.9296,
    "longitude": -73.533
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Hylinae\/Charadrahyla\/Charadrahyla-esperancensis#0",
    "latitude": 17.6236,
    "longitude": -96.3652
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Hylinae\/Quilticohyla\/Quilticohyla-zoque#0",
    "latitude": 17.180666666667,
    "longitude": -94.5855
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Phyllodytes\/Phyllodytes-megatympanum#0",
    "latitude": -15.066666666667,
    "longitude": -39.05
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Sphaenorhynchus\/Sphaenorhynchus-cammaeus#0",
    "latitude": -9.23955,
    "longitude": -36.428791666667
  },
  {
    "name_id": "Amphibia\/Anura\/Hylodidae\/Hylodes\/Hylodes-caete#0",
    "latitude": -23.9991,
    "longitude": -46.738247222222
  },
  {
    "name_id": "Amphibia\/Anura\/Hyperoliidae\/Hyperoliinae\/Hyperolius\/Hyperolius-ruvuensis#0",
    "latitude": -7.0391944444444,
    "longitude": 38.916194444444
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Mantellinae\/Gephyromantis\/Gephyromantis-angano#0",
    "latitude": -14.41949,
    "longitude": 48.71938
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Mantellinae\/Gephyromantis\/Gephyromantis-tohatra#0",
    "latitude": -14.444,
    "longitude": 49.73791
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-maoershanensis#0",
    "latitude": 25.9116,
    "longitude": 110.4652
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-puhoatensis#0",
    "latitude": 19.6983,
    "longitude": 104.7373
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Megophryinae\/Megophrys\/Megophrys-liboensis#0",
    "latitude": 25.4731,
    "longitude": 8.1054
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Megophryinae\/Megophrys\/Megophrys-lishuiensis#0",
    "latitude": 28.1977,
    "longitude": 119.8173
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Megophryinae\/Megophrys\/Megophrys-rubrimera#1",
    "latitude": 22.38205,
    "longitude": 103.78745
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Choerophryne\/Choerophryne-bisyllaba#0",
    "latitude": -6.08165,
    "longitude": 146.57225
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Choerophryne\/Choerophryne-crucifer#0",
    "latitude": -6.3683166666667,
    "longitude": 143.2229
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Choerophryne\/Choerophryne-multisyllaba#1",
    "latitude": -6.44144,
    "longitude": 143.2184
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-brunnea#0",
    "latitude": -9.1951,
    "longitude": 149.1616
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Cophylinae\/Rhombophryne\/Rhombophryne-diadema#0",
    "latitude": -13.6817,
    "longitude": 49.4411
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Cophylinae\/Rhombophryne\/Rhombophryne-regalis#0",
    "latitude": -14.5433,
    "longitude": 49.43
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Gastrophryninae\/Chiasmocleis\/Chiasmocleis-altomontana#1",
    "latitude": -22.806111111111,
    "longitude": -44.368888888889
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Gastrophryninae\/Chiasmocleis\/Chiasmocleis-migueli#0",
    "latitude": -11.348611111111,
    "longitude": -37.445555555556
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Gastrophryninae\/Chiasmocleis\/Chiasmocleis-veracruz#0",
    "latitude": -16.5366,
    "longitude": -39.1247
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Gastrophryninae\/Elachistocleis\/Elachistocleis-corumbaensis#0",
    "latitude": -19.266666666667,
    "longitude": -57.633333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Kalophryninae\/Kalophrynus\/Kalophrynus-kiewi#0",
    "latitude": 3.3166666666667,
    "longitude": 101.75
  },
  {
    "name_id": "Amphibia\/Anura\/Nyctibatrachidae\/Nyctibatrachinae\/Nyctibatrachus\/Nyctibatrachus-athirappillyensis#0",
    "latitude": 10.281388888889,
    "longitude": 6.6904444444444
  },
  {
    "name_id": "Amphibia\/Anura\/Nyctibatrachidae\/Nyctibatrachinae\/Nyctibatrachus\/Nyctibatrachus-manalari#1",
    "latitude": 9.5748083333333,
    "longitude": 7.3361861111111
  },
  {
    "name_id": "Amphibia\/Anura\/Nyctibatrachidae\/Nyctibatrachinae\/Nyctibatrachus\/Nyctibatrachus-pulivijayani#0",
    "latitude": 8.6783333333333,
    "longitude": 7.1940555555556
  },
  {
    "name_id": "Amphibia\/Anura\/Nyctibatrachidae\/Nyctibatrachinae\/Nyctibatrachus\/Nyctibatrachus-radcliffei#0",
    "latitude": 11.230055555556,
    "longitude": 6.61725
  },
  {
    "name_id": "Amphibia\/Anura\/Nyctibatrachidae\/Nyctibatrachinae\/Nyctibatrachus\/Nyctibatrachus-robinmoorei#0",
    "latitude": 8.5507222222222,
    "longitude": 77.391555555556
  },
  {
    "name_id": "Amphibia\/Anura\/Nyctibatrachidae\/Nyctibatrachinae\/Nyctibatrachus\/Nyctibatrachus-sabarimalai#0",
    "latitude": 9.4048888888889,
    "longitude": 7.0698888888889
  },
  {
    "name_id": "Amphibia\/Anura\/Nyctibatrachidae\/Nyctibatrachinae\/Nyctibatrachus\/Nyctibatrachus-webilla#0",
    "latitude": 10.131111111111,
    "longitude": 7.0005
  },
  {
    "name_id": "Amphibia\/Anura\/Odontophrynidae\/Odontophrynus\/Odontophrynus-juquinha#0",
    "latitude": -19.258055555556,
    "longitude": -43.534722222222
  },
  {
    "name_id": "Amphibia\/Anura\/Phrynobatrachidae\/Phrynobatrachus\/Phrynobatrachus-discogularis#0",
    "latitude": -8.116667,
    "longitude": 35.916667
  },
  {
    "name_id": "Amphibia\/Anura\/Phyllomedusidae\/Phyllomedusa\/Phyllomedusa-chaparroi#0",
    "latitude": -6.6224166666667,
    "longitude": -76.614972222222
  },
  {
    "name_id": "Amphibia\/Anura\/Phyllomedusidae\/Pithecopus\/Pithecopus-araguaius#1",
    "latitude": -15.914277777778,
    "longitude": -52.267091666667
  },
  {
    "name_id": "Amphibia\/Anura\/Ptychadenidae\/Ptychadena\/Ptychadena-amharensis#0",
    "latitude": 10.190778,
    "longitude": 38.140073
  },
  {
    "name_id": "Amphibia\/Anura\/Ptychadenidae\/Ptychadena\/Ptychadena-baroensis#0",
    "latitude": 8.26557,
    "longitude": 33.94688
  },
  {
    "name_id": "Amphibia\/Anura\/Ptychadenidae\/Ptychadena\/Ptychadena-goweri#0",
    "latitude": 6.71779,
    "longitude": 39.72572
  },
  {
    "name_id": "Amphibia\/Anura\/Ptychadenidae\/Ptychadena\/Ptychadena-levenorum#0",
    "latitude": 6.71645,
    "longitude": 39.72484
  },
  {
    "name_id": "Amphibia\/Anura\/Ptychadenidae\/Ptychadena\/Ptychadena-neumanni#7",
    "latitude": 8.26875,
    "longitude": 33.94616
  },
  {
    "name_id": "Amphibia\/Anura\/Ptychadenidae\/Ptychadena\/Ptychadena-nuerensis#2",
    "latitude": 8.26875,
    "longitude": 33.94616
  },
  {
    "name_id": "Amphibia\/Anura\/Ptychadenidae\/Ptychadena\/Ptychadena-nuerensis#3",
    "latitude": 8.26875,
    "longitude": 33.94616
  },
  {
    "name_id": "Amphibia\/Anura\/Pyxicephalidae\/Cacosterninae\/Arthroleptella\/Arthroleptella-atermina#0",
    "latitude": -34.016666666667,
    "longitude": 19.6
  },
  {
    "name_id": "Amphibia\/Anura\/Pyxicephalidae\/Cacosterninae\/Arthroleptella\/Arthroleptella-draconella#0",
    "latitude": -33.8,
    "longitude": 19.016666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Pyxicephalidae\/Cacosterninae\/Arthroleptella\/Arthroleptella-kogelbergensis#0",
    "latitude": -34.333333333333,
    "longitude": 18.916666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Abavorana\/Abavorana-nazgul#0",
    "latitude": 5.7953166666667,
    "longitude": 100.43703333333
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Amolops\/Amolops-xinduqiao#1",
    "latitude": 30.14182,
    "longitude": 101.50044
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Nidirana\/Nidirana-nankunensis#0",
    "latitude": 23.636666666667,
    "longitude": 113.85416666667
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Rana\/Rana-dabieshanensis#0",
    "latitude": 30.971366666667,
    "longitude": 116.06996666667
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Rana\/Rana-luanchuanensis#0",
    "latitude": 33.8,
    "longitude": 111.8
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Sanguirana\/Sanguirana-acai#0",
    "latitude": 9.2667,
    "longitude": 123.2062
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Gracixalus\/Gracixalus-jinggangensis#0",
    "latitude": 26.491258333333,
    "longitude": 114.07581666667
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Philautus\/Philautus-amabilis#0",
    "latitude": 4.77137,
    "longitude": 96.81026
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Philautus\/Philautus-polymorphus#1",
    "latitude": -4.22595,
    "longitude": 103.41623
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Philautus\/Philautus-thamyridion#1",
    "latitude": -5.51563,
    "longitude": 105.07667
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Philautus\/Philautus-ventrimaculatus#0",
    "latitude": -4.03059,
    "longitude": 103.13846
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Rhacophorus\/Rhacophorus-hoabinhensis#0",
    "latitude": 20.733666666667,
    "longitude": 104.8895
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Zhangixalus\/Zhangixalus-lishuiensis#0",
    "latitude": 28.1977,
    "longitude": 119.8173
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Zhangixalus\/Zhangixalus-zhoukaiyae#0",
    "latitude": 31.2953,
    "longitude": 115.7252
  },
  {
    "name_id": "Amphibia\/Caudata\/Hynobiidae\/Hynobiinae\/Hynobius\/Hynobius-ikioi#2",
    "latitude": 32.566666666667,
    "longitude": 131.1
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Chiropterotriton\/Chiropterotriton-chico#0",
    "latitude": 20.184154,
    "longitude": -98.734437
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Eurycea\/Eurycea-hillisi#0",
    "latitude": 30.433486,
    "longitude": -85.171278
  },
  {
    "name_id": "Amphibia\/Caudata\/Plethodontidae\/Hemidactyliinae\/Isthmura\/Isthmura-corrugata#0",
    "latitude": 19.483333333333,
    "longitude": -97.033333333333
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Pleurodelinae\/Tylototriton\/Tylototriton-anhuiensis#0",
    "latitude": 30.989497222222,
    "longitude": 116.10379444444
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Caeciliidae\/Caecilia\/Caecilia-museugoeldi#0",
    "latitude": 4.54465,
    "longitude": -52.15258
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Indotyphlidae\/Hypogeophis\/Hypogeophis-montanus#0",
    "latitude": -4.6454444444444,
    "longitude": 55.43425
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Rhinatrematidae\/Rhinatrema\/Rhinatrema-gilbertogili#0",
    "latitude": -1.6666666666667,
    "longitude": -56.45
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Rhinatrematidae\/Rhinatrema\/Rhinatrema-uaiuai#0",
    "latitude": 1.2854194444444,
    "longitude": -58.6959
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Ansonia\/Ansonia-phuketensis#0",
    "latitude": 7.9333333333333,
    "longitude": 98.316666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Ansonia\/Ansonia-pilokensis#0",
    "latitude": 14.683333333333,
    "longitude": 98.4
  },
  {
    "name_id": "Amphibia\/Anura\/Ceratobatrachidae\/Ceratobatrachinae\/Cornufer\/Cornufer-exedrus#1",
    "latitude": -5.3437166666667,
    "longitude": 151.31455
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Limnonectes\/Limnonectes-coffeatus#0",
    "latitude": 15.06237,
    "longitude": 6.21075
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Minervarya\/Minervarya-jhilmilensis#0",
    "latitude": 29.812527777778,
    "longitude": 78.187888888889
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Minervarya\/Minervarya-kalinga#0",
    "latitude": 18.94162,
    "longitude": 84.33361
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Minervarya\/Minervarya-krishnan#0",
    "latitude": 14.219698,
    "longitude": 74.809669
  },
  {
    "name_id": "Amphibia\/Anura\/Hemiphractidae\/Hemiphractinae\/Fritziana\/Fritziana-izecksohni#0",
    "latitude": -22.460305555556,
    "longitude": -43.027083333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hemiphractidae\/Hemiphractinae\/Fritziana\/Fritziana-mitus#0",
    "latitude": -27.741666666667,
    "longitude": -61.341111111111
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Boana\/Boana-caiapo#0",
    "latitude": -15.894166666667,
    "longitude": -51.823055555556
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Cophomantinae\/Boana\/Boana-icamiaba#0",
    "latitude": -2.6094444444444,
    "longitude": -56.196111111111
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Dendropsophinae\/Dendropsophus\/Dendropsophus-kamagarini#0",
    "latitude": -12.8092,
    "longitude": -69.3182
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Dendropsophinae\/Dendropsophus\/Dendropsophus-kubricki#1",
    "latitude": -7.1914,
    "longitude": -73.9781
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Hylinae\/Hyla\/Hyla-perrini#0",
    "latitude": 46.1361,
    "longitude": 8.8206
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Phyllodytes\/Phyllodytes-praeceptor#0",
    "latitude": -12.869436,
    "longitude": -39.461494
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Ololygon\/Ololygon-goya#0",
    "latitude": -14.684166666667,
    "longitude": -46.301944444444
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Scinax\/Scinax-ruberoculatus#0",
    "latitude": -5.9444444444444,
    "longitude": -62.501111111111
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Scinax\/Scinax-strussmannae#0",
    "latitude": -5.9444444444444,
    "longitude": -62.501111111111
  },
  {
    "name_id": "Amphibia\/Anura\/Hyperoliidae\/Hyperoliinae\/Hyperolius\/Hyperolius-stictus#0",
    "latitude": -10.761611111111,
    "longitude": 0.42936111111111
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Pseudopaludicola\/Pseudopaludicola-florencei#0",
    "latitude": -12.806188888889,
    "longitude": -41.333186111111
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Pseudopaludicola\/Pseudopaludicola-matuta#1",
    "latitude": -18.768777777778,
    "longitude": -44.447416666667
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Pseudopaludicola\/Pseudopaludicola-restinga#0",
    "latitude": -20.228166666667,
    "longitude": -40.334333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Boophinae\/Boophis\/Boophis-masoala#0",
    "latitude": -15.7247,
    "longitude": 49.9599
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Mantellinae\/Gephyromantis\/Gephyromantis-saturnini#0",
    "latitude": -14.4133,
    "longitude": 48.7175
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Mantellinae\/Guibemantis\/Guibemantis-albomaculatus#1",
    "latitude": -12.527,
    "longitude": 49.172
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Mantellinae\/Guibemantis\/Guibemantis-milingilingy#0",
    "latitude": -14.44755,
    "longitude": 49.73365
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-bondangensis#0",
    "latitude": -0.37333333333333,
    "longitude": 114.53666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-macrops#0",
    "latitude": 12.879722222222,
    "longitude": 108.83086111111
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-purpurus#0",
    "latitude": 24.625922222222,
    "longitude": 97.619975
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-rowleyae#0",
    "latitude": 16.12754,
    "longitude": 108.24634
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-wuhuangmontis#0",
    "latitude": 22.141880555556,
    "longitude": 109.41219444444
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-yingjiangensis#0",
    "latitude": 24.625922222222,
    "longitude": 97.619975
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Megophryinae\/Megophrys\/Megophrys-fansipanensis#0",
    "latitude": 22.32827,
    "longitude": 103.78184
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Megophryinae\/Megophrys\/Megophrys-flavipunctata#0",
    "latitude": 25.443611111111,
    "longitude": 91.746111111111
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Megophryinae\/Megophrys\/Megophrys-himalayana#0",
    "latitude": 27.082366666667,
    "longitude": 92.580616666667
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Megophryinae\/Megophrys\/Megophrys-hoanglienensis#0",
    "latitude": 22.33518,
    "longitude": 103.77947
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Megophryinae\/Megophrys\/Megophrys-lancip#0",
    "latitude": -5.31359,
    "longitude": 104.53151
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Megophryinae\/Megophrys\/Megophrys-oreocrypta#0",
    "latitude": 25.508166666667,
    "longitude": 90.229116666667
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Megophryinae\/Megophrys\/Megophrys-periosa#0",
    "latitude": 28.209433333333,
    "longitude": 94.986116666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Choerophryne\/Choerophryne-alainduboisi#0",
    "latitude": -6.3683166666667,
    "longitude": 143.2229
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Choerophryne\/Choerophryne-pipiens#0",
    "latitude": -2.5726666666667,
    "longitude": 138.71716666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-albitympanum#0",
    "latitude": -2.5726666666667,
    "longitude": 138.71716666667
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Siamophryne\/Siamophryne-troglodytes#0",
    "latitude": 14.466666666667,
    "longitude": 98.85
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Vietnamophryne\/Vietnamophryne-inexpectata#0",
    "latitude": 14.506,
    "longitude": 108.542
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Vietnamophryne\/Vietnamophryne-occidentalis#0",
    "latitude": 20.344,
    "longitude": 99.83
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Vietnamophryne\/Vietnamophryne-orlovi#0",
    "latitude": 22.6,
    "longitude": 105.884
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Microhylinae\/Microhyla\/Microhyla-beilunensis#0",
    "latitude": 29.86667,
    "longitude": 121.55
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Microhylinae\/Microhyla\/Microhyla-darreli#0",
    "latitude": 8.4506,
    "longitude": 76.9752
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Microhylinae\/Microhyla\/Microhyla-kodial#0",
    "latitude": 12.9518,
    "longitude": 74.8089
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Pelodryadinae\/Nyctimystes\/Nyctimystes-nullicedens#0",
    "latitude": -9.4625,
    "longitude": 147.9218
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Pelodryadinae\/Nyctimystes\/Nyctimystes-pallidofemora#0",
    "latitude": -9.429,
    "longitude": 147.5932
  },
  {
    "name_id": "Amphibia\/Anura\/Phrynobatrachidae\/Phrynobatrachus\/Phrynobatrachus-tanoeensis#0",
    "latitude": 5.2336111111111,
    "longitude": -2.8863888888889
  },
  {
    "name_id": "Amphibia\/Anura\/Phyllomedusidae\/Phasmahyla\/Phasmahyla-lisbella#0",
    "latitude": -21.33545,
    "longitude": -42.204277777778
  },
  {
    "name_id": "Amphibia\/Anura\/Pyxicephalidae\/Cacosterninae\/Nothophryne\/Nothophryne-baylissi#0",
    "latitude": -15.3615,
    "longitude": 37.07211
  },
  {
    "name_id": "Amphibia\/Anura\/Pyxicephalidae\/Cacosterninae\/Nothophryne\/Nothophryne-inagoensis#0",
    "latitude": -15.045,
    "longitude": 37.39611
  },
  {
    "name_id": "Amphibia\/Anura\/Pyxicephalidae\/Cacosterninae\/Nothophryne\/Nothophryne-ribauensis#0",
    "latitude": -14.91186,
    "longitude": 38.31623
  },
  {
    "name_id": "Amphibia\/Anura\/Pyxicephalidae\/Cacosterninae\/Nothophryne\/Nothophryne-unilurio#0",
    "latitude": -12.82178,
    "longitude": 39.68658
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Amolops\/Amolops-gerutu#0",
    "latitude": 5.5931861111111,
    "longitude": 102.612675
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Amolops\/Amolops-wenshanensis#0",
    "latitude": 23.362,
    "longitude": 104.839
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Amolops\/Amolops-yunkaiensis#0",
    "latitude": 21.893194444444,
    "longitude": 111.48475
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Pulchrana\/Pulchrana-fantastica#1",
    "latitude": 4.35868,
    "longitude": 97.24404
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Sumaterana\/Sumaterana-dabulescens#1",
    "latitude": 4.36482,
    "longitude": 97.24783
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Sumaterana\/Sumaterana-montana#0",
    "latitude": -2.88413,
    "longitude": 102.13073
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Gracixalus\/Gracixalus-guangdongensis#0",
    "latitude": 22.292019444444,
    "longitude": 111.21400555556
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Gracixalus\/Gracixalus-tianlinensis#0",
    "latitude": 24.4883,
    "longitude": 106.3947
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Nasutixalus\/Nasutixalus-yingjiangensis#0",
    "latitude": 24.622663888889,
    "longitude": 97.620358333333
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Theloderma\/Theloderma-auratum#0",
    "latitude": 14.505472222222,
    "longitude": 108.54166666667
  },
  {
    "name_id": "Amphibia\/Caudata\/Hynobiidae\/Hynobiinae\/Hynobius\/Hynobius-tosashimizuensis#1",
    "latitude": 32.783333333333,
    "longitude": 132.78333333333
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Pleurodelinae\/Tylototriton\/Tylototriton-ngarsuensis#0",
    "latitude": 21.15364,
    "longitude": 96.4366
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Salamandrinae\/Lyciasalamandra\/Lyciasalamandra-fazilae#3",
    "latitude": 36.833333333333,
    "longitude": 28.616666666667
  },
  {
    "name_id": "Amphibia\/Gymnophiona\/Caeciliidae\/Caecilia\/Caecilia-pulchraserrana#1",
    "latitude": 6.5691388888889,
    "longitude": -73.572277777778
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Amazophrynella\/Amazophrynella-bilinguis#0",
    "latitude": -2.5801111111111,
    "longitude": -54.371277777778
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Bufotes\/Bufotes-cypriensis#0",
    "latitude": 34.752,
    "longitude": 33.102
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Dendrophryniscus\/Dendrophryniscus-davori#0",
    "latitude": -22.35,
    "longitude": -42.583333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Dendrophryniscus\/Dendrophryniscus-haddadi#0",
    "latitude": -23.35,
    "longitude": -45.133333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Dendrophryniscus\/Dendrophryniscus-izecksohni#0",
    "latitude": -22.633333333333,
    "longitude": -44.566666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Dendrophryniscus\/Dendrophryniscus-jureia#1",
    "latitude": -24.366666666667,
    "longitude": -47.066666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Bufonidae\/Pelophryne\/Pelophryne-ingeri#0",
    "latitude": 3.4,
    "longitude": 101.76666666667
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Centroleninae\/Nymphargus\/Nymphargus-manduriacu#0",
    "latitude": 0.310755,
    "longitude": -78.8569
  },
  {
    "name_id": "Amphibia\/Anura\/Centrolenidae\/Hyalinobatrachinae\/Hyalinobatrachium\/Hyalinobatrachium-adespinosai#0",
    "latitude": -1.3447,
    "longitude": -78.1814
  },
  {
    "name_id": "Amphibia\/Anura\/Ceratobatrachidae\/Liuraninae\/Liurana\/Liurana-vallecula#0",
    "latitude": 29.1776,
    "longitude": 95.0057
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Fejervarya\/Fejervarya-kupitzi#0",
    "latitude": 22.317863,
    "longitude": 94.479012
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Limnonectes\/Limnonectes-savan#0",
    "latitude": 17.04444,
    "longitude": 106.12622
  },
  {
    "name_id": "Amphibia\/Anura\/Dicroglossidae\/Dicroglossinae\/Nanorana\/Nanorana-zhaoermii#0",
    "latitude": 28.6247,
    "longitude": 3.3938
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Hylinae\/Hyla\/Hyla-carthaginiensis#1",
    "latitude": 36.868,
    "longitude": 8.728
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Lophyohylinae\/Osteocephalus\/Osteocephalus-omega#0",
    "latitude": 1.0824444444444,
    "longitude": -76.604583333333
  },
  {
    "name_id": "Amphibia\/Anura\/Hylidae\/Scinaxinae\/Ololygon\/Ololygon-garibaldiae#0",
    "latitude": -26.848888888889,
    "longitude": -50.653333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leiuperinae\/Pseudopaludicola\/Pseudopaludicola-jazmynmcdonaldae#3",
    "latitude": -9.4155555555556,
    "longitude": -49.974444444444
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leptodactylinae\/Adenomera\/Adenomera-chicomendesi#0",
    "latitude": -9.955752,
    "longitude": -67.870476
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leptodactylinae\/Adenomera\/Adenomera-kweti#0",
    "latitude": -27.82112,
    "longitude": -48.9034
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leptodactylinae\/Adenomera\/Adenomera-phonotriccus#0",
    "latitude": -5.70228,
    "longitude": -48.24949
  },
  {
    "name_id": "Amphibia\/Anura\/Leptodactylidae\/Leptodactylinae\/Leptodactylus\/Leptodactylus-apepyta#0",
    "latitude": -24.545583333333,
    "longitude": -60.642583333333
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Boophinae\/Boophis\/Boophis-nauticus#0",
    "latitude": -12.795555555556,
    "longitude": 45.121944444444
  },
  {
    "name_id": "Amphibia\/Anura\/Mantellidae\/Mantellinae\/Blommersia\/Blommersia-transmarina#0",
    "latitude": -12.807222222222,
    "longitude": 45.154722222222
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-namdongensis#0",
    "latitude": 20.329138888889,
    "longitude": 104.91825
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Leptobrachella\/Leptobrachella-shangsiensis#1",
    "latitude": 22.455,
    "longitude": 107.048
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Leptobrachiinae\/Scutiger\/Scutiger-tengchongensis#0",
    "latitude": 25.579311111111,
    "longitude": 98.752416666667
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Megophryinae\/Megophrys\/Megophrys-angka#0",
    "latitude": 18.556187,
    "longitude": 98.482229
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Megophryinae\/Megophrys\/Megophrys-kalimantanensis#0",
    "latitude": -2.684389,
    "longitude": 115.615167
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Megophryinae\/Megophrys\/Megophrys-leishanensis#0",
    "latitude": 26.35888,
    "longitude": 108.19055
  },
  {
    "name_id": "Amphibia\/Anura\/Megophryidae\/Megophryinae\/Megophrys\/Megophrys-ombrophila#0",
    "latitude": 27.73598,
    "longitude": 17.64081
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Austrochaperina\/Austrochaperina-beehleri#0",
    "latitude": -6.2763,
    "longitude": 142.1022
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Austrochaperina\/Austrochaperina-brachypus#0",
    "latitude": -6.239,
    "longitude": 143.121
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Austrochaperina\/Austrochaperina-fulva#0",
    "latitude": -5.9018,
    "longitude": 142.436
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Callulops\/Callulops-bicolor#0",
    "latitude": -9.698,
    "longitude": 149.261
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Callulops\/Callulops-stellatus#0",
    "latitude": -9.2238,
    "longitude": 149.1561
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Callulops\/Callulops-taxispilotus#0",
    "latitude": -6.7892,
    "longitude": 144.992
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-cateae#0",
    "latitude": -6.4409,
    "longitude": 143.2256
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Cophixalus\/Cophixalus-hannahae#0",
    "latitude": -6.0205,
    "longitude": 142.5473
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Asterophryinae\/Oreophryne\/Oreophryne-nicolasi#0",
    "latitude": -6.0205,
    "longitude": 142.5473
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Microhylinae\/Microhyla\/Microhyla-aurantiventris#0",
    "latitude": 14.53994,
    "longitude": 108.45104
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Microhylinae\/Microhyla\/Microhyla-eos#0",
    "latitude": 27.539027777778,
    "longitude": 96.488222222222
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Microhylinae\/Microhyla\/Microhyla-fanjingshanensis#0",
    "latitude": 27.9153,
    "longitude": 108.61026
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Microhylinae\/Microhyla\/Microhyla-gadjahmadai#0",
    "latitude": -3.452464,
    "longitude": 102.650485
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Microhylinae\/Micryletta\/Micryletta-aishani#0",
    "latitude": 24.976111111111,
    "longitude": 2.7958333333333
  },
  {
    "name_id": "Amphibia\/Anura\/Microhylidae\/Microhylinae\/Mysticellus\/Mysticellus-franki#0",
    "latitude": 11.538611111111,
    "longitude": 6.0538888888889
  },
  {
    "name_id": "Amphibia\/Anura\/Nyctibatrachidae\/Astrobatrachinae\/Astrobatrachus\/Astrobatrachus-kurichiyana#0",
    "latitude": 11.602807,
    "longitude": 5.968025
  },
  {
    "name_id": "Amphibia\/Anura\/Pelobatidae\/Pelobates\/Pelobates-balcanicus#3",
    "latitude": 38.1239,
    "longitude": 21.3858
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Litoriinae\/Litoria\/Litoria-pinocchio#0",
    "latitude": -2.59,
    "longitude": 138.72
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Litoriinae\/Litoria\/Litoria-vivissimia#1",
    "latitude": -5.947,
    "longitude": 142.7455
  },
  {
    "name_id": "Amphibia\/Anura\/Pelodryadidae\/Pelodryadinae\/Nyctimystes\/Nyctimystes-pterodactyla#0",
    "latitude": -5.729,
    "longitude": 142.263
  },
  {
    "name_id": "Amphibia\/Anura\/Pyxicephalidae\/Cacosterninae\/Tomopterna\/Tomopterna-branchi#0",
    "latitude": -29.67791,
    "longitude": 17.05214
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Amolops\/Amolops-ottorum#0",
    "latitude": 21.5826,
    "longitude": 104.286
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Amolops\/Amolops-pallasitatus#0",
    "latitude": 27.92,
    "longitude": 87.47
  },
  {
    "name_id": "Amphibia\/Anura\/Ranidae\/Amolops\/Amolops-shuichengicus#0",
    "latitude": 26.47,
    "longitude": 104.8
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Kurixalus\/Kurixalus-absconditus#0",
    "latitude": 0.69624722222222,
    "longitude": 112.18076111111
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Polypedates\/Polypedates-bengalensis#0",
    "latitude": 19.0,
    "longitude": 88.144078
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Pseudophilautus\/Pseudophilautus-conniffae#0",
    "latitude": 6.166,
    "longitude": 80.433
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Raorchestes\/Raorchestes-cangyuanensis#0",
    "latitude": 23.22542,
    "longitude": 99.22509
  },
  {
    "name_id": "Amphibia\/Anura\/Rhacophoridae\/Rhacophorinae\/Zhangixalus\/Zhangixalus-pachyproctus#0",
    "latitude": 21.614869444444,
    "longitude": 101.58525555556
  },
  {
    "name_id": "Amphibia\/Caudata\/Hynobiidae\/Hynobiinae\/Hynobius\/Hynobius-guttatus#0",
    "latitude": 34.966666666667,
    "longitude": 136.35
  },
  {
    "name_id": "Amphibia\/Caudata\/Hynobiidae\/Hynobiinae\/Hynobius\/Hynobius-kuishiensis#0",
    "latitude": 33.666666666667,
    "longitude": 133.5
  },
  {
    "name_id": "Amphibia\/Caudata\/Hynobiidae\/Hynobiinae\/Hynobius\/Hynobius-oyamai#0",
    "latitude": 33.797777777778,
    "longitude": 130.795
  },
  {
    "name_id": "Amphibia\/Caudata\/Hynobiidae\/Hynobiinae\/Hynobius\/Hynobius-sematonotos#0",
    "latitude": 34.508611111111,
    "longitude": 132.71833333333
  },
  {
    "name_id": "Amphibia\/Caudata\/Hynobiidae\/Hynobiinae\/Hynobius\/Hynobius-tsurugiensis#0",
    "latitude": 33.85,
    "longitude": 134.08333333333
  },
  {
    "name_id": "Amphibia\/Caudata\/Salamandridae\/Pleurodelinae\/Tylototriton\/Tylototriton-kachinorum#0",
    "latitude": 25.09,
    "longitude": 96.28
  }
]';

$data_obj = json_decode($json);

$count = 1;

foreach ($data_obj as $record)
{
	
	$obj = null;
	
	$url = 'http://api.geonames.org/countryCodeJSON?lat=' . $record->latitude . '&lng=' . $record->longitude  . '&username=rdmpage';

	$json = get($url);
	$obj = json_decode($json);
	
	//print_r($obj);
	
	if (isset($obj->countryCode))
	{
		$sql = 'UPDATE names SET countryCode="' . $obj->countryCode . '" WHERE name_id="' . $record->name_id . '";' ;
		echo $sql . "\n";
	}
	
	
	// Give server a break every 10 items
	if (($count++ % 5) == 0)
	{
		$rand = rand(1000000, 3000000);
		echo "\n-- ...sleeping for " . round(($rand / 1000000),2) . ' seconds' . "\n\n";
		usleep($rand);
	}	
}

?>
