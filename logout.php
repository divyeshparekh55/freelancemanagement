<?php
	session_start();
	unset($_SESSION['User']);
	header("location:http://localhost/login_form/login.php");

	exit();
?>