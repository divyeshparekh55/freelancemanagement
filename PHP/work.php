<?php include_once 'config.php'; ?>


<!DOCTYPE html>
<html>
<head>
  <title>Register Member</title>
  <link rel="stylesheet" href="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/dropzone/min/dropzone.min.css">
  
</head>
<body>
  <style>
    .scrollbar-deep-purple::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #F5F5F5;
    border-radius: 10px;
}

.scrollbar-deep-purple::-webkit-scrollbar {
    width: 12px;
    background-color: #F5F5F5;
}

.scrollbar-deep-purple::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #512da8;
}

.scrollbar-deep-purple {
    scrollbar-color: #512da8 #F5F5F5;
}

.scrollbar-cyan::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #F5F5F5;
    border-radius: 10px;
}

.scrollbar-cyan::-webkit-scrollbar {
    width: 12px;
    background-color: #F5F5F5;
}

.scrollbar-cyan::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #00bcd4;
}

.scrollbar-cyan {
    scrollbar-color: #00bcd4 #F5F5F5;
}

.scrollbar-dusty-grass::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #F5F5F5;
    border-radius: 10px;
}

.scrollbar-dusty-grass::-webkit-scrollbar {
    width: 12px;
    background-color: #F5F5F5;
}

.scrollbar-dusty-grass::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-image: -webkit-linear-gradient(330deg, #d4fc79 0%, #96e6a1 100%);
    background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%);
}

.scrollbar-ripe-malinka::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #F5F5F5;
    border-radius: 10px;
}

.scrollbar-ripe-malinka::-webkit-scrollbar {
    width: 12px;
    background-color: #F5F5F5;
}

.scrollbar-ripe-malinka::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-image: -webkit-linear-gradient(330deg, #f093fb 0%, #f5576c 100%);
    background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%);
}

.bordered-deep-purple::-webkit-scrollbar-track {
    -webkit-box-shadow: none;
    border: 1px solid #512da8;
}

.bordered-deep-purple::-webkit-scrollbar-thumb {
    -webkit-box-shadow: none;
}

.bordered-cyan::-webkit-scrollbar-track {
    -webkit-box-shadow: none;
    border: 1px solid #00bcd4;
}

.bordered-cyan::-webkit-scrollbar-thumb {
    -webkit-box-shadow: none;
}

.square::-webkit-scrollbar-track {
    border-radius: 0 !important;
}

.square::-webkit-scrollbar-thumb {
    border-radius: 0 !important;
}

.thin::-webkit-scrollbar {
    width: 6px;
}

