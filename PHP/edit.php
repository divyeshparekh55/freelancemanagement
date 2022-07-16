<?php
  session_start();

  if($_SESSION['user_type'] !== 'admin') {
      session_unset();
      header("location:".SERVER_NAME."/".FOLDER_NAME."/PHP/login.php");
  }

	include_once '../config/config.php';
	include_once './config.php';

  $total_image = 0;
  $total_image_submit = 0;
  
  if(isset($_GET['id']) && $_GET['id'] !== null) {
    $total_image = $db->pdoQuery('select count(assign_id) as totalimage from image_record where assign_id = '.$_GET['id'])->result();
    $total_image_submit = $db->pdoQuery('select count(user_id) as totalimagesubmit from image_submit where user_id ='.$_GET['id'])->result();  
  } else {
    header("location:".SERVER_NAME."/".FOLDER_NAME."/PHP/data.php");
  }
  include_once './header.php';	
?>
<!DOCTYPE html>
<html>
<head>
  <style>
    .cardclass {
      margin:auto;
      margin-top:20%;
    }
    .formclass {
      margin:20px;
    }
  </style>
</head>

	<body>
	
    <div class="content-wrapper">
      <div class="row">
     

        <div class="col-6">
          <div class="formclass">
            <div class="register-box">
              <div class="register-logo">
                <b>Edit </b> USER</a>
              </div>
            </div>
              <?php
                if(isset($_GET['id']))
              {		
                $id = $_GET['id'];

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
                          <button type="button" class="btn btn-outline-danger"><a href="./data.php">Back</a></button>
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
            </div>
        </div>

        <div class="col-6">
          <div class="cardclass">
            <section class="content">
                  <div class="container-fluid">
                    <div class="row">
                    <div class="col-md-8 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-image"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Images Asigned</span>
                      <h3><?php echo $total_image['totalimage']; ?></h3>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <br>
                <!-- /.col -->
                <div class="col-md-8 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Image Submited</span>
                      <h3><?php echo $total_image_submit['totalimagesubmit']; ?></h3>
                      <span class="info-box-number"></span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                    </div>
                  </div>
            </section>
          </div>
        </div>

      </div>
    </div>  	
    
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
	</body>
</html>

