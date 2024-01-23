<?php   



header('Access-Control-Allow-Origin: ' . '*');
header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, PATCH, DELETE');

// include 'db.php';
include '../db.php';

$mr_id=$_POST['mr_id'];

        date_default_timezone_set('Asia/Calcutta'); 
        $to_d=date("Y-m-d");
// $count_id=0;
        $id=0;
  $get_chamber=mysqli_query($conn,"SELECT * FROM `chamber_tbl` WHERE `reffered_by`='$mr_id'");

  while($row_chamber=mysqli_fetch_assoc($get_chamber)){

     $chamber_id=$row_chamber['chamber_id'];

  $get_appoint=mysqli_query($conn,"SELECT * FROM `appointment_tbl` WHERE `appointment_date`='$to_d' AND  `chamber_id`='$chamber_id'");
  while($row_appoint=mysqli_fetch_assoc($get_appoint)){

   $id++;
  
}
  
}//end 

 
    $add=array('count_id' => $id);
    $user_address = $add;

    $output = $user_address;
     echo json_encode($output);


?>