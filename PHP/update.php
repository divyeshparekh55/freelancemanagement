
<?php
	include_once 'config.php';
	include_once '../config/config.php';

	session_start();

    if($_SESSION['user_type'] !== 'admin') {
        session_unset();
        header("location:".SERVER_NAME."/".FOLDER_NAME."/PHP/login.php");
    }

if(isset($_POST['update']))
	{
		$id = $_POST['edit_id'];
		$fname = $_POST['fname'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$address = $_POST['add'];
		$phone = $_POST['phone'];

		$sql = "UPDATE register SET fname='$fname', email='$email', password='$pass', address='$address', phone_number='$phone' WHERE id='$id' ";

		$result = mysqli_query($conn,$sql);

		if($result)
		{
			header('location:data.php');
		}
		else
		{
			header('location:edit.php');
		}
	}

?>
