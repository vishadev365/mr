<?php

$hostname = 'localhost';
 $username = 'root';
 $password = '';
 $dbname = 'doctor_db';
 $conn = mysqli_connect($hostname,$username,$password,$dbname);
 if (!$conn) {
   echo "no database found";
   die;
 }
  ?>
