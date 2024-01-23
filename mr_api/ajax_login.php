<?php 



header('Access-Control-Allow-Origin: ' . '*');
header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, PATCH, DELETE');
 include '../db.php';


 $country_code=$_POST['country_code'];
 $ph_no=$_POST['phone'];
 $action=$_POST['action'];



if($action=='login'){

	$chk_no="SELECT * FROM `mr_tbl` WHERE `ph_no`='$ph_no'";

	$chk_q=mysqli_query($conn,$chk_no);

    if(mysqli_num_rows($chk_q)>0){

    	$row_update=mysqli_fetch_assoc($chk_q);
    	$otp=rand(111111,999999);


		$update_otp="UPDATE `mr_tbl` SET `otp`='$otp' WHERE `ph_no`='$row_update[ph_no]'";
		mysqli_query($conn,$update_otp);

		$get_mr_id_u="SELECT * FROM `mr_tbl` WHERE `ph_no`='$ph_no'";

	    $get_mr_id_q_u=mysqli_query($conn,$get_mr_id_u);

    	$get_mr_id_q_row_u=mysqli_fetch_assoc($get_mr_id_q_u);


		echo $get_mr_id_q_row_u['mr_id'];
        // echo "exist";
    }else{
        $otp=rand(111111,999999);
		$insert_phone="INSERT INTO `mr_tbl`(`country_code`, `ph_no`, `otp`)VALUES('$country_code','$ph_no','$otp')";
		mysqli_query($conn,$insert_phone);

		$get_mr_id="SELECT * FROM `mr_tbl` WHERE `ph_no`='$ph_no'";

	    $get_mr_id_q=mysqli_query($conn,$get_mr_id);

    	$get_mr_id_q_row=mysqli_fetch_assoc($get_mr_id_q);


		echo $get_mr_id_q_row['mr_id'];
	}

	


	

	
}//chk login type





 ?>