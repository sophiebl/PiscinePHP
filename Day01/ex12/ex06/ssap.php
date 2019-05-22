#!/usr/bin/php
<?PHP
if ($argc > 1)
{
	array_shift($argv);
	$str = implode(" ", $argv);
	trim($str);
	$str = preg_replace("/\s+/", " ", $str);
	$arg = explode(" ", $str);
	sort($arg);
	foreach ($arg as $new){
		print($new."\n");
	}
}

?>
