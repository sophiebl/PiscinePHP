#!/usr/bin/php
<?PHP
	if ($argc != 2) {
		echo "Incorrect Parameters\n";
		exit();
	}
	else {
	$op = explode(";", "+;-;*;/;%");
	$arg = sscanf($argv[1], "%d %c %d %s");
	if ((!(is_numeric($arg[0]))) || (!(is_numeric($arg[2]))) && (($arg[1] != "+") && ($arg[1] != "-") && ($arg[1] != "/") && ($arg[1] != "%") && ($arg[1] != "*"))) {
		echo "Syntax Error\n";
		exit();
	}
	if ($arg[1] == "+") {
		$r = $arg[0] + $arg[2];
	}
	else if ($arg[1] == "-") {
		$r = $arg[0] - $arg[2];		
	}
	else if ($arg[1] == "*") {
		$r = $arg[0] * $arg[2];		
	}
	else if ($arg[1] == "/") {
		$r = $arg[0] / $arg[2];		
	}
	else if ($arg[1] == "%") {
		$r = $arg[0] % $arg[2];		
	}
	else {
		$r = "Syntax Error";
	}
	print($r."\n");
}

?>