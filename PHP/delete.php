<?php

	session_start();
	if($_SESSION['user_type'] !== 'admin') {
			session_unset();
			header("location:".SERVER_NAME."/".FOLDER_NAME."/PHP/login.php");
		}

	include_once './config.php';
	
	if(isset($_GET['id']))
	{
		$user_id = $_GET['id'];

		$query = "DELETE FROM register WHERE id='$user_id' ";
		$result = mysqli_query($conn,$query);

		if($result)
		{
			// echo "Record Deleted Successfully";
			echo "<script>alert('Record Deleted Successfully')</script>";
			header('location:./data.php');
			
		}
		else
		{
			echo "Something went wrong";
			header('location:./data.php');
			
		}
	}

	include_once './header.php';
?>