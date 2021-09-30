<?php
session_start();
require("./check-authenticate.php");
require("./connection.php");
if (!isset($_POST['first_name'])) {
  echo '
  <script language="javascript">
  window.location="contact-us.php";
  </script>
  ';
}

date_default_timezone_set('America/Los_Angeles');
$current_time = date("j F  Y , g:i:s a", time());

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];

$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];


$sql = sprintf(
  "INSERT INTO `contact_form` ( `first_name`, `last_name`, `email`, `subject`, `message`, `time_stamp`)VALUES ('%s','%s','%s','%s','%s','%s')",
  $con->real_escape_string($first_name),$con->real_escape_string($last_name),
  
  $con->real_escape_string($email),
  
  $con->real_escape_string($subject),
  $con->real_escape_string($message),
  $con->real_escape_string($current_time)

);

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Record is not created error occurs";
}
