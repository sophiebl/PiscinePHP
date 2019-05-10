<?php

	if (isset($_POST['submit']) && $_POST['submit'] != "" && $_POST['submit'] === "OK" && isset($_POST["login"]) && $_POST["login"] != "" && isset($_POST["oldpw"]) && $_POST["oldpw"] != "" && isset($_POST["newpw"]) && $_POST["newpw"] != "")
	{
		$login = $_POST["login"];
		$oldpw = hash('whirlpool', $_POST["oldpw"]);
		$newpw = hash('whirlpool', $_POST["newpw"]);
		$filename = "../private/passwd";
		if (file_exists($filename))
			$data = unserialize(file_get_contents($filename));
		if (isset($data[$login]) && $oldpw == $data[$login]['passwd']) {
			$data[$login]['passwd'] = $newpw;
			file_put_contents($filename, serialize($data));
			echo "OK\n";
		} else {
			echo "ERROR\n";
		}
	} else 
		exit("ERROR\n");

?>