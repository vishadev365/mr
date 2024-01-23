<?php  

header('Access-Control-Allow-Origin: ' . '*');
header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, PATCH, DELETE');

include '../db.php';

$mr_id=$_POST['mr_id'];
  
    $get_sql = "SELECT * FROM `chamber_tbl` WHERE `reffered_by`='$mr_id'";
    $data = mysqli_query($conn,$get_sql);
    $row = mysqli_num_rows($data);
    if ($row < 1) {
      echo json_encode(array('message' => 'No Record Found.', 'status' => false));
    }else {



      while($row_chamber=mysqli_fetch_assoc($data)){



       $chamber_id  = $row_chamber['chamber_id'];
       $chamber_name  = $row_chamber['chamber_name'];
       $address  = $row_chamber['address'];
       
    

$add=array(
  'chamber_id' => $chamber_id,
  'chamber_name' => $chamber_name,
  'address' => $address
);

  $user_address[] = $add;

      } //--end while

       $output = $user_address;
     echo json_encode($output);
    }

?>