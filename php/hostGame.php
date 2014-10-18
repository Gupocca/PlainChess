<?php
	include 'config.php';
	
	if (!$gameName = $_POST["id"]) return false;
	if (!fclose(fopen($gamesDir.$gameName, "x"))) return false;
	echo $gameName;
?>