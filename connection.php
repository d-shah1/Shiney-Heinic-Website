<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$host="localhost";
$user="root";
$password="";
$database="shiney_heinic_website";
$con = new mysqli($host,$user,$password,$database);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }

?>
