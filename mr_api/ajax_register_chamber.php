<?php 



header('Access-Control-Allow-Origin: ' . '*');
header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, PATCH, DELETE');
 include '../db.php';

 $chamber_ph_no=$_POST['chamber_ph_no'];
 $mr_id=$_POST['mr_id'];
 $action=$_POST['action'];

 if($action=='chamber'){

 	$get_mr_id=mysqli_query($conn,"SELECT * FROM `mr_tbl` WHERE `mr_id`='$mr_id'");
 	$row=mysqli_fetch_assoc($get_mr_id);
 	$mr_id=$row['mr_id'];

 	date_default_timezone_set('Asia/Calcutta'); 

    $create_date=date('Y-m-d');
    $create_time=date('H:i:s');
    $insert_date_time=date('Y-m-d H:i:s');



    $insert_sql="INSERT INTO `pending_chamber_tbl`( `chamber_ph_no`, `mr_id`, `create_date`, `create_time`) VALUES ('$chamber_ph_no','$mr_id','$create_date','$create_time')";

    $insert_q=mysqli_query($conn,$insert_sql);
    echo $insert_q;

 }


?>