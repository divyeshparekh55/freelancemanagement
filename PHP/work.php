<!DOCTYPE html>
<html>
<head>
  <title>Register Member</title>
</head>
<body>
    <?php   include_once 'header.php'; ?>
    <?php
      $user_id = null;
      if(isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $images = $db->select('image_record',['id','image_name'],['assign_id'=>$user_id],'LIMIT 10')->results();
      }
      ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Select Image</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Image Selection</h3>

            <div class="card-tools">
              <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button> -->
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Select Work Image</label>
                  <select class="form-control select2" name="imageselect" id="imageselect" style="width: 100%;">
                    <option>Select</option>
                    <?php 
                      foreach ($images as $key => $value) {
                        echo "<option value=".$value['image_name'].">".$value['image_name']."</option>";
                      }
                    ?>
                  </select>

                </div>
              </div>
              <!-- /.col -->
              <div class="col-md-4">
              </div>
              <!-- /.col -->
            </div>
            
            <div class="row actionsdiv hide">
                <div class="col-md-12">
                  <img id="imagesource" width="100%" />
                </div>
            </div>

          </div>
        </div>

        <form method="POST" id="workform">
            <div class="card actionsdiv hide card-default">
                <div class="card-header">
                  <h3 class="card-title">File Information</h3>
                  <div class="card-tools">
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Serial Number</label>
                        <input type="text" class="form-control" id="serialnumber" name="serialnumber" placeholder="Enter Serial Number">
                      </div>
                      <div class="form-group">
                        <label>Business Id</label>
                        <input type="text" class="form-control" id="businessid" name="businessid" placeholder="Enter Business Id">
                      </div>
                      <div class="form-group">
                        <label>Analysis Year</label>
                        <input type="text" class="form-control" id="analysisyear" name="analysisyear" placeholder="Enter Analysis Year">
                      </div>
                      <div class="form-group">
                        <label>Branch Location #1</label>
                        <input type="text" class="form-control" id="branchlocation1" name="branchlocation1" placeholder="Enter Branch Location 1">
                      </div>
                      <div class="form-group">
                        <label>Branch Location #3</label>
                        <input type="text" class="form-control" id="branchlocation3" name="branchlocation3" placeholder="Enter Branch Location 3">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>File Number</label>
                        <input type="text" class="form-control" id="filenumber" name="filenumber" placeholder="Enter File Number">
                      </div>
                      <div class="form-group">
                        <label>Account Id</label>
                        <input type="text" class="form-control" id="accountid" name="accountid" placeholder="Enter Account Id">
                      </div>
                      
                      <div class="form-group">
                        <label>Branch Location #2</label>
                        <input type="text" class="form-control" id="branchlocation2" name="branchlocation2" placeholder="Enter Branch Location 2">
                      </div>
                      <div class="form-group">
                        <label>Branch Location #4</label>
                        <input type="text" class="form-control" id="branchlocation4" name="branchlocation4" placeholder="Enter Branch Location 4">
                      </div>

                    </div>
                  </div>
                </div>
            </div>

            <div class="card actionsdiv hide card-default">
                <div class="card-header">
                  <h3 class="card-title">STAKEHOLDERS</h3>
                  <div class="card-tools">
                  </div>
                </div>
                <div class="card-body">
                  <?php for ($i=1; $i <= 5; $i++) { ?>
                    <div class="card actionsdiv card-default">
                      <div class="card-header">
                        <h3 class="card-title">#<?php echo $i; ?></h3>
                        <div class="card-tools">
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="row">                        
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>ID <?php echo $i; ?></label>
                              <input type="text" class="form-control" id="id<?php echo $i; ?>" name="id<?php echo $i; ?>" placeholder="Enter ID <?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <label>Contact Number <?php echo $i; ?></label>
                              <input type="text" class="form-control" id="contact<?php echo $i; ?>" name="contact<?php echo $i; ?>" placeholder="Enter Contact Number <?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <label>Advisor #1</label>
                              <input type="text" class="form-control" id="advisor<?php echo $i; ?>f1" name="advisor<?php echo $i; ?>f1" placeholder="Enter Advisor <?php echo $i; ?>">
                            </div>
                          </div> 
                          <div class="col-md-6">
                          <div class="form-group">
                              <label>Name <?php echo $i; ?></label>
                              <input type="text" class="form-control" id="name<?php echo $i; ?>" name="name<?php echo $i; ?>" placeholder="Enter Name <?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <label>Operational Area <?php echo $i; ?></label>
                              <input type="text" class="form-control" id="operationalarea<?php echo $i; ?>" name="operationalarea<?php echo $i; ?>" placeholder="Enter Operational Area <?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <label>Advisor #2</label>
                              <input type="text" class="form-control" id="advisor<?php echo $i; ?>f2" name="advisor<?php echo $i; ?>f2" placeholder="Enter Advisor 2">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                    <!-- <div class="col-md-6">
                      <div class="form-group">
                        <label>Cash & Equivalents</label>
                        <input type="text" class="form-control" id="cashandequivalents" name="cashandequivalents" placeholder="Enter Cash & Equivalents">
                      </div>
                    </div> -->
                </div>
            </div>


            <div class="card actionsdiv hide card-default">
                <div class="card-header">
                  <h3 class="card-title">Assets</h3>
                  <div class="card-tools">
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Cash & Equivalents</label>
                        <input type="text" class="form-control" id="cashandequivalents" name="cashandequivalents" placeholder="Enter Cash & Equivalents">
                      </div>
                      <div class="form-group">
                        <label>Inventory</label>
                        <input type="text" class="form-control" id="inventory" name="inventory" placeholder="Enter Inventory">
                      </div>
                      <div class="form-group">
                        <label>Total Current Assets</label>
                        <input type="text" class="form-control" id="totcurrentassets" name="totcurrentassets" placeholder="Enter Total Current Assets">
                      </div>
                      <div class="form-group">
                        <label>Net Fixed Assets</label>
                        <input type="text" class="form-control" id="netfixedassets" name="netfixedassets" placeholder="Enter Net Fixed Assets">
                      </div>
                      <div class="form-group">
                        <label>Other Non Current Assets</label>
                        <input type="text" class="form-control" id="othercurrentassets" name="othercurrentassets" placeholder="Enter Other Non Current Assets">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Trade Account Receivable</label>
                        <input type="text" class="form-control" id="tradeaccrec" name="tradeaccrec" placeholder="Enter Trade Account Receivable">
                      </div>
                      <div class="form-group">
                        <label>Other Current Assets</label>
                        <input type="text" class="form-control" id="othercurrentassets" name="othercurrentassets" placeholder="Enter Other Current Assets">
                      </div>
                      
                      <div class="form-group">
                        <label>Long Term Investments</label>
                        <input type="text" class="form-control" id="longterminv" name="longterminv" placeholder="Enter Long Term Investments">
                      </div>
                      <div class="form-group">
                        <label>Intangible Assets</label>
                        <input type="text" class="form-control" id="intgassets" name="intgassets" placeholder="Enter Intangible Assets">
                      </div>

                      <div class="form-group">
                        <label>Total Assets</label>
                        <input type="text" class="form-control" id="totalassets" name="totalassets" placeholder="Enter Total Assets">
                      </div>

                    </div>
                  </div>
                </div>
            </div>
                
            <div class="card actionsdiv hide card-default">
                <div class="card-header">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-3">
                      </div>
                      <div class="col-md-3">
                        <button type="button" class="btn btn-primary" id="submitBtn">Submit</button>
                      </div>
                      <div class="col-md-3">
                        <button type="reset" class="btn btn-default" id="resetBtn">Reset</button>
                      </div>
                      <div class="col-md-3">
                      </div>
                    </div>
                </div>
            </div>
          </form>
      </div>
    </section>
</body>
<script>
  $(document).ready(() => {
    $('#imageselect').on('change',(e) => {
      if(e.target.value !== "Select") {
        $('[data-widget="pushmenu"]').PushMenu("collapse");
        $(".actionsdiv").removeClass('hide');
        $('#imagesource').attr('src','./'+e.target.value);
      } else {
        $(".actionsdiv").addClass('hide');
      }

    });

    $('#submitBtn').on('click',() => {
        $.ajax({
          url: "work_back.php",
          type: "POST",
          data: {
              data: $("#workform").serialize()
          },
          dataType: "JSON",
          success: function (jsonStr) {
              console.log(jsonStr);
          }
        });
    })

    $('#resetBtn').on('click',() => {
      $('#workform').trigger("reset");
    })

  })
</script>
</html>

