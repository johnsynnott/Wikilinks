<?php
	header("Content-Type: text/plain");
	$p = explode('|', $_POST['pages']);
	$titles_to_compare = array();
	foreach ($p as $page) {
		$page = str_replace(' ', '_', $page);
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
	// Create the results string to be returned by the AJAX request.
	$results = create_results($common_links,$common_titles);
	// Print out the results.
	print_r($results);


	function extract_titles($array) {
		$link_titles = array();
		foreach ($array as $key => $value) {
			if(is_array($value)) {
				$rec_arr = extract_titles($value);
				foreach ($rec_arr as $elt) {
					array_push($link_titles, $elt);
				}
			} else {
				if($key == 'title') {
					array_push($link_titles, $value);
				}
			}
		}
		return $link_titles;
	}

	function generate_wikipedia_links($titles) {
		$links = array();
		$prefix = 'http://en.wikipedia.org/wiki/';
		foreach ($titles as $title) {
			$suffix = str_replace(' ', '_', $title);
			$link = $prefix.$suffix;
			array_push($links, $link);
		}
		return $links;
	}

	function compare_titles($page_titles) {
		$intersection = call_user_func_array('array_intersect', $page_titles);
		$uniques = array_unique($intersection);
		asort($uniques);
		return array_values($uniques);
	}

	function create_results($common_links,$common_titles) {

		$btn_colors = array("btn-primary", "btn-success", "btn-info", "btn-warning", "btn-danger");

		$results = '';
		foreach($common_links as $index => $link) {
			//$btn_color = $btn_colors[array_rand($btn_colors)];
			$btn_color = "btn-default";
			$results = $results.'<a class="btn '.$btn_color.' btn-lg common-links" target="_blank" href='.$link.'>'.$common_titles[$index].'</a>';
		}
		return $results;
	}
?>

