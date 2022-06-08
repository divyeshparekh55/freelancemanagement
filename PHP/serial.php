<?php 
  	require_once 'config.php';
	
	$sql = "SELECT * FROM image_record";

	$result = mysqli_query($conn,$sql);

	print_r($result);
	exit()
	
  
?> 