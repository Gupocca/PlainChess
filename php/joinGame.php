<?php
	include 'config.php';
	
	if (!$gameName = $_POST["id"]) return false;
	if (!is_writable($gamesDir.$gameName)) return false;
	if (!$file = fopen($gamesDir.$gameName, "rw+")) return false;
	$line = fgets($file);
	if ($line) return false;
	fwrite($file, "joined");
	fclose($file);
	echo $gameName;
?>