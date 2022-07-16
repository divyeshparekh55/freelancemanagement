
<?php
    session_start();

    if($_SESSION['user_type'] !== 'admin') {
        session_unset();
        header("location:".SERVER_NAME."/".FOLDER_NAME."/PHP/login.php");
    }

    include_once '../config/config.php';

    date_default_timezone_set("Asia/Calcutta");

    $timestamp = time();
    $date_time = date("Y-m-d");

    if(isset($_POST['submit']))
    {

        $message = $_POST['message'];
        $user_id = $_GET['user_id'];
        
        $sql= $db->insert('notification',array('user_id'=>$user_id,'date'=>$date_time,'message'=>$message))->getLastInsertId();
                            
        if($sql){
            header("location:./data.php");
        }else{
            echo "Something went wrong";
        }
    }

    include_once './header.php';
?>
<html>
    <body>
        
            <?php
                if(isset($_GET['user_id']))
                {                               
            ?>
            <div class="content-wrapper">
            <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Message</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label>User Id</label>
                    <input type="text" disabled="disabled"  class="form-control" value="<?php echo $_GET['user_id'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Date</label>
                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime" disabled="disabled" value="<?php echo "$date_time"; ?>" name="date"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Message</label>
                    <input type="text" class="form-control" name="message" placeholder="Enter your message">
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            
          </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
            </div>
            <?php
                 }
            ?>    
       <script>
        var today = new window.Date().toISOString().split('T')[0];
        document.getElementsByName("date")[0].setAttribute('min', today);
       </script>
    </body>
</html>