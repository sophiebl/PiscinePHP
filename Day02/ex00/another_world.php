#!/usr/bin/php
<?PHP

if ($argc > 1) {
	$string = preg_replace( "/[\t ]+/", " ", trim($argv[1]) );
	print($string."\n");
}

?>