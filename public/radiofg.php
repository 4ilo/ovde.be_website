<?php

include 'simple_html_dom.php';

$url = 'http://radiofg.be/json/gethistory';

$inhoudJson = file_get_contents($url);
$inhoudHtml = json_decode($inhoudJson);
$inhoudHtml = $inhoudHtml->{"html"};

//echo $inhoudHtml;

$html = str_get_html($inhoudHtml);

$test = $html->find("div[class=song-title]");

var_dump($test);

?>

