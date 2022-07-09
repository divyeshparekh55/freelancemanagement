<?php 

  include_once 'config.php';
  include_once '../config/config.php';

  if(isset($_POST['register']))
  {
     $fname = $_POST['fname'];
     $Email = $_POST['email'];
     $pass = $_POST['pass'];
     $add = $_POST['add'];
     $phone = $_POST['phone'];
     $images = $_POST['count'];
      
     $sql = "INSERT INTO register (fname,email,password,address,phone_number,images) VALUES ('$fname','$Email','$pass','$add','$phone','$images')";
    
     if(mysqli_query($conn,$sql))
     {
        header("location:".SERVER_NAME."/".FOLDER_NAME."/PHP/data.php");
     }else
     {
       echo "Something went wrong";
     }


  }

  include_once 'header.php ';
?>


<?php
    
    
  require_once '../vendor/autoload.php';
  $faker = Faker\Factory::create();

  if(isset($_POST['register']))
  {
    $count = (int)$_POST['count'];

    for ($i = 1; $i<=$count; $i++)
    {
        

        $img = imagecreatetruecolor(1700, 750);
        /*$font = 'arial.ttf';
        $fontbold = 'arialbold.ttf';*/
             $font = 'arial.ttf';
             $fontbold = './arialbold.ttf';

        $backcolor = imagecolorallocate($img, 252, 252, 252);
        $textcolor = imagecolorallocate($img, 15, 15, 15);
        imagefilledrectangle($img, 0, 0, 1800, 900, $backcolor);

        $txt = "FILE INFORMATION";
        $nme = "Serial Number ";
        $txt1 = $faker->shuffle('ABHDfhdn0847AnF4');
        $nme2 = "Business Id ";
        $txt2 = $faker->shuffle('divyesh/8564/parekh/123079');
        $nme3 = "Analysis Year ";
        $txt3 = $faker->year();
        $nme4 = "Branch Location #1 ";
        $txt4 = $faker->address();
        $nme5 = "Branch Location #3 ";
        $txt5 = $faker->address();
        $nme6 = "Branch Location #5 ";
        $txt6 = $faker->address();
        $nme10 = "Branch Location #2  ";
        $txt10 = $faker->address();
        $nme11 = "Branch Location #4  ";
        $txt11 = $faker->address();
        $nme12 = "File Number  ";
        $txt12 = $faker->bothify('?????-#####');
        $nme13 = "Accountant ID  ";
        $txt13 = $faker->bankAccountNumber();
        $nme14 = "Branch Location #6  ";
        $txt14 = $faker->address();
            $nme15 = "STAKEHOLDERS ";
            $nme16 = "#  ";
            $nme17 = "ID";
            $name = "Name";
            $contact = "Contact Number";
            $operational = "Operational Area";
            $advisor = "Advisor #1";
            $advisor1 = "Advisor #2";

            $nme18 = "1";
            $id1 = $faker->shuffle('1234560789');
            $name1 = $faker->name($gender = null |`male`|`female`);
            $contact1 = $faker->phoneNumber();
            $operational1 = $faker->state();
            $code1 = $faker->areaCode();
            $adv1 = $na = $faker->name($gender = null |`male`|`female`);
            $adv11 = $na = $faker->name($gender = null |`male`|`female`);


            $nme19 = "2 ";
            $id2 = $faker->shuffle('1234560789');
            $name2 = $faker->name($gender = null |`male`|`female`);
            $contact2 = $faker->phoneNumber();
            $operational2 = $faker->state();
            $code2 = $faker->areaCode();
            $adv2 = $na = $faker->name($gender = null |`male`|`female`);
            $adv12 = $na = $faker->name($gender = null |`male`|`female`);

            $nme20 = "3 ";
            $id3 = $faker->shuffle('1234560789');
            $name3 = $faker->name($gender = null |`male`|`female`);
            $contact3 = $faker->phoneNumber();
            $operational3 = $faker->state();
            $code3 = $faker->areaCode();
            $adv3 = $na = $faker->name($gender = null |`male`|`female`);
            $adv13 = $na = $faker->name($gender = null |`male`|`female`);

            $nme21 = "4 ";
            $id4 = $faker->shuffle('1234560789');
            $name4 = $faker->name($gender = null |`male`|`female`);
            $contact4 = $faker->phoneNumber();
            $operational4 = $faker->state();
            $code4 = $faker->areaCode();
            $adv4 = $na = $faker->name($gender = null |`male`|`female`);
            $adv14 = $na = $faker->name($gender = null |`male`|`female`);

            $nme22 = "5 ";
            $id5 = $faker->shuffle('1234560789');
            $name5 = $faker->name($gender = null |`male`|`female`);
            $contact5 = $faker->phoneNumber();
            $operational5 = $faker->state();
            $code5 = $faker->areaCode();
            $adv5 = $na = $faker->name($gender = null |`male`|`female`);
            $adv15 = $na = $faker->name($gender = null |`male`|`female`);


            $arr = array(
                   array('#','ID','Name','Contact Number','Operational Area','Advisor 1','Advisor 2'),
                   array($nme18,$id1,$name1,$contact1,$operational1,$code1,$adv1,$adv11),
                   array($nme19,$id2,$name2,$contact2,$operational2,$code2,$adv2,$adv12),
                   array($nme20,$id3,$name3,$contact3,$operational3,$code3,$adv3,$adv13),
                   array($nme21,$id4,$name4,$contact4,$operational4,$code4,$adv4,$adv14),
                   array($nme22,$id5,$name5,$contact5,$operational5,$code5,$adv5,$adv15)

            );



            
            $nme23 = "ASSETS ";

            $nme24 = "Cash & Equivalents ";
            $txt24 = $faker->numerify('USD####.00');
            $nme25 = "Inventory ";
            $txt25 = $faker->numerify('USD####.00');
            $nme26 = "Total Current Assets ";
            $txt26 = $faker->numerify('USD####.00');
            $nme27 = "Net Fixed Assets ";
            $txt27 = $faker->numerify('USD####.00');
            $nme28 = "Other Non Current Assets ";
            $txt28 = $faker->numerify('USD####.00');
            $nme29 = "Trade Accounts receivable ";
            $txt29 = $faker->numerify('USD####.00');
            $nme30 = "other Current Assets ";
            $txt30 = $faker->numerify('USD####.00');
            $nme31 = "Long-term Investments ";
            $txt31 = $faker->numerify('USD####.00');
            $nme32 = "intangible Assets ";
            $txt32 = $faker->numerify('USD####.00');
            $nme33 = "Total Assets ";
            $txt33 = $faker->numerify('USD####.00');
            $txt34 = $id;

                                                                      

            


        

        imagestring($img, 5, 10, 20, $txt, $textcolor);
            /*imagettftext($img, 5, 0, 10, 20, $textcolor, $fontbold, $txt);*/
            /*imagettftext($img, 20, 0, 400, 40, $textcolor, $fontbold, $txt);*/
        /**/
        imagestring($img, 5,10 , 60, $nme, $textcolor);
        imagestring($img, 5, 220, 60, $txt1, $textcolor);
        imagestring($img, 5, 10, 100, $nme2, $textcolor);
        imagestring($img, 5, 220, 100, $txt2, $textcolor);
        imagestring($img, 5, 10, 140, $nme3, $textcolor);
        imagestring($img, 5, 220, 140, $txt3, $textcolor);
        imagestring($img, 5, 10, 190, $nme4, $textcolor);
        imagestring($img, 5, 220, 190, $txt4, $textcolor);

        imagestring($img, 5, 10, 230, $nme5, $textcolor);
        imagestring($img, 5, 220, 230, $txt5, $textcolor);
        /*imageline($img,2,250,1000,250,$textcolor);*/
        imagestring($img, 5, 10, 270, $nme6, $textcolor);
            imagestring($img, 5, 220, 270, $txt6, $textcolor);

            imagestring($img, 5, 900, 190, $nme10, $textcolor);
            imagestring($img, 5, 1110, 190, $txt10, $textcolor);
            imagestring($img, 5, 900, 230, $nme11, $textcolor);
            imagestring($img, 5, 1110, 230, $txt11, $textcolor);
            imagestring($img, 5,900, 60, $nme12, $textcolor);
            imagestring($img, 5, 1110, 60, $txt12, $textcolor);
            imagestring($img, 5, 900, 100, $nme13, $textcolor);
            imagestring($img, 5, 1110, 100, $txt13, $textcolor);
            imagestring($img, 5, 900, 270, $nme14, $textcolor);
            imagestring($img, 5, 1110, 270, $txt14, $textcolor);
            imageline($img,5,310,1800,310,$textcolor);
            imagestring($img, 5,10 , 340, $nme15, $textcolor);
            imagestring($img, 5,10 , 360, $nme16, $textcolor);
            imagestring($img, 5,180 , 360, $nme17, $textcolor);
            imagestring($img, 5,420 , 360, $name, $textcolor);
            imagestring($img, 5,680 , 360, $contact, $textcolor);
            imagestring($img, 5,900 , 360, $operational, $textcolor);
            imagestring($img, 5,1200 , 360, $advisor, $textcolor);
            imagestring($img, 5,1500 , 360, $advisor1, $textcolor);
            imagestring($img, 5,10 , 390, $nme18, $textcolor);
            
            imagestring($img, 5,180 , 390, $id1, $textcolor);
            imagestring($img, 5,420 , 390, $name1, $textcolor);
            imagestring($img, 5,680 , 390, $contact1, $textcolor);
            imagestring($img, 5,900 , 390, $operational1, $textcolor);
            imagestring($img, 5,1025 , 390, $code1, $textcolor);
            imagestring($img, 5,1200 , 390, $adv1, $textcolor);
            imagestring($img, 5,1500 , 390, $adv11, $textcolor);

            imagestring($img, 5,180 , 410, $id2, $textcolor);
            imagestring($img, 5,420 , 410, $name2, $textcolor);
            imagestring($img, 5,680 , 410, $contact2, $textcolor);
            imagestring($img, 5,900 , 410, $operational2, $textcolor);
            imagestring($img, 5,1025 , 410, $code2, $textcolor);
            imagestring($img, 5,1200 , 410, $adv2, $textcolor);
            imagestring($img, 5,1500 , 410, $adv12, $textcolor);

            imagestring($img, 5,180 , 430, $id3, $textcolor);
            imagestring($img, 5,420 , 430, $name3, $textcolor);
            imagestring($img, 5,680 , 430, $contact3, $textcolor);
            imagestring($img, 5,900 , 430, $operational3, $textcolor);
            imagestring($img, 5,1025 , 430, $code3, $textcolor);
            imagestring($img, 5,1200 , 430, $adv3, $textcolor);
            imagestring($img, 5,1500 , 430, $adv13, $textcolor);

            imagestring($img, 5,180 , 450, $id4, $textcolor);
            imagestring($img, 5,420 , 450, $name4, $textcolor);
            imagestring($img, 5,680 , 450, $contact4, $textcolor);
            imagestring($img, 5,900 , 450, $operational4, $textcolor);
            imagestring($img, 5,1025 , 450, $code4, $textcolor);
            imagestring($img, 5,1200 , 450, $adv4, $textcolor);
            imagestring($img, 5,1500 , 450, $adv14, $textcolor);

            imagestring($img, 5,180 , 470, $id5, $textcolor);
            imagestring($img, 5,420 , 470, $name5, $textcolor);
            imagestring($img, 5,680 , 470, $contact5, $textcolor);
            imagestring($img, 5,900 , 470, $operational5, $textcolor);
            imagestring($img, 5,1025 , 470, $code5, $textcolor);
            imagestring($img, 5,1200 , 470, $adv5, $textcolor);
            imagestring($img, 5,1500 , 470, $adv15, $textcolor);



            imagestring($img, 5,10 , 410, $nme19, $textcolor);
            imagestring($img, 5,10 , 430, $nme20, $textcolor);
            imagestring($img, 5,10 , 450, $nme21, $textcolor);
            imagestring($img, 5,10 , 470, $nme22, $textcolor);
            imageline($img,5,520,1800,520,$textcolor);

            imagestring($img, 5,10 , 550, $nme23, $textcolor);

            imagestring($img, 5,10 , 590, $nme24, $textcolor);
            imagestring($img, 5,400 , 590, $txt24, $textcolor)
            ;
            imagestring($img, 5,10 , 620, $nme25, $textcolor);
            imagestring($img, 5,400 , 620, $txt25, $textcolor);

            imagestring($img, 5,10 , 650, $nme26, $textcolor);
            imagestring($img, 5,400 , 650, $txt26, $textcolor);

            imagestring($img, 5,10 , 680, $nme27, $textcolor);
            imagestring($img, 5,400 , 680, $txt27, $textcolor);

            imagestring($img, 5,10 , 710, $nme28, $textcolor);
            imagestring($img, 5,400 , 710, $txt28, $textcolor);

            imagestring($img, 5, 900, 590, $nme29, $textcolor);
            imagestring($img, 5,1200 , 590, $txt29, $textcolor);

            imagestring($img, 5, 900, 620, $nme30, $textcolor);
            imagestring($img, 5,1200 , 620, $txt30, $textcolor);

            imagestring($img, 5, 900, 650, $nme31, $textcolor);
            imagestring($img, 5,1200 , 650, $txt31, $textcolor);

            imagestring($img, 5, 900, 680, $nme32, $textcolor);
            imagestring($img, 5,1200 , 680, $txt32, $textcolor);

            imagestring($img, 5, 900, 710, $nme33, $textcolor);
            imagestring($img, 5,1200 , 710, $txt33, $textcolor);

            
      
        /*imagettftext($img, 20, 0, 400, 40, $textcolor, $fontbold, $txt);
        imagettftext($img, 12, 0, 35, 70, $textcolor, $fontbold, $nme);
        imagettftext($img, 12, 0, 150, 170, $textcolor, $font, $txt1);*/

        imagesetthickness($img, 10);

        imagepng($img,'./' . rand(100000,1000000) . image_type_to_extension(IMAGETYPE_PNG));

        if($img)
            {
                echo "<center>Image Created Successfully</center";
            }
            else
            {
                echo "Something Went Wrong";
            }

            $string = serialize($arr); 
  
// Unserializing the data in $string 
            $newvar = unserialize($string);

            foreach ($newvar as $key => $value) {
                foreach ($value as $key2 => $value2) {
                    print_r($value2);
                    echo "<br/>";
                }
            }


            $sql = "INSERT INTO image_record(serial_number,business_id,analysis_year,branch_location1,branch_location2,branch_location3,branch_location4,branch_location5,branch_location6,file_number,accountant_id,stackholder,cash_equivalents,invtory,total_current_assets,net_fixed_assets,other_non_current_assets,trade_accounts_receivable,other_current_assets,long_term_investments,  intangible_assets,total_asstes,assign_id) VALUES('$txt1','$txt2','$txt3','$txt4','$txt10','$txt5','$txt11','$txt6','$txt14','$txt12','$txt13','$string','$txt24','$txt25','$txt26','$txt27','$txt28','$txt29','$txt30','$txt31','$txt32','$txt33','$txt34') ";

            /*$sql = "INSERT INTO xxx(numb,busin,year) VALUES('$txt1','$txt2','$txt3')";*/
            

            if($result = mysqli_query($conn,$sql))
            {
                echo " Successfully Created";
            }
            else
            {
                echo "Something went wrong";
            }
        
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Register Member</title>
</head>
<body>
  <center>
  
      <div class="register-box">
  <div class="register-logo">
    <b>Add </b> USER</a>
  </div>  
      <form method="POST">
        
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="fname">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="pass">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Enter your address" name="add">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-map-marker"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="enter your phone number" name="phone">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-phone"></span>
            </div>
          </div>
        </div>

        <div class="form-group">
      <div class="col-xs-2">
      <select class="form-select form-select-sm" name="count">
          <option selected>Open to select numbers of image</option>
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

      
      
        
        <div class="row">
          
          <!-- /.col -->
          <div class="col-4">
            <button type="Clear" class="btn btn-outline-danger">Clear</button>
          </div>

          <div class="col-4">
            <button type="submit" class="btn btn-outline-primary" name="register">Register</button>
          </div>

          <!-- /.col -->
        </div>
        
      </form>
</div>
    </center>
</body>
</html>

