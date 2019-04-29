#!/usr/bin/php
<?PHP

	if ($argc != 4) {
		echo "Incorrect Parameters\n";
		exit();
	}

	if (trim($argv[2]) == "+") {
		$r = trim($argv[1]) + trim($argv[3]);
	}
	else if (trim($argv[2]) == "-") {
		$r = trim($argv[1]) - trim($argv[3]);		
	}
	else if (trim($argv[2]) == "*") {
		$r = trim($argv[1]) * trim($argv[3]);		
	}
	else if (trim($argv[2]) == "/") {
		$r = trim($argv[1]) / trim($argv[3]);		
	}
	else if (trim($argv[2]) == "%") {
		$r = trim($argv[1]) % trim($argv[3]);		
	}
	print($r);
	
?>