.example-1 {
    position: relative;
    overflow-y: scroll;
    height: 200px;
}
  </style>

    <?php   
    session_start();
    if($_SESSION['user_type'] != 'client') {
      session_unset();        
      header("location:".SERVER_NAME."/".FOLDER_NAME."/PHP/login.php");
    }
    
    include_once 'header.php';
    date_default_timezone_set("Asia/Calcutta");

    $timestamp = time();
    $date_time = date("Y-m-d");

    $user_id = null;
    if(isset($_SESSION['user_id'])) {
      $user_id = $_SESSION['user_id'];
      
      $images = $db->select('image_record',['id','image_name'],['assign_id'=>$user_id,'work_assign_date'=>$date_time], 
        ' LIMIT 100')->results();
    }    
    if(isset($_POST['submit'])) {
      extract($_POST);

        $arr = array(
                array('ID','Name','Contact Number','Operational Area','Advisor 1'),
                array('$id1','$name1','$contact1','$operationalarea1','$advisor1f1'),
                array('$id2','$name2','$contact2','$operationalare2','$advisor2f1'),
                array('$id3','$name3','$contact3','$operationalare3','$advisor3f1'),
                array('$id4','$name4','$contact4','$operationalare4','$advisor4f1'),
                array('$id5','$name5','$contact5','$operationalare5','$advisor5f1')
                

        );


        $string = serialize($arr); 

        $newvar = unserialize($string);
        

      // $sql = "INSERT INTO image_submit(user_id,work_date,serial_number,business_id,analysis_year,branch_location1,branch_location2,branch_location3,branch_location4,file_number,accountant_id,stackholder,cash_equivalents,invtory,total_current_assets,net_fixed_assets,other_non_current_assets,trade_accounts_receivable,other_current_assets,long_term_investments,  intangible_assets,total_asstes) VALUES('$user_id','$date_time','$serialnumber','$businessid','$analysisyear','$branchlocation1','$branchlocation2','$branchlocation3','$branchlocation4','$filenumber','$accountid','$string','$cashandequivalents','$inventory','$totcurrentassets','$netfixedassets','$tradeaccrec','$othernoncurrentassets','$longterminv','$intgassets','$totalassets')";

      $db->insert('image_submit',array('user_id'=>$user_id,'work_date'=>$date_time,'serial_number'=>$serialnumber,'business_id'=>$businessid,'analysis_year'=>$analysisyear,'branch_location1'=>$branchlocation1,'branch_location2'=>$branchlocation2,'branch_location3'=>$branchlocation3,'branch_location4'=>$branchlocation4,'file_number'=>$filenumber,'accountant_id'=>$accountid,'stackholder'=>$string,'cash_equivalents'=>$cashandequivalents,'invtory'=>$inventory,'total_current_assets'=>$totcurrentassets,'net_fixed_assets'=>$netfixedassets,'other_non_current_assets'=>$othernoncurrentassets,'trade_accounts_receivable'=>$tradeaccrec,'other_current_assets'=>$othercurrentassets,'long_term_investments'=>$longterminv,'intangible_assets'=>$intgassets,'total_asstes'=>$totalassets));
      
      
      if($result = mysqli_query($conn,$sql)) {
            echo " Successfully Created";
      } else {
            echo "Something went wrong";
      }
    }
    include_once '../config/config.php';
      
    $notifications = $db->pdoQuery('select id,message from notification where (is_readed = 0 AND user_id = '.$_SESSION['user_id'].' )')->results();
    $db->pdoQuery('update notification SET is_readed = 1 where user_id = '.$_SESSION['user_id'])->affectedRows();
    
    ?>
    

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <?php if(count($notifications)) { ?>
        <div class="container-fluid">
            <div class="alert alert-warning alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
                <ul>
              <?php foreach ($notifications as $key => $value) {
                echo "<li>".$value['message']."</li>"; } ?>
                </ul>
            </div>
        </div><!-- /.container-fluid -->
    <?php } ?>
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

                
            
              
                
                <!-- Date and time -->
                 <div class="form-group">
                  
                    <div class="input-group date" id="reservationdatetime" data-target-input="nearest" >
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime" disabled="disabled" value="<?php echo "$date_time"; ?>" name="date"/>
                        <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div> 
                
                

               
                <div class="form-group">
                  
                  <br>
                  <select class="form-control select2" name="imageselect" id="imageselect" style="width: 100%;">
                    <option>Select</option>

                    <?php 
                      foreach ($images as $key => $value) {
                        echo "<option value=".$value['image_name'].">".$value['image_name']."</option>";
                      }
                    ?></div>
                  </select>

                
                </div>
              </div>
              <!-- /.col -->
              <div class="col-md-4">
              </div>
              <!-- /.col -->
            </div>
            <div class="card example-1 square  square thin">
            <div class="row actionsdiv hide">
                <div class="col-md-12 imageheightdiv">
                  <img id="imagesource" width="100%" />
                </div>
            </div>
            </div>

          </div>
        </div>

        <form method="POST" id="workform">
          
        <div class="col-12 col-sm-12 actionsdiv hide">
            <div class="card card-primary card-outline card-tabs">
              <div class="card-header p-0 pt-1 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">File Info</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Stack Holder</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#custom-tabs-three-messages" role="tab" aria-controls="custom-tabs-three-messages" aria-selected="false">Assets</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                    <!-- File info section -->
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          
                          <input type="text" class="form-control" id="serialnumber" name="serialnumber" placeholder="Enter Serial Number">
                        </div>
                        <div class="form-group">
                         
                          <input type="text" class="form-control" id="businessid" name="businessid" placeholder="Enter Business Id">
                        </div>
                        <div class="form-group">
                         
                          <input type="text" class="form-control" id="analysisyear" name="analysisyear" placeholder="Enter Analysis Year">
                        </div>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" id="branchlocation1" name="branchlocation1" placeholder="Enter Branch Location 1">
                        </div>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" id="branchlocation3" name="branchlocation3" placeholder="Enter Branch Location 3">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          
                          <input type="text" class="form-control" id="filenumber" name="filenumber" placeholder="Enter File Number">
                        </div>
                        <div class="form-group">
                         
                          <input type="text" class="form-control" id="accountid" name="accountid" placeholder="Enter Account Id">
                        </div>
                        
                        <div class="form-group">
                          
                          <input type="text" class="form-control" id="branchlocation2" name="branchlocation2" placeholder="Enter Branch Location 2">
                        </div>
                        <div class="form-group">
                         
                          <input type="text" class="form-control" id="branchlocation4" name="branchlocation4" placeholder="Enter Branch Location 4">
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">

                  <!-- Stack Holder -->
                  
                  <?php for ($i=1; $i <= 5; $i++) { ?>
                    
                      
                        <h3 class="card-title"></h3>
                        
                      
                        <div class="row">                      
                          <div class="col-md-2">
                            <div class="form-group">
                              <!-- <label id="section1">ID <?php echo $i; ?></label> -->
                              <input type="text" class="form-control" id="id<?php echo $i; ?>" name="id<?php echo $i; ?>" placeholder=" ID <?php echo $i; ?>">
                            </div></div>

                            <div class="col-md-2">
                          <div class="form-group">
                              <!-- <label id="section1">Name <?php echo $i; ?></label> -->
                              <input type="text" class="form-control" id="name<?php echo $i; ?>" name="name<?php echo $i; ?>" placeholder="Name <?php echo $i; ?>">
                            </div></div>

                          <div class="col-md-2">
                            <div class="form-group">
                              <!-- <label id="section1">Contact Number <?php echo $i; ?></label> -->
                              <input type="text" class="form-control" id="contact<?php echo $i; ?>" name="contact<?php echo $i; ?>" placeholder=" Contact Number <?php echo $i; ?>">
                            </div></div>
                          

                          
                          <div class="col-md-2">
                            <div class="form-group">
                              <!-- <label id="section1">Operational Area <?php echo $i; ?></label> -->
                              <input type="text" class="form-control" id="operationalarea<?php echo $i; ?>" name="operationalarea<?php echo $i; ?>" placeholder="Operational Area <?php echo $i; ?>">
                            </div>
                            
                          </div>

                          <div class="col-md-2">
                            <div class="form-group">
                              <!-- <label id="section1">Advisor #1</label> -->
                              <input type="text" class="form-control" id="advisor<?php echo $i; ?>f1" name="advisor<?php echo $i; ?>f1" placeholder="Advisor <?php echo $i; ?>">
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


                  
                  <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">
                    <!-- Assets -->
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          
                          <input type="text" class="form-control" id="cashandequivalents" name="cashandequivalents" placeholder="Enter Cash & Equivalents">
                        </div>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" id="inventory" name="inventory" placeholder="Enter Inventory">
                        </div>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" id="totcurrentassets" name="totcurrentassets" placeholder="Enter Total Current Assets">
                        </div>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" id="netfixedassets" name="netfixedassets" placeholder="Enter Net Fixed Assets">
                        </div>
                        <div class="form-group">
                         
                          <input type="text" class="form-control" id="othernoncurrentassets" name="othernoncurrentassets" placeholder="Enter Other Non Current Assets">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          
                          <input type="text" class="form-control" id="tradeaccrec" name="tradeaccrec" placeholder="Enter Trade Account Receivable">
                        </div>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" id="othercurrentassets" name="othercurrentassets" placeholder="Enter Other Current Assets">
                        </div>
                        
                        <div class="form-group">
                          
                          <input type="text" class="form-control" id="longterminv" name="longterminv" placeholder="Enter Long Term Investments">
                        </div>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" id="intgassets" name="intgassets" placeholder="Enter Intangible Assets">
                        </div>

                        <div class="form-group">
                         
                          <input type="text" class="form-control" id="totalassets" name="totalassets" placeholder="Enter Total Assets">
                        </div>

                      </div>
                    </div>
                    <div class="card-header">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-3">
                      </div>
                      <div class="col-md-3">
                        <input type="submit" class="btn btn-primary" id="submitBtn" name="submit" ></input>
                      </div>
                      <div class="col-md-3">
                        <button type="reset" class="btn btn-default" id="resetBtn">Reset</button>
                      </div>
                      <div class="col-md-3">
                      </div>
                    </div>
                </div>
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
          </form>
      </div>
    </section>
</body>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<script>

  var today = new window.Date().toISOString().split('T')[0];
  document.getElementsByName("date")[0].setAttribute('min', today);

  

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

