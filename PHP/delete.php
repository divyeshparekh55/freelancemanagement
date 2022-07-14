<?php
	include_once './config.php';
	
	if(isset($_GET['id']))
	{
		$user_id = $_GET['id'];

		$query = "DELETE FROM register WHERE id='$user_id' ";
		$result = mysqli_query($conn,$query);

		if($result)
		{
			echo "Record Deleted Successfully";
			header('location:data.php');
			
		}
		else
		{
			echo "Something went wrong";
			header('location:data.php');
			
		}
	}
?>