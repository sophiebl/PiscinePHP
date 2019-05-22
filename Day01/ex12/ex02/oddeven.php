#!/usr/bin/php
<?PHP

while (true)
{
	echo "Entrez un nombre ? ";
	$input = rtrim(fgets(STDIN));
	if (feof(STDIN) == true){
		exit("\n");
	}
	if (is_numeric($input) == false) {
		echo "'".$input."' n'est pas un chiffre\n";
	}
	else if ($input[strlen($input) - 1] % 2 == 0) {
		echo "Le chiffre ".$input." est Pair\n";
	}
	else {
		echo "Le chiffre ".$input." est Impair\n";
	}
}

?>