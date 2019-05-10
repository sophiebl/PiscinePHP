<?PHP
	
	include("auth.php");
	session_start();
	if (!isset($_GET["login"]) || $_GET["login"] == "") {
		exit("ERROR\n");
	}
	$login = $_GET["login"];
	$passwd = hash('whirlpool', $_GET["passwd"]);
	if (auth($login, $passwd) == TRUE)
	{
		$_SESSION["loggued_on_user"] = $_GET["login"];
		echo "OK\n";
	}
	else
	{
		$_SESSION["loggued_on_user"] = "";
		echo "ERROR loggued\n";
	}
?>
