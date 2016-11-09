<?php
	require("../../config.php");
	/* ALUSTAN SESSIOONI */
	session_start();
		
	/* ÜHENDUS */
	$database = "if16_Marliis";
	$mysqli = new mysqli($serverHost, $serverUsername, $serverPassword, $database);
	
	/* KLASSID */
	
	require("Helper.class.php");
	$Helper = new Helper();
?>