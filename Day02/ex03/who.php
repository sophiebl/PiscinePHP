#!/usr/bin/php
<?php
	date_default_timezone_set('Europe/Paris');

	$file = fopen('/var/run/utmpx', 'r');
	$entries = array();
	while ($data = fread($file, 628))
	{
		$data = unpack('a256user/a4id/a32line/ipid/itype/I2time/a256host/i16pad', $data);
		if ($data['type'] == 7)
			$entries[$data['line']] = array('user' => $data['user'], 'time' => $data['time1']);
	}
	foreach($entries as $entry => $data)
		echo substr($data['user'], 0, 8), ' ', substr($entry, 0, 7), '  ', date('M j H:i ', $data['time']), "\n";
?>