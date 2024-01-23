<?php 



header('Access-Control-Allow-Origin: ' . '*');
header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, PATCH, DELETE');
 include '../db.php';


 $sms=$_POST['sms'];
 $mr_id=$_POST['mr_id'];

 // echo $sms.'=========='.$ph_no;
 // // $action=$_POST['action'];



//    $fetch_mr = "SELECT * FROM `mr_tbl` WHERE `mr_id`='$mr_id'";
//    $mr_q=mysqli_query($conn,$fetch_mr);
//    $mr_row=mysqli_fetch_assoc($mr_q);

// $mr_id=$mr_row['mr_id'];

   date_default_timezone_set('Asia/Calcutta'); 

  $create_date=date('Y-m-d');
  $create_time=date('H:i:s');
  $insert_date_time=date('Y-m-d H:i:s');


 $inster_help="INSERT INTO `help_mr_tbl`( `mr_id`, `sms`, `write_by`, `create_date`, `create_time`) VALUES ('$mr_id','$sms','mr','$create_date','$create_time')";

	$help_q=mysqli_query($conn,$inster_help);

	if($help_q){
   echo "success";
	}else{
   echo "fail";

	}

?>