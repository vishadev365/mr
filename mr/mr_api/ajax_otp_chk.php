<?php 

 include 'db.php';


header('Access-Control-Allow-Origin: ' . '*');
header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, PATCH, DELETE');

 $otp=$_POST['otp'];
 $ph_no=$_POST['ph_no'];
 $action=$_POST['action'];



if($action=='check_otp'){

	$chk_otp="SELECT * FROM `user_tbl` WHERE `otp`='$otp' AND `ph_no`='$ph_no'";

	$otp_q=mysqli_query($conn,$chk_otp);
	
    $row_otp=mysqli_fetch_assoc($otp_q);

	    if($row_otp['otp'] == $otp){

		 echo "new_user";

        }else{

        

		echo "Error";
	}



	


	

	
}//chk otp type





 ?>