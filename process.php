<?php 
session_start(); 
	if (!isset($_SESSION["number"])) {
		$number = rand(1, 100);
		$_SESSION["number"] = $number;
	}
	

if (isset($_POST["guess"])) {
	$guess = $_POST["guess"];
	$_SESSION["guess"] = $guess;
}
	
	



	if (isset($_POST["play_again"])) {
		session_destroy();
		
	}

	header("Location: index.php");

	
?>
