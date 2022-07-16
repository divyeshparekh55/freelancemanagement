<?php
	session_start();

	if($_SESSION['user_type'] !== 'admin') {
		session_unset();
		header("location:".SERVER_NAME."/".FOLDER_NAME."/PHP/login.php");
	}

    include_once "header.php";
	
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body><center>
	<form method="POST" action="image_create.php">
		
			
			<div class="form-group">
			<div class="col-xs-2">
			<select class="form-select form-select-sm" name="count">
  				<option selected>Open to select numbers of image</option>
  				<option>1</option>
				<option>10</option>
				<option>20</option>
				<option>30</option>
				<option>40</option>
				<option>50</option>
				<option>100</option>
			</select>
			</div>
			</div>

			
			<button class="btn btn-outline-info" name="sub">Create an Image</button>
		
	</form></center>
</body>
</html>