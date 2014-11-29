<?php

$data = array();

if ($fd = fopen(sys_get_temp_dir().'/volumio-poweroff', 'r')) {
	$pid = fgets($fd);
	$timestamp = intval(fgets($fd));
	fclose($fd);

	// $d = $timestamp - time();
	// $hours = date('H', $d);
	// $minutes = date('i', $d);

	// $data = array(
	// 	'hours'   => intval($hours),
	// 	'minutes' => intval($minutes)
	// );
	$data = array(
		'timestamp' => $timestamp
	);
}

echo json_encode($data);