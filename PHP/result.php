<?php
    include_once "./header.php";
    include_once "./config.php";
?>
<html>
    <body>
        <?php
            if(isset($_GET['id']))
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
                    <input type="text" disabled="disabled"  class="form-control" value="<?php echo $_GET['id'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Date</label>
                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime" disabled="disabled" name="date"/>
                  </div>
                  
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit"><a href="download.php?id=<?php echo $_GET['id']; ?>">Download</a></button>
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
    </body>
</html>