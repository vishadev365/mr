<?php 



header('Access-Control-Allow-Origin: ' . '*');
header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, PATCH, DELETE');
 include '../db.php';




// print_r($_POST);
   $mr_id=$_POST['mr_id'];
   $name=$_POST['name'];
    $email_id=$_POST['email'];
   $wp_no=$_POST['wp_no'];
   $profession=$_POST['profession'];
   // $image=$_POST['image'];

// die();

 if($_FILES["image"]["name"]!=''){

  $thumbnail1 = $_FILES["image"]["name"];
  $tempname1 = $_FILES["image"]["tmp_name"];
  $path_info1 = pathinfo($thumbnail1, PATHINFO_EXTENSION);
  $path_extension1 = array('pdf', 'jpg', 'jpeg', 'png', 'gif');
  if (in_array($path_info1, $path_extension1)) {
    $update_thumbnail_name1 = rand() . "." . $path_info1;
    $move_thumbnail_path1 = "../images/profile_image/".$update_thumbnail_name1;
    if (!move_uploaded_file($tempname1, $move_thumbnail_path1)) {
      $update_thumbnail_name1 = '';
    }
  } else {
    echo "only this ('jpg', 'jpeg', png) format.";
    return false;
  }

}else{
  $update_thumbnail_name1='';
}


  date_default_timezone_set('Asia/Calcutta'); 

  $create_date=date('Y-m-d');
  $create_time=date('H:i:s');
  $insert_date_time=date('Y-m-d H:i:s');


$my_referral_id=rand(1111,9999);

$profile_update="UPDATE `mr_tbl` SET `name`='$name',`image`='$update_thumbnail_name1',`email_id`='$email_id',`wp_no`='$wp_no',`profession`='$profession',`my_referral_id`='$my_referral_id',`create_date`='$create_date',`create_time`='$create_time',`user_type`='new' WHERE `mr_id`='$mr_id'";

$res=mysqli_query($conn,$profile_update);

if($res){
	echo 'success';
}








 ?>