<?php
	header("Content-Type: text/plain");
	$p = explode('|', $_GET['p']);
	$titles_to_compare = array();
	foreach ($p as $page) {
		$titles_arr = json_decode(file_get_contents('http://en.wikipedia.org/w/api.php?format=json&action=query&titles='.$page.'&prop=links&pllimit=500'),true);

		// Extract each page's link titles from the decoded JSON
		$extracted_titles = extract_titles($titles_arr);
		// Add the array of extracted titles to an array to be compared later.
		array_push($titles_to_compare, $extracted_titles);
	}

	// Compare the array of extracted titles arrays.
	$common_titles = compare_titles($titles_to_compare);
	// Generate properly formatted Wikipedia links from the common titles.
	$common_links = generate_wikipedia_links($common_titles);
	print_r($common_links);


	function extract_titles($array) {
		$link_titles = array();
		foreach ($array as $key => $value) {
			if(is_array($value)) {
				$rec_arr = extract_titles($value);
				foreach ($rec_arr as $elt) {
					array_push($link_titles, $elt);
				}
			} else {
				if($key == "title") {
					array_push($link_titles, $value);
				}
			}
		}
		return $link_titles;
	}

	function generate_wikipedia_links($titles) {
		$links = array();
		$prefix = "http://en.wikipedia.org/wiki/";
		foreach ($titles as $title) {
			$suffix = str_replace(" ", "_", $title);
			$link = $prefix.$suffix;
			array_push($links, $link);
		}
		return $links;
	}

	function compare_titles($page_titles) {
		return call_user_func_array("array_intersect", $page_titles);
	}
?>

