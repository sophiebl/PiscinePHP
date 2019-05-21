<?PHP
	
	foreach ($_GET as $key => $value) {
		if ($value != "")
			print($key.": ".$value."\n");
	}

?>
