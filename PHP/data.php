<?php
session_start();

if($_SESSION['user_type'] !== 'admin') {
    session_unset();
    header("location:".SERVER_NAME."/".FOLDER_NAME."/PHP/login.php");
}


  include_once 'config.php';
  include_once '../config/config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
  
<div class="wrapper">
<!-- Header Section  -->
<?php 
  include_once './header.php';
  if($_SESSION['user_type'] !== 'admin') {
    session_unset();
    header("location:".SERVER_NAME."/".FOLDER_NAME."/PHP/login.php");
  } 
?>

  <!-- Content Wrapper. Contains page content -->
  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="col-2">
    <button class="btn btn-outline-primary">
    <a href="./register.php">Add Member</a>
    </button></div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">User Lists</h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
          
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>User Name</th>
                    <th>Password</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    if(isset($_POST['message'])){
                      $userId = $_POST['user_id'];
                      $_SESSION['userMessageId'] = $userId;
                      print_r($userId);
                      exit(); 
                    }
                     $sql = "SELECT * FROM register";
                     $result = mysqli_query($conn,$sql);
                      while($row = mysqli_fetch_assoc($result))
                         {
                            ?>
                            <tbody>
                            <tr>
                        <td> <?php echo $row['id']; ?> </td>
                        <td> <?php echo $row['fname']; ?> </td>
                        <td> <?php echo $row['password']; ?> </td>
                        <td>
                          <form method="POST" action="./edit.php">
                          <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                          <button class="btn btn-primary" name="edit_btn">Edit</button></form>
                          <form method="POST" action="./delete.php">
                          <input type="hidden" name="user_delete" value="<?php echo $row['id']; ?>">
                          <button class="btn btn-danger" name="delete">Delete</button></form>    
                          <form method="POST" action="./assign_work.php?id=<?php echo $row['id']; ?>">
                            <button class="btn btn-success" name="assign">Assign Work</button>
                          </form> 
                           <button type="button" class="btn btn-warning" name="message" ><a href="user_msg.php?user_id=<?php echo $row['id']; ?>">Message</a></button>   
                           <button type="button" class="btn btn-info"><a href="download.php?id=<?php echo $row['id']; ?>">Download Result</a></button>
                          </td>
                          
                      </tr></tbody>
                      <?php
                        }
                        ?>
                  </tr> 
                </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
                  
                  </tfoot>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/dist/js/demo.js"></script>
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/summernote/summernote.js"></script>
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/daterangepicker/daterangepicker.js"></script>


<!-- Page specific script -->
<script>
    $(document).ready(() => {
      $('#example2').DataTable({
      "paging": true,
      "searching": true,
      "ordering": true,
      "responsive": true,
      "buttons": [
            {
                text: 'Add User',
                action: function ( e, dt, node, config ) {
                    window.location.href = "register.php";  
                }
            }
        ]
      });
    })
</script>

</body>
</html>
