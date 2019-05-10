<?php

	function auth($login, $passwd) {
		if (isset($login) && isset($passwd)) {
			$filename = "../private/passwd";
			if (file_exists($filename)) {
				$data = unserialize(file_get_contents($filename));
			}
			if ($login == $data[$login]["login"] && $passwd == $data[$login]["passwd"]) {
				return (TRUE);
			} else {
				return (FALSE);
			}
		}
		return (FALSE);
	}

?>