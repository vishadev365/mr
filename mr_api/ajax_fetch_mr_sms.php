<?php 

header('Access-Control-Allow-Origin: ' . '*');
header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, PATCH, DELETE');
 include '../db.php';


 
  $mr_id = $_POST['mr_id'];
    $get_sql = "SELECT * FROM `help_mr_tbl` WHERE `mr_id` = '$mr_id'";
    $data = mysqli_query($conn,$get_sql);
    $row = mysqli_num_rows($data);
    if ($row < 1) {
      echo json_encode(array('message' => 'No Record Found.', 'status' => false));
    }else {
      $output = mysqli_fetch_all($data, MYSQLI_ASSOC);
      echo json_encode($output);
    }



?>