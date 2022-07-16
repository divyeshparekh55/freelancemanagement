<?php
    session_start();

    if($_SESSION['user_type'] !== 'client') {
        session_unset();
        header("location:".SERVER_NAME."/".FOLDER_NAME."/PHP/login.php");
    }

    include_once '../config/config.php';
    include_once './header.php';

    $user_Id = $_SESSION['user_id'];
    $notifications = $db->select('notification',['*'],['user_id'=>$user_Id])->results();
    

?>
  <link rel="stylesheet" href="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">

        <div class="card card-default color-palette-box">
            <div class="card-header">
                <h3 class="card-title">
                <i class="fas fa fa-history"></i>
                    My Notifications
                </h3>
            </div>
            <div class="card-body">
            
            <table id="notificationtable" class="table table-bordered table-hover">
          
          <thead>
            <tr>
              <th>Id</th>
              <th>Date</th>
              <th>Notifications</th>
            </tr>
          </thead>
          <tbody>
           
          </tbody>
            
          </table>


            </div>
        </div>

      </div>
    </section>
</div>
<script>
    $(document).ready(() => {
        let data = <?php print_r(json_encode($notifications)); ?>;

        $('#notificationtable').DataTable({
            columns: [
                {data:'id'},
                {data:'date'},
                {data:'message'}
            ],
            data: data,
        })
    })
</script>

<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
