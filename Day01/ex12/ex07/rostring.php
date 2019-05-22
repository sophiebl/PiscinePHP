#!/usr/bin/php
<?PHP

if ($argc > 1) {
	/*$argv[1] = trim($argv[1]);
	$argv[1] = preg_replace("/\s+/", " ", $argv[1]);
	$arg = explode(" ", $argv[1]);*/
	$arg = preg_split("/\s+/", trim($argv[1]));
	$pop = array_shift($arg);
	array_push($arg, $pop);
	$str = implode(" ", $arg);
	print($str."\n");
}

?>