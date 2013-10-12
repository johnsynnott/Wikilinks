<?php
header("Content-Type: text/plain");
$p = explode('|', $_GET['p']);
foreach ($p as $page) {
	print_r(json_decode(file_get_contents('http://en.wikipedia.org/w/api.php?format=json&action=query&titles='.$page.'&prop=links&pllimit=500'),true));
}
?>