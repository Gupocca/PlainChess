<?php
	include 'config.php';

	if (!$gameName = $_POST["id"]) return false;
	if (!$file = fopen($gamesDir.$gameName, "r")) return false;
	$line = fgets($file);
	fclose($file);
	echo $line;
?>