<?php
// Escape single & double quotes
function escape($string) {
	$string = str_replace('"', '&#34;', $string);
	$string = str_replace("'", '&#39;', $string);
	return $string;
}

// change them back
function unescape($string) {
	$string = str_replace('&#34;', '"', $string);
	$string = str_replace('&#39;', "'", $string);
	return $string;
}

function escapelt($string) {
	$string = str_replace('<', '&lt;', $string);
	$string = str_replace('>', '&gt;', $string);
	return $string;
}

function cleanUp($x){
	$x = str_replace('"', '&#34;', $x);
	$x = str_replace("'", '&#39;', $x);
	$x = str_replace("/", "&#47;", $x);
	$x = str_replace("\"", "&#39;", $x);
	$x = str_replace("|", "", $x);
	$x = str_replace(",", "&#44;", $x);
	//$x = str_replace(".", "&#46;", $x);
	$x = str_replace("^", "", $x);
	$x = str_replace("<", "&#60;", $x);
	$x = str_replace(">", "&#62;", $x);
	$x = str_replace('<', '&lt;', $x);
	$x = str_replace('>', '&gt;', $x);
	$x = str_replace("<script", "", $x);
	$x = str_replace("<form", "", $x);
	$x = str_replace("<embed", "", $x);
	$x = str_replace("<object", "", $x);
	
	return $x;
}

?>