<?php
	header("Content-Type: text/plain");
	$pages = $_GET['pages'];
	$raw = file_get_contents('http://en.wikipedia.org/w/api.php?format=json&action=query&titles='.$pages.'&prop=links&pllimit=500');
	print_r(json_decode($raw,true));
?>