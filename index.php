<?php
/*
 *	Write a function that converts strings of the form string_php_test to stringPhpTest.
 **/
$string = "test_string_qwerty_uiop";

function toCamelCase($string) {
	$first_symbol = $string{0}; // first symbol in lowercase
	$res = ucwords($string, "_");
	$res = str_replace("_", "", $res);
	$res{0} = $first_symbol;
	echo $res;
	echo "<br>";
}

function toCamelCase2($string) {
	$res = ucwords($string, "_");
	$res = str_replace("_", "", $res);
	$res = lcfirst($res);
	echo $res;
	echo "<br>";
}

toCamelCase($string);
toCamelCase2($string);
