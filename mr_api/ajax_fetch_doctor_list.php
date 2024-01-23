<?php   

header('Access-Control-Allow-Origin: ' . '*');
header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, PATCH, DELETE');
 include '../db.php';


$doctor="SELECT * FROM `doctor_tbl`";
$doctor_q=mysqli_query($conn,$doctor);

    $row = mysqli_num_rows($doctor_q);


    if ($row < 1) {
      echo json_encode(array('message' => 'No Record Found.', 'status' => false));
    }else {
      $output = mysqli_fetch_all($doctor_q, MYSQLI_ASSOC);
      echo json_encode($output);
    }



?>