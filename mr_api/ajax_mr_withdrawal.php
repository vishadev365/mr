<?php   


header('Access-Control-Allow-Origin: ' . '*');
header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, PATCH, DELETE');
include 'db.php';

// echo "<pre>";
// print_r($_POST);

 $mr_id=$_POST['mr_id'];
 $pending_amount=$_POST['mr_wallet_blance'];

    date_default_timezone_set('Asia/Calcutta'); 

    $create_date=date('Y-m-d');

  $mr_dtl="INSERT INTO `mr_withdrawal_tbl`( `mr_id`, `pending_amount`,  `payment_status`, `request_date`,`create_date`) VALUES ('$mr_id','$pending_amount','pending','$create_date','$create_date')";
  $chk_mr=mysqli_query($conn,$mr_dtl);

  if($chk_mr){

    echo json_encode(array( 'status' =>true));
  }else{
    echo  json_encode(array( 'status' =>false));

  }


  
    

?>