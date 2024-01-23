<?php 

 include 'db.php';


header('Access-Control-Allow-Origin: ' . '*');
header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, PATCH, DELETE');

 $country_code=$_POST['country_code'];
 $ph_no=$_POST['phone'];
 $action=$_POST['action'];



if($action=='login'){

	$chk_no="SELECT * FROM `user_tbl` WHERE `ph_no`='$ph_no'";

	$chk_q=mysqli_query($conn,$chk_no);

    if(mysqli_num_rows($chk_q)>0){
		 echo "exist";
    }else{
        $otp=rand(111111,999999);
		$insert_phone="INSERT INTO `user_tbl`(`country_code`, `ph_no`, `otp`)VALUES('$country_code','$ph_no','$otp')";
		mysqli_query($conn,$insert_phone);

		echo "insert";
	}

	


	

	
}//chk login type





 ?>