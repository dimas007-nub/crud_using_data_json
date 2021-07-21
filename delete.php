<?php
	//get the index
	$index = $_GET['index'];

	//fetch data from json
	$data = file_get_contents('data.json');
	$data = json_decode($data);

	//delete the row with the index
	unset($data[$index]);

	//encode back to json
	$data = json_encode($data, JSON_PRETTY_PRINT);
	file_put_contents('data.json', $data);

	header('location: index.php');
?>