<?php
	header("Content-Type: text/plain");
	$raw = file_get_contents('http://en.wikipedia.org/w/api.php?format=json&action=query&titles=Robert_H._Goddard&prop=links&pllimit=500');
	print_r(json_decode($raw,true));
?>