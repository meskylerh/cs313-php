<?php
	session_start();
	if (!isset($_SESSION["cart"])) {
		$_SESSION["cart"] = array();
	}
	$silver = $_POST["silver"];
	foreach ($silver as $silvera) {
		array_push($_SESSION["cart"], $silvera);
	}