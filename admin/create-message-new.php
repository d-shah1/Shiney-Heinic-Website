<?php
session_start();
require("check-authenticate.php");
require("../connection.php");
if (!isset($_POST['emailForm'])) {
  echo '
  <script language="javascript">
  window.location="new_subscriptions.php";
  </script>
  ';
}

date_default_timezone_set('America/Los_Angeles');
$current_time = date("j F  Y , g:i:s a", time());


$email = $_POST['emailForm'];



$sql = sprintf(
  "INSERT INTO `newsletter`(  `email`,`time_stamp`) VALUES ('%s','%s')",
  
  $con->real_escape_string($email),
 
  
  $con->real_escape_string($current_time)

);

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Record is not created error occurs";
}
