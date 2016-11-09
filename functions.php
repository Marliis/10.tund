<?php
	require("/home/marlodam/config.php");
	/* ALUSTAN SESSIOONI */
	session_start();
		
	/* ÜHENDUS */
	$database = "if16_Marliis";
	$mysqli = new mysqli($serverHost, $serverUsername, $serverPassword, $database);
		
?>