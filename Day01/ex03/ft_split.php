<?PHP

function ft_split($string) {
	$string = preg_replace( "/\s+/", " ", $string );
	$tab = explode( " ", $string);
	sort($tab);
	return($tab);
}

?>
