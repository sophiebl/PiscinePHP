<?PHP

function ft_is_sort($tab) {
	$tmp = $tab;
	sort($tab);
	if ($tmp == $tab) {
		return(true);
	}
	else {
		return (false);
	}
}

?>
