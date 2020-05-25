<?php 
	ini_set('max_execution_time', 3000); 
		

	$html = file_get_contents("https://www.gulfstreampark.com/Sitefinity/Public/Services/Entries/EntriesService.svc/GetEntries?d=04-23-2020&n=1");

	$pokemon_doc = new DOMDocument();

	libxml_use_internal_errors(TRUE);

	if(!empty($html)){

		$pokemon_doc->loadHTML($html);
		libxml_clear_errors();

		$pokemon_xpath = new DOMXPath($pokemon_doc);

		$titulo_liga = $pokemon_xpath->query();

		echo $titulo_liga;
	}

		