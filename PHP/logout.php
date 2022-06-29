<?php
	include_once '../config/config.php';
	include_once './config.php';
	session_start();
	unset($_SESSION['is_loggedin']);
	unset($_SESSION['user_name']);
	header("location:".SERVER_NAME."/".FOLDER_NAME."/PHP/login.php");

	exit();
?>