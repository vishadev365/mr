<?php   


header('Access-Control-Allow-Origin: ' . '*');
header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, PATCH, DELETE');
include '../db.php';



    $chamber_id = $_GET['chamber_id'];
    $get_sql = "SELECT * FROM `chamber_payment_tbl` WHERE `chamber_id` = '$chamber_id'";
    $data = mysqli_query($conn,$get_sql);
    $row = mysqli_num_rows($data);
    if ($row < 1) {
      echo json_encode(array('message' => 'No Record Found.', 'status' => false));
    }else{

      while($row_chamber_payment = mysqli_fetch_assoc($data)){

        $payment_date=date("d-m-Y", strtotime($row_chamber_payment['payment_date']));
        $amount=$row_chamber_payment['amount'];
        $duration_from=date("d-m-Y", strtotime($row_chamber_payment['duration_from']));
        $duration_to=date("d-m-Y", strtotime($row_chamber_payment['duration_to']));
        $no_of_booking=$row_chamber_payment['no_of_booking'];
        $payment_mode=$row_chamber_payment['payment_mode'];


        
        $add[]=array('payment_date' => $payment_date,'amount' => $amount,'duration_from' => $duration_from,'duration_to' => $duration_to,'no_of_booking' => $no_of_booking ,'payment_mode' => $payment_mode);

      }
  echo json_encode($add);

}//end if


?>