<?php 

	if (isset($_POST['submit']) && $_POST['submit'] != "" && $_POST['submit'] === "OK" && isset($_POST["login"]) && $_POST["login"] != "" && isset($_POST["passwd"]) && $_POST["passwd"] != "") 
	{ 
		$login = $_POST["login"];
		$passwd = hash('whirlpool', $_POST["passwd"]);

		if (!file_exists("../private/"))
			mkdir("../private/", 0777);

		$filename = "../private/passwd";

		if (file_exists($filename))
			$data = unserialize(file_get_contents($filename));

		if (isset($data[$login])) {
			echo "ERROR\n";
		} else {
			$data[$login] = array("login" => $login, "passwd" => $passwd);
			file_put_contents($filename, serialize($data));
			echo "OK\n";
		}
	} else 
		echo "ERROR\n";

?>