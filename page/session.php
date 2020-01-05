<?php
	session_start();
	//si la variable $_SESSION['user'] n'existe pas
	header('location:home.php');
	
?>