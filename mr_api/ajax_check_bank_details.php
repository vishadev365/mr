<?php   


header('Access-Control-Allow-Origin: ' . '*');
header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, PATCH, DELETE');
include 'db.php';

// echo "<pre>";
// print_r($_POST);

 $mr_id=$_POST['mr_id'];
 $account_holder_name=$_POST['account_holder_name'];
 $bank_name=$_POST['bank_name'];
 $account_no=$_POST['account_no'];
 $ifsc_code=$_POST['ifsc_code'];
  $mr_dtl="SELECT * FROM `mr_tbl` WHERE `mr_id`='$mr_id' AND `account_no`='$account_no'";
 $chk_mr=mysqli_query($conn,$mr_dtl);
 if(mysqli_num_rows($chk_mr)>0){
  $row_bank=mysqli_fetch_assoc($chk_mr);

  $account_holder_name=$row_bank['account_holder_name'];
  $bank_name=$row_bank['bank_name'];
  $account_no=$row_bank['account_no'];
  $ifsc_code=$row_bank['ifsc_code'];

  echo json_encode(array('account_holder_name' =>$account_holder_name, 'bank_name' => $bank_name, 'account_no' => $account_no, 'ifsc_code' => $ifsc_code));

   
}else{



  $bank_bank_dtl="UPDATE `mr_tbl` SET `account_holder_name`='$account_holder_name',`bank_name`='$bank_name',`account_no`='$account_no',`ifsc_code`='$ifsc_code' WHERE `mr_id`='$mr_id'";

   mysqli_query($conn,$bank_bank_dtl);  

    echo json_encode(array('message' =>"Bank details add successfully", 'status' =>false));
}

  
    

?>