<?php
if ($_SERVER['PHP_AUTH_USER'] != 'zaz' || $_SERVER['PHP_AUTH_PW'] != 'jaimelespetitsponeys') {
    header("WWW-Authenticate: Basic realm='Espace membres'");
    header('HTTP/1.0 401 Unauthorized');
    echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n";
} else {
	$path = '../img/42.png';
	$data = file_get_contents($path);
	$base64 = base64_encode($data);
?>
<html><body>
Bonjour Zaz<br />
<img src='data:image/png;base64,<?= $base64 ?>'>
</body></html>
<?php
}
?>
