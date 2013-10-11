<?php
	header("Content-Type: text/plain");
	$page1 = $_GET['page1'];
	#$page2 = $_GET['page2'];
	$raw1 = file_get_contents('http://en.wikipedia.org/w/api.php?format=json&action=query&titles='.$page1.'&prop=links&pllimit=500');
	#$raw2 = file_get_contents('http://en.wikipedia.org/w/api.php?format=json&action=query&titles='.$page2.'&prop=links&pllimit=500');
	$json1 = json_decode($raw1,true));
	#$json2 = json_decode($raw2,true));
	print_r($json1);
	#print_r($json2);
?>