<?php 



header('Access-Control-Allow-Origin: ' . '*');
header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, PATCH, DELETE');
 include '../db.php';


 $mr_id=$_POST['mr_id'];
 $user_dtl="SELECT * FROM `mr_tbl` WHERE `mr_id`='$mr_id'";

    $user_q=mysqli_query($conn,$user_dtl);

    if(mysqli_num_rows($user_q)>0){

    
    
    $row_user=mysqli_fetch_array($user_q);
    $name=$row_user['name'];
    $ph_no=$row_user['ph_no'];
    $wp_no=$row_user['wp_no'];
    
    $res=array('name'=>$name,'ph_no'=>$ph_no,'wp_no'=>$wp_no);
    echo json_encode($res);

}else{
    $res= array('status'=>false);
    echo json_encode($res)  ;
    

}





 ?>