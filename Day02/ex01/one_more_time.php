#!/usr/bin/php
<?PHP

function ft_split($string) {
	$string = preg_replace( "/\s+/", " ", $string );
	return(explode( " ", $string));
}


if ($argc > 1) {
	if (preg_match("/[[:alpha:]]+ [0-9]{2} [[:alpha:]]+ [0-9]{4} [0-9]{2}:[0-9]{2}:[0-9]{2}/", $argv[1])) {
		date_default_timezone_set("Europe/Paris");
		$days = array(
			"Lundi" => "Monday",
			"Mardi" => "Tuesday",
			"Mercredi" => "Wednesday",
			"Jeudi" => "Thursday",
			"Vendredi" => "Friday",
			"Samedi" => "Saturday",
			"Dimanche" => "Sunday"
		);
		$months = array(
			"Janvier" => "January",
			"Fevrier" => "February",
			"Mars" => "March",
			"Avril" => "April",
			"Mai" => "May",
			"Juin" => "June",
			"Juillet" => "July",
			"Aout" => "August",
			"Septembre" => "September",
			"Octobre" => "October",
			"Novembre" => "November",
			"Decembre" => "December"
		);
		$date = ft_split($argv[1]);
		foreach ($days as $key => $value) {
			if($date[0] == $key) 
				$date[0] = $value;
		}
		foreach ($months as $key => $value) {
			if($date[2] == $key) 
				$date[2] = $value;
		}	
		$str = implode(" ", $date);
		print(strtotime($str)."\n");
	} else {
		print("Wrong Format"."\n");
	}
}
?>