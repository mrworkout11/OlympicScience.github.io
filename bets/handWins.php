<?php
	$handWins=$_POST["handWins"];
	$jsonString = file_get_contents('stats.json');
	$data = json_decode($jsonString, true);
	$data->Handball[0]->handWins=$handWins;
	$newJsonString = json_encode($data);
	file_put_contents('stats.json', $newJsonString);
?>