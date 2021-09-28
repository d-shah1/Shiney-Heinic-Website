<?php
session_start();
require("check-authenticate.php");
require("../connection.php");

$email=$_POST['email'];
$sql="select * from user where email='$email'";

$res=$con->query($sql);

if ($res->num_rows > 0) {
  
  $row = $res->fetch_assoc();
  if($email==isset($row['email']))
  {
    echo "<script language='javascript'>
    window.location= 'user-list.php'; 
   </script>";
          
  }
 
}
else{
if (!isset($_POST['first_name'])) {
  echo '
  <script language="javascript">
  window.location="user-list.php";
  </script>
  ';
}

date_default_timezone_set('America/Los_Angeles');
$current_time = date("j F  Y , g:i:s a", time());

$first_name =$_POST['first_name'];
$last_name =  $_POST['last_name'];
$password=$_POST['pass'];
$email =  $_POST['email'];
$password=password_hash($password, PASSWORD_DEFAULT);

$sql = sprintf(
  "INSERT INTO `user`(`first_name`, `last_name`, `email`,`password`, `time_stamp`) VALUES ('%s','%s','%s','%s','%s')",
  $con->real_escape_string($first_name),
  $con->real_escape_string($last_name),
  $con->real_escape_string($email),
  $con->real_escape_string($password),
  
  $con->real_escape_string($current_time)

);

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Record is not created error occurs";
}
}
