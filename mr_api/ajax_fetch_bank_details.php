<?php   


header('Access-Control-Allow-Origin: ' . '*');
header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, PATCH, DELETE');
include 'db.php';

// echo "<pre>";
// print_r($_POST);

 $mr_id=$_POST['mr_id'];
 $mr_wallet_blance=$_POST['mr_wallet_blance'];

  $mr_dtl="SELECT * FROM `mr_tbl` WHERE `mr_id`='$mr_id'";
 $chk_mr=mysqli_query($conn,$mr_dtl);
 if(mysqli_num_rows($chk_mr)>0){
  $row_bank=mysqli_fetch_assoc($chk_mr);

  $account_holder_name=$row_bank['account_holder_name'];
  $bank_name=$row_bank['bank_name'];
  $account_no=$row_bank['account_no'];
  $ifsc_code=$row_bank['ifsc_code'];

  echo json_encode(array('mr_id' =>$mr_id, 'mr_wallet_blance' =>$mr_wallet_blance, 'account_holder_name' =>$account_holder_name, 'bank_name' => $bank_name, 'account_no' => $account_no, 'ifsc_code' => $ifsc_code));

   
}else{



 

    // echo json_encode(array('message' =>"No record found.", 'status' =>false));
}

  
    

?>