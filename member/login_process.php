<?php
	session_start(); 
	
    $user = $_GET["username"];
	$_SESSION["UserId"] = $user;
	
	header("Location: ../member");
?>