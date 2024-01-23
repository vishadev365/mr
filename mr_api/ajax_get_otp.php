<?php 



header('Access-Control-Allow-Origin: ' . '*');
header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, PATCH, DELETE');
 include '../db.php';


 $mr_id=$_POST['mr_id'];

	$chk_otp="SELECT * FROM `mr_tbl` WHERE `mr_id`='$mr_id'";

	$otp_q=mysqli_query($conn,$chk_otp);

	if(mysqli_num_rows($otp_q)>0){
           $user_row_otp=mysqli_fetch_assoc($otp_q);
      
     echo $user_row_otp['otp'];
	}



 ?>