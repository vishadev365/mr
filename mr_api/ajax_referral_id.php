<?php 



header('Access-Control-Allow-Origin: ' . '*');
header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, PATCH, DELETE');
 include '../db.php';


 $mr_id=$_POST['mr_id'];
 $referral="SELECT * FROM `mr_tbl` WHERE `mr_id`='$mr_id'";

    $referral_q=mysqli_query($conn,$referral);
    
    $row_referral=mysqli_fetch_array($referral_q);
    $my_referral_id=$row_referral['my_referral_id'];

    echo $my_referral_id;





 ?>