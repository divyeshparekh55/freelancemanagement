<?php
	include_once 'config.php';

	include_once 'header.php';

	
?>
<?php
	include_once 'config.php';



?>


<!DOCTYPE html>
<html>
<head>
	<body>
		<center>
  
      <div class="register-box">
  <div class="register-logo">
    <b>Add </b> USER</a>
  </div>  
      

     		<?php
     			if(isset($_POST['edit_btn']))
				{		
					$id = $_POST['edit_id'];

					$sql = "SELECT * FROM register WHERE id ='$id' ";
					$result = mysqli_query($conn,$sql);

					foreach($result as $row)
					{
						?>

						

		<form method="POST" action="update.php">
        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">

        <div class="input-group mb-3">
          <input type="text" class="form-control" value="<?php echo $row['fname'] ?>" placeholder="Full name" name="fname">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" value="<?php echo $row['email'] ?>" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" value="<?php echo $row['password'] ?>" placeholder="Password" name="pass">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" value="<?php echo $row['address'] ?>" placeholder="Enter your address" name="add">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-map-marker"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" value="<?php echo $row['phone_number'] ?>" placeholder="enter your phone number" name="phone">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-phone"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          
          <!-- /.col -->
          <div class="col-4">
            <button type="Clear" class="btn btn-outline-danger">Clear</button>
          </div>

          <div class="col-4">
            <button type="submit" class="btn btn-outline-primary" name="update">Update</button>
          </div>

          <!-- /.col -->
        </div>
	        
     <?php
						}
					}
     		?>



     	</form>
    </center>
	</body>
</html>

