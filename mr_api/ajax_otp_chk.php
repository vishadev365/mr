<?php 



header('Access-Control-Allow-Origin: ' . '*');
header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, PATCH, DELETE');

 include '../db.php';


 $otp=$_POST['otp'];
 $mr_id=$_POST['mr_id'];
 $action=$_POST['action'];



if($action=='check_otp'){

	$chk_otp="SELECT * FROM `mr_tbl` WHERE `otp`='$otp' AND `mr_id`='$mr_id'";

	$otp_q=mysqli_query($conn,$chk_otp);

	if(mysqli_num_rows($otp_q)>0){
              

       $u_typ="SELECT * FROM `mr_tbl` WHERE `otp`='$otp' AND `mr_id`='$mr_id' AND `user_type`='new'";
	   $u_q=mysqli_query($conn,$u_typ);
	   	if(mysqli_num_rows($u_q)>0){

           $user_row_otp=mysqli_fetch_assoc($u_q);

           	    if($user_row_otp['otp'] == $otp){

        

                    $u_update="UPDATE `mr_tbl` SET `user_type`='old' WHERE `mr_id`='$mr_id' AND `user_type`='new'";


		            echo "old";

			        }
	   	}else{
       $row_otp=mysqli_fetch_assoc($otp_q);
          
        if($row_otp['otp'] == $otp){

        	  echo "new";

        }


	   	}//--num-rows




     
	}else{
		echo "Error";
	}
	
    // $row_otp=mysqli_fetch_assoc($otp_q);

	//     if($row_otp['otp'] == $otp){

	// 	 echo "new_user";

    //     }else{

    //     	echo "Error";
	//     }



	


	

	
}//chk otp type





 ?>