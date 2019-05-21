#!/usr/bin/php
<?PHP


function ft_split($string) {
	$string = preg_replace( "/\:/", " ", $string );
	return(explode( " ", $string));
}

array_shift($argv);
$searched = array_shift($argv);
$new = array();
foreach ($argv as $key => $value) {
	$new = ft_split($value);
	if ($searched == $new[0]) {
		print($new[1]."\n");
	}
}

?>