<?php   


header('Access-Control-Allow-Origin: ' . '*');
header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, PATCH, DELETE');
// include 'db.php';
include '../db.php';

    // print_r($_POST);


    $mr_id = $_POST['mr_id'];



    $get_sql = "SELECT * FROM `chamber_tbl` WHERE `reffered_by` = '$mr_id'";
    $data = mysqli_query($conn,$get_sql);
     $row = mysqli_num_rows($data);
    if ($row < 1) {
      echo json_encode(array('message' => 'No Record Found.', 'status' => false));
    }else {

   $bln=0;
while($cham_row = mysqli_fetch_assoc($data)){

   
//------------------------chamber_payment_tbl------------------------

    $chamber_sql = "SELECT * FROM `appointment_tbl` WHERE `appointment_status`='Visited' AND `chamber_id` = '$cham_row[chamber_id]'";
    $chamber_data = mysqli_query($conn,$chamber_sql);
    $chamber_row += mysqli_num_rows($chamber_data);
    $chamber_amt=0;

    if($chamber_row > 0){

            
      while($row_chamber = mysqli_fetch_assoc($chamber_data)){
      
               $chamber_amt ++;

               }

               
             }else{
              $chamber_amt = 0;
             }
          
         
              $amt= $row - $chamber_row;
              
              $bln+=$amt*2;

     }//end chamber while  

            $wallet_balance=number_format($bln,'2',',',' ');
      
       $add=array('wallet_balance' => $wallet_balance);
  
      $output = $add;
      echo json_encode($add);

    }//end if


?>