<?php
	include_once './header.php';
	include_once './config.php';
?>
<?php
	if(isset($_POST['sub']))
	{
		$count = (int)$_POST['count'];
		$id = $_POST['user_assign'];
		$user_assign = $_POST['user_assign'];

		/*$check = 'SELECT COUNT(*) AS total FROM image_record WHERE assign_id = 0';
		$sql = mysqli_query($conn,$check);
		$data = mysqli_fetch_assoc($sql);
		print_r($data['total']);*/

		$check = 'SELECT * FROM image_record WHERE assign_id = 0';
		$sql = mysqli_query($conn,$check);

		if($result=mysqli_num_rows($sql))
		{
			$update = "SELECT  UPDATE image_record SET assign_id = ['$id'] WHERE assign_id ";
		}


	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<?php
			if(isset($_POST['assign']))
			{
				$id = $_POST['user_assign'];

				$sql = "SELECT * FROM register WHERE id ='$id' ";
				$query = mysqli_query($conn,$sql);




				while($row = mysqli_fetch_assoc($query))
				{
					?>
				
		<form method="POST">
		
			<div class="card-body">
			<div class="form-group">
			<div class="col-xs-2">
				<input type="text" disabled="disabled" name="user_assign" value="<?php echo $row['id']; ?>"><br>
				<label>Select Number Of Image</label><br>
			<select class="form-select form-select-sm" name="count">
  				
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

			
			<button class="btn btn-outline-info" name="sub">Submit</button>
		</div>
	</form>
	<?php
				}
			}
		?>
	</center>
</body>
</html>
