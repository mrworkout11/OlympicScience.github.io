<?php
	if(isset($_POST["handWins"])){
		$handWins=$_POST["handWins"];
		$jsonString = file_get_contents('stats.json');
		$data = json_decode($jsonString, true);
		$data["Handball"]["handWins"]=(int)$handWins;
		$newJsonString = json_encode($data);
		file_put_contents('stats.json', $newJsonString);
	}
	if(isset($_POST["handLoses"])){
		$handLoses=$_POST["handLoses"];
		$jsonString = file_get_contents('stats.json');
		$data = json_decode($jsonString, true);
		$data["Handball"]["handLoses"]=(int)$handLoses;
		$newJsonString = json_encode($data);
		file_put_contents('stats.json', $newJsonString);
	}
	if(isset($_POST["volleyWins"])){
		$volleyWins=$_POST["volleyWins"];
		$jsonString = file_get_contents('stats.json');
		$data = json_decode($jsonString, true);
		$data["Volleyball"]["volleyWins"]=(int)$volleyWins;
		$newJsonString = json_encode($data);
		file_put_contents('stats.json', $newJsonString);
	}
	if(isset($_POST["volleyLoses"])){
		$volleyLoses=$_POST["volleyLoses"];
		$jsonString = file_get_contents('stats.json');
		$data = json_decode($jsonString, true);
		$data["Volleyball"]["volleyLoses"]=(int)$volleyLoses;
		$newJsonString = json_encode($data);
		file_put_contents('stats.json', $newJsonString);
	}
?>