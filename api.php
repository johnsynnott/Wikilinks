<?php
	header("Content-Type: text/plain");
	$p = explode('|', $_GET['p']);
	foreach ($p as $page) {
		print_r(json_decode(file_get_contents('http://en.wikipedia.org/w/api.php?format=json&action=query&titles='.$page.'&prop=links&pllimit=500'),true));
	}


	function extract_titles($array) {
		$link_titles = array();
		foreach ($array as $key => $value) {
			if(is_array($value)) {
				extract_titles($value);
			} else {
				if($key == "title") {
					#echo $key." = ".$value."\n";
					array_push($link_titles, $value);
				}
			}
		}
		#print_r($link_titles);
		return $link_titles;
	}

	// currently just using one hardcoded test page
	$test_json = json_decode(file_get_contents('http://en.wikipedia.org/w/api.php?format=json&action=query&titles=Hello&prop=links&pllimit=500'),true);
	print_r($test_json);

	$extracted_titles = extract_titles($test_json);
	print_r($extracted_titles);

	function generate_wikipedia_links($titles) {
		$links = array();
		$prefix = "http://en.wikipedia.org/wiki/";
		foreach ($titles as $title) {
			$suffix = str_replace(" ", "_", $title);
			$link = $prefix.$suffix;
			array_push($links, $link);
		}
		#print_r($links);
		return $links;
	}

	$generated_links = generate_wikipedia_links($extracted_titles);
	print_r($generated_links);
?>