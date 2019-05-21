<?PHP

function ft_split($string) {
	//$string = preg_replace( "/\s+/", " ", $string );
	//$tab = explode( " ", $string);
	$tab = preg_split("/\s+/", trim($string));
	sort($tab);
	return($tab);
}

?>
