<?php
    session_start();
    if($_SESSION['user_type'] !== 'admin') {
        session_unset();
        header("location:".SERVER_NAME."/".FOLDER_NAME."/PHP/login.php");
    }

	include_once './header.php';
	include_once './config.php';
	require_once '../vendor/autoload.php'; 

	if(isset($_POST['sub']))
	{
		$count = (int)$_POST['count'];
		$current_user_id = $_POST["user_id"];
        $titlefont_size = 14;
        $date = $_POST['date'];
       /* $years = array('1996','1997','1998','1999','2000','2001','2002','2003','2004');
        print_r($years);
        exit();*/

       

        // random year between 1996 to 2004
        $rand_year = rand(1996,2004);

		for ($i = 1; $i<=$count; $i++)
		{
            $indexx = rand(1,8);
            $years = array('1996','1997','1998','1999','2000','2001','2002','2003','2004');
            $rand_year = $years[$indexx];

    		$img = imagecreatetruecolor(1700, 750);
			$fontbold = realpath('./source-sans-pro/SourceSansPro-Bold.otf');
            $font = realpath('./source-sans-pro/SourceSansPro-Regular.otf');
    		/*$font = 'arial.ttf';
    		$fontbold = 'arialbold.ttf';*/
             

    		$backcolor = imagecolorallocate($img, 252, 252, 252);
    		$textcolor = imagecolorallocate($img, 15, 15, 15);
    		imagefilledrectangle($img, 0, 0, 1800, 900, $backcolor);

    		$txt = "FILE INFORMATION";
    		$nme = "Serial Number ";
    		$txt1 = $faker->shuffle('ABHDfhdn0847AnF4');
    		$nme2 = "Business Id ";
    		$txt2 = 'BIZ/'.$rand_year.'/CKCW/'.rand(100000,999999);
    		$nme3 = "Analysis Year ";
    		$txt3 = $rand_year;
    		$nme4 = "Branch Location #1 ";
    		$txt4 = preg_replace("/\r|\n/", "", $faker->address());
    		$nme5 = "Branch Location #3 ";
    		$txt5 = preg_replace("/\r|\n/", "", $faker->address());
    		// $nme6 = "Branch Location #5 ";
    		// $txt6 = preg_replace("/\r|\n/", "", $faker->address());
    		$nme10 = "Branch Location #2  ";
    		$txt10 = preg_replace("/\r|\n/", "", $faker->address());
    		$nme11 = "Branch Location #4  ";
    		$txt11 = preg_replace("/\r|\n/", "", $faker->address());
    		$nme12 = "File Number  ";
    		$txt12 = $faker->bothify('?????-#####');
    		$nme13 = "Accountant ID  ";
    		$txt13 = 'ACT/'.$rand_year.'/PGOF/'.rand(100000,999999);
    		// $nme14 = "Branch Location #6  ";
    		// $txt14 = $faker->address();
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
            $contact1 = '(xxxx)-xxx-'.rand(1000,9999);
            $operational1 = preg_replace("/\r|\n/", "", $faker->address());
            $code1 = $faker->areaCode();
            $adv1 = $na = $faker->name($gender = null |`male`|`female`);
            $adv11 = $na = $faker->name($gender = null |`male`|`female`);


            $nme19 = "2 ";
            $id2 = $faker->shuffle('1234560789');
            $name2 = $faker->name($gender = null |`male`|`female`);
            $contact2 = '(xxxx)-xxx-'.rand(1000,9999);
            $operational2 = preg_replace("/\r|\n/", "", $faker->address());
            $code2 = $faker->areaCode();
            $adv2 = $na = $faker->name($gender = null |`male`|`female`);
            $adv12 = $na = $faker->name($gender = null |`male`|`female`);

            $nme20 = "3 ";
            $id3 = $faker->shuffle('1234560789');
            $name3 = $faker->name($gender = null |`male`|`female`);
            $contact3 = '(xxxx)-xxx-'.rand(1000,9999);
            $operational3 = preg_replace("/\r|\n/", "", $faker->address());
            $code3 = $faker->areaCode();
            $adv3 = $na = $faker->name($gender = null |`male`|`female`);
            $adv13 = $na = $faker->name($gender = null |`male`|`female`);

            $nme21 = "4 ";
            $id4 = $faker->shuffle('1234560789');
            $name4 = $faker->name($gender = null |`male`|`female`);
            $contact4 = '(xxxx)-xxx-'.rand(1000,9999);
            $operational4 = preg_replace("/\r|\n/", "", $faker->address());
            $code4 = $faker->areaCode();
            $adv4 = $na = $faker->name($gender = null |`male`|`female`);
            $adv14 = $na = $faker->name($gender = null |`male`|`female`);

            $nme22 = "5 ";
            $id5 = $faker->shuffle('1234560789');
            $name5 = $faker->name($gender = null |`male`|`female`);
            $contact5 = '(xxxx)-xxx-'.rand(1000,9999);
            $operational5 = preg_replace("/\r|\n/", "", $faker->address());
            $code5 = $faker->areaCode();
            $adv5 = $na = $faker->name($gender = null |`male`|`female`);
            $adv15 = $na = $faker->name($gender = null |`male`|`female`);


            $arr = array(
                   array('#','ID','Name','Contact Number','Operational Area','Advisor 1','Advisor 2'),
                   array($nme18,$id1,$name1,$contact1,$operational1,$code1,$adv1,''),
                   array($nme19,$id2,$name2,$contact2,$operational2,$code2,$adv2,''),
                   array($nme20,$id3,$name3,$contact3,$operational3,$code3,$adv3,''),
                   array($nme21,$id4,$name4,$contact4,$operational4,$code4,$adv4,''),
                   array($nme22,$id5,$name5,$contact5,$operational5,$code5,$adv5,'')
            );



            
            $nme23 = "ASSETS ";

            $nme24 = "Cash & Equivalents ";
            $txt24 = $faker->numerify('USD###,###.00');
            $nme25 = "Inventory ";
            $txt25 = $faker->numerify('USD###,###.00');
            $nme26 = "Total Current Assets ";
            $txt26 = $faker->numerify('USD###,###.00');
            $nme27 = "Net Fixed Assets ";
            $txt27 = $faker->numerify('USD###,###.00');
            $nme28 = "Other Non Current Assets ";
            $txt28 = $faker->numerify('USD###,###.00');
            $nme29 = "Trade Accounts receivable ";
            $txt29 = $faker->numerify('USD###,###.00');
            $nme30 = "other Current Assets ";
            $txt30 = $faker->numerify('USD###,###.00');
            $nme31 = "Long-term Investments ";
            $txt31 = $faker->numerify('USD###,###.00');
            $nme32 = "intangible Assets ";
            $txt32 = $faker->numerify('USD###,###.00');
            $nme33 = "Total Assets ";
            $txt33 = $faker->numerify('USD###,###.00');


    		// imagestring($img, 5, 10, 20, $txt, $textcolor);
            imagettftext($img, 20, 0, 10, 40, $textcolor, $fontbold, $txt);
            /*imagettftext($img, 5, 0, 10, 20, $textcolor, $fontbold, $txt);*/
            /*imagettftext($img, 20, 0, 400, 40, $textcolor, $fontbold, $txt);*/
    		/**/
            imagettftext($img, $titlefont_size, 0, 10, 70, $textcolor, $fontbold, $nme);
    		// imagestring($img, 5,10 , 60, $nme, $textcolor);
            imagettftext($img, $titlefont_size, 0, 220, 70, $textcolor, $font, $txt1);
    		// imagestring($img, 5, 220, 60, $txt1, $textcolor);
            imagettftext($img, $titlefont_size, 0, 10, 110, $textcolor, $fontbold, $nme2);
    		// imagestring($img, 5, 10, 100, $nme2, $textcolor);
            imagettftext($img, $titlefont_size, 0, 220, 110, $textcolor, $font, $txt2);
    		// imagestring($img, 5, 220, 100, $txt2, $textcolor);
            imagettftext($img, $titlefont_size, 0, 10, 150, $textcolor, $fontbold, $nme3);
    		// imagestring($img, 5, 10, 140, $nme3, $textcolor);
            imagettftext($img, $titlefont_size, 0, 220, 150, $textcolor, $font, $txt3);
    		// imagestring($img, 5, 220, 140, $txt3, $textcolor);
            imagettftext($img, $titlefont_size, 0, 10, 190, $textcolor, $fontbold, $nme4);
    		// imagestring($img, 5, 10, 190, $nme4, $textcolor);
            imagettftext($img, $titlefont_size, 0, 220, 190, $textcolor, $font, $txt4);
    		// imagestring($img, 5, 220, 190, $txt4, $textcolor);

            imagettftext($img, $titlefont_size, 0, 10, 260, $textcolor, $fontbold, $nme5);
    		// imagestring($img, 5, 10, 230, $nme5, $textcolor);
            imagettftext($img, $titlefont_size, 0, 220, 260, $textcolor, $font, $txt5);
    		// imagestring($img, 5, 220, 230, $txt5, $textcolor);
    		/*imageline($img,2,250,1000,250,$textcolor);*/
            // imagettftext($img, $titlefont_size, 0, 10, 280, $textcolor, $fontbold, $nme6);
    		// imagestring($img, 5, 10, 270, $nme6, $textcolor);
            // imagettftext($img, $titlefont_size, 0, 220, 280, $textcolor, $font, $txt6);
            // imagestring($img, 5, 220, 270, $txt6, $textcolor);

            imagettftext($img, $titlefont_size, 0, 900, 190, $textcolor, $fontbold, $nme10);
            // imagestring($img, 5, 900, 190, $nme10, $textcolor);
            imagettftext($img, $titlefont_size, 0, 1110, 190, $textcolor, $font, $txt10);
            // imagestring($img, 5, 1110, 190, $txt10, $textcolor);
            imagettftext($img, $titlefont_size, 0, 900, 260, $textcolor, $fontbold, $nme11);
            // imagestring($img, 5, 900, 230, $nme11, $textcolor);
            imagettftext($img, $titlefont_size, 0, 1110, 260, $textcolor, $font, $txt11);
            // imagestring($img, 5, 1110, 230, $txt11, $textcolor);
            imagettftext($img, $titlefont_size, 0, 900, 70, $textcolor, $fontbold, $nme12);
            // imagestring($img, 5,900, 60, $nme12, $textcolor);
            imagettftext($img, $titlefont_size, 0, 1110, 70, $textcolor, $font, $txt12);
            // imagestring($img, 5, 1110, 60, $txt12, $textcolor);
            imagettftext($img, $titlefont_size, 0, 900, 110, $textcolor, $fontbold, $nme13);
            // imagestring($img, 5, 900, 100, $nme13, $textcolor);
            imagettftext($img, $titlefont_size, 0, 1110, 110, $textcolor, $font, $txt13);
            // imagestring($img, 5, 1110, 100, $txt13, $textcolor);
            // imagettftext($img, $titlefont_size, 0, 900, 280, $textcolor, $fontbold, $nme14);
            // imagestring($img, 5, 900, 270, $nme14, $textcolor);
            // imagettftext($img, $titlefont_size, 0, 1110, 280, $textcolor, $font, $txt14);
            // imagestring($img, 5, 1110, 270, $txt14, $textcolor);

            imageline($img,5,310,1800,310,$textcolor);
            imagettftext($img, 20, 0, 10, 340, $textcolor, $fontbold, $nme15);
            // imagestring($img, 5,10 , 340, $nme15, $textcolor);
            imagettftext($img, $titlefont_size, 0, 10, 360, $textcolor, $fontbold, $nme16);
            // imagestring($img, 5,10 , 360, $nme16, $textcolor);
            imagettftext($img, $titlefont_size, 0, 100, 360, $textcolor, $fontbold, $nme17);
            // imagestring($img, 5,180 , 360, $nme17, $textcolor);
            imagettftext($img, $titlefont_size, 0, 250, 360, $textcolor, $fontbold, $name);
            // imagestring($img, 5,250 , 360, $name, $textcolor);
            imagettftext($img, $titlefont_size, 0, 500, 360, $textcolor, $fontbold, $contact);
            // imagestring($img, 5,500 , 360, $contact, $textcolor);
            imagettftext($img, $titlefont_size, 0, 700, 360, $textcolor, $fontbold, $operational);
            // imagestring($img, 5,700 , 360, $operational, $textcolor);
            imagettftext($img, $titlefont_size, 0, 1200, 360, $textcolor, $fontbold, $advisor);
            // imagestring($img, 5,1200 , 360, $advisor, $textcolor);
            // imagettftext($img, $titlefont_size, 0, 1450, 360, $textcolor, $fontbold, $advisor1);
            // imagestring($img, 5,1450 , 360, $advisor1, $textcolor);

            imagettftext($img, $titlefont_size,0,10 , 400,$textcolor, $font,$nme18);            
            imagettftext($img, $titlefont_size,0,100 , 400,$textcolor, $font,$id1,);
            imagettftext($img, $titlefont_size,0,250 , 400,$textcolor, $font,$name1);
            imagettftext($img, $titlefont_size,0,500 , 400,$textcolor, $font,$contact1);
            imagettftext($img, $titlefont_size,0,700 , 400,$textcolor, $font,$operational1);
            // imagettftext($img, $titlefont_size,0,1060 , 400,$textcolor, $font,$code1);
            imagettftext($img, $titlefont_size,0,1200 , 400,$textcolor, $font,$adv1);
            // imagettftext($img, $titlefont_size,0,1450 , 400,$textcolor, $font,$adv11);

            imagettftext($img, $titlefont_size, 0,100 , 430,$textcolor,$font, $id2);
            imagettftext($img, $titlefont_size, 0,250 , 430,$textcolor,$font, $name2);
            imagettftext($img, $titlefont_size, 0,500 , 430,$textcolor,$font, $contact2);
            imagettftext($img, $titlefont_size, 0,700 , 430,$textcolor,$font, $operational2);
            // imagettftext($img, $titlefont_size, 0,1060 , 430,$textcolor,$font, $code2);
            imagettftext($img, $titlefont_size, 0,1200 , 430,$textcolor,$font, $adv2);
            // imagettftext($img, $titlefont_size, 0,1450 , 430,$textcolor,$font, $adv12);

            imagettftext($img, $titlefont_size, 0,100 , 460,$textcolor,$font, $id3);
            imagettftext($img, $titlefont_size, 0,250 , 460,$textcolor,$font, $name3);
            imagettftext($img, $titlefont_size, 0,500 , 460,$textcolor,$font, $contact3);
            imagettftext($img, $titlefont_size, 0,700 , 460,$textcolor,$font, $operational3);
            // imagettftext($img, $titlefont_size, 0,1060 , 460,$textcolor,$font, $code3);
            imagettftext($img, $titlefont_size, 0,1200 , 460,$textcolor,$font, $adv3);
            // imagettftext($img, $titlefont_size, 0,1450 , 460,$textcolor,$font, $adv13);

            imagettftext($img, $titlefont_size, 0,100 , 490,$textcolor,$font, $id4);
            imagettftext($img, $titlefont_size, 0,250 , 490,$textcolor,$font, $name4);
            imagettftext($img, $titlefont_size, 0,500 , 490,$textcolor,$font, $contact4);
            imagettftext($img, $titlefont_size, 0,700 , 490,$textcolor,$font, $operational4);
            // imagettftext($img, $titlefont_size, 0,1060 , 490,$textcolor,$font, $code4);
            imagettftext($img, $titlefont_size, 0,1200 , 490,$textcolor,$font, $adv4);
            // imagettftext($img, $titlefont_size, 0,1450 , 490,$textcolor,$font, $adv14);

            imagettftext($img, $titlefont_size, 0,100 , 520,$textcolor,$font, $id5);
            imagettftext($img, $titlefont_size, 0,250 , 520,$textcolor,$font, $name5);
            imagettftext($img, $titlefont_size, 0,500 , 520,$textcolor,$font, $contact5);
            imagettftext($img, $titlefont_size, 0,700 , 520,$textcolor,$font, $operational5);
            // imagettftext($img, $titlefont_size, 0,1060 , 520,$textcolor,$font, $code5);
            imagettftext($img, $titlefont_size, 0,1200 , 520,$textcolor,$font, $adv5);
            // imagettftext($img, $titlefont_size, 0,1450 , 520,$textcolor,$font, $adv15);



            imagettftext($img, $titlefont_size,0,10 , 430, $textcolor ,$font , $nme19);
            imagettftext($img, $titlefont_size,0,10 , 460, $textcolor ,$font , $nme20);
            imagettftext($img, $titlefont_size,0,10 , 490, $textcolor ,$font , $nme21);
            imagettftext($img, $titlefont_size,0,10 , 520, $textcolor ,$font , $nme22);            
            
            imageline($img,5,535,1800,535,$textcolor);

            imagettftext($img, 20,0,10 , 557, $textcolor ,$fontbold , $nme23);

            imagettftext($img, $titlefont_size,0,10 , 590, $textcolor ,$fontbold , $nme24);
            imagettftext($img, $titlefont_size,0,400 , 590, $textcolor ,$font , $txt24)
            ;
            imagettftext($img, $titlefont_size,0,10 , 620, $textcolor ,$fontbold , $nme25);
            imagettftext($img, $titlefont_size,0,400 , 620, $textcolor ,$font , $txt25);

            imagettftext($img, $titlefont_size,0,10 , 650, $textcolor ,$fontbold , $nme26);
            imagettftext($img, $titlefont_size,0,400 , 650, $textcolor ,$font , $txt26);

            imagettftext($img, $titlefont_size,0,10 , 680, $textcolor ,$fontbold , $nme27);
            imagettftext($img, $titlefont_size,0,400 , 680, $textcolor ,$font , $txt27);

            imagettftext($img, $titlefont_size,0,10 , 710, $textcolor ,$fontbold , $nme28);
            imagettftext($img, $titlefont_size,0,400 , 710, $textcolor ,$font , $txt28);

            imagettftext($img, $titlefont_size,0, 900, 590, $textcolor ,$fontbold , $nme29);
            imagettftext($img, $titlefont_size,0,1200 , 590, $textcolor ,$font , $txt29);

            imagettftext($img, $titlefont_size,0, 900, 620, $textcolor ,$fontbold , $nme30);
            imagettftext($img, $titlefont_size,0,1200 , 620, $textcolor ,$font , $txt30);

            imagettftext($img, $titlefont_size,0, 900, 650, $textcolor ,$fontbold , $nme31);
            imagettftext($img, $titlefont_size,0,1200 , 650, $textcolor ,$font , $txt31);

            imagettftext($img, $titlefont_size,0, 900, 680, $textcolor ,$fontbold , $nme32);
            imagettftext($img, $titlefont_size,0,1200 , 680, $textcolor ,$font , $txt32);

            imagettftext($img, $titlefont_size,0, 900, 710, $textcolor ,$fontbold , $nme33);
            imagettftext($img, $titlefont_size,0,1200 , 710, $textcolor ,$font , $txt33);

            
    	
    		/*imagettftext($img, 20, 0, 400, 40, $textcolor, $fontbold, $txt);
    		imagettftext($img, 12, 0, 35, 70, $textcolor, $fontbold, $nme);
    		imagettftext($img, 12, 0, 150, 170, $textcolor, $font, $txt1);*/

    		imagesetthickness($img, 10);
            $randomname = rand(1000000,10000000);
    		imagepng($img,'./' . $randomname . image_type_to_extension(IMAGETYPE_PNG));

    		// if($img)
            // {
            //     echo "Image Created Successfully";
            // }
            // else
            // {
            //     echo "Something Went Wrong";
            // }

            $string = serialize($arr); 
  
            $newvar = unserialize($string);

            $sql = "INSERT INTO image_record(serial_number,business_id,analysis_year,branch_location1,branch_location2,branch_location3,branch_location4,branch_location5,branch_location6,file_number,accountant_id,stackholder,cash_equivalents,invtory,total_current_assets,net_fixed_assets,other_non_current_assets,trade_accounts_receivable,other_current_assets,long_term_investments,  intangible_assets,total_asstes,assign_id,image_name,work_assign_date) VALUES('$txt1','$txt2','$txt3','$txt4','$txt10','$txt5','$txt11','','','$txt12','$txt13','$string','$txt24','$txt25','$txt26','$txt27','$txt28','$txt29','$txt30','$txt31','$txt32','$txt33','$current_user_id','$randomname.png','$date') ";
            
            if($result = mysqli_query($conn,$sql))
            {
                echo "<script>alert('Successfully Image Created');</script>";
            }
            else
            {
                echo "Something went wrong";
            }
    		
		}
        

		// $check = 'SELECT COUNT(*) AS total FROM image_record WHERE assign_id = 0';
		// $sql = mysqli_query($conn,$check);
		// $data = mysqli_fetch_assoc($sql);
		// $user_id = $_POST['user_id'];
		
		// /*$check = 'SELECT * FROM image_record WHERE assign_id = 0';
		// $sql = mysqli_query($conn,$check);
		// $result = mysqli_num_rows($sql);
		// print_r($result);
		// exit;*/
		 
		// if($data['total'] >= $count)
		// {
		// 	echo "Hiiiiii";
		// 	$update = "UPDATE image_record SET assign_id = $user_id WHERE assign_id = 0 LIMIT $count ";
		// 	$result = mysqli_query($conn,$update);
		// 	if($result)
		// 	{
		// 		echo "Update Successfully";
		// 	}
		// 	else{
		// 		echo "Something Went Wrong!";
		// 	}
			
		// }else{
		// 	echo "Create new Images";
		// }


	}
    else{
        header("location:".SERVER_NAME."/".FOLDER_NAME."/PHP/login.php");
      }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
				
		<form method="POST">
		
			<div class="card-body">
			<div class="form-group">
			<div class="col-xs-2">
				<input type="text" disabled="disabled" name="user_assign" value="<?php echo $_GET['id']; ?>">
				<input type="hidden"  name="user_id" value="<?php echo $_GET['id']; ?>">
                <br>
                <input type="date" id="date"  name="date" value="">
                <br>
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
	</center>
</body>
<script>
    var today = new window.Date().toISOString().split('T')[0];
    document.getElementsByName("date")[0].setAttribute('min', today);  
</script>
</html>
