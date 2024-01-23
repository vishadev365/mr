
<?php   



header('Access-Control-Allow-Origin: ' . '*');
header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, PATCH, DELETE');

// include 'db.php';
include '../db.php';
// var_dump($_POST);die;
$mr_id=$_POST['mr_id'];
$from_date=$_POST['from_date'];
$to_date=$_POST['to_date'];






$get_sql = "SELECT * FROM `chamber_tbl` WHERE `reffered_by`='$mr_id'";
  $get_chamber=mysqli_query($conn,$get_sql);

  while($row_chamber=mysqli_fetch_assoc($get_chamber)){

       $chamber_id=$row_chamber['chamber_id'];




    $get_appoint=mysqli_query($conn,"SELECT * FROM `appointment_tbl` WHERE `appointment_date` BETWEEN '$from_date' AND '$to_date' AND `chamber_id`='$chamber_id'"); 

    $count_id=0;
    while ($row_count_app =mysqli_fetch_assoc($get_appoint)) {
            $count_id++;
     } 
    

     $chamber_name=$row_chamber['chamber_name'];
     $address=$row_chamber['address'];
if($count_id != 0){
    $add=array(
        'count_id' => $count_id,
        'chamber_name' => $chamber_name,
        'address' => $address
    );

$user_address[] = $add;
    
}
    

    



  
}

 
    // $add=array('count_id' => $id);
    // $user_address = $add;

    $output = $user_address;
     echo json_encode($add);





?>