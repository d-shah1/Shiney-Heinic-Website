<?php
session_start();
require("check-authenticate.php");
require("../connection.php");
if (!isset($_POST['first_name'])) {
  echo '
  <script language="javascript">
  window.location="dashboard.php";
  </script>
  ';
}

date_default_timezone_set('America/Los_Angeles');
$current_time = date("j F  Y , g:i:s a", time());

$first_name =$_POST['first_name'];
$last_name =  $_POST['last_name'];
$address =  $_POST['address'];
$country =  $_POST['country'];
$state =  $_POST['state'];
$zip =  $_POST['zip'];
$email =  $_POST['email'];


$sql = sprintf(
  "INSERT INTO `customer_address_list`(`first_name`, `last_name`, `email`, `address`, `country`, `state`, `zip`, `time_stamp`) VALUES ('%s','%s','%s','%s','%s','%s','%s','%s')",
  $con->real_escape_string($first_name),
  $con->real_escape_string($last_name),
  $con->real_escape_string($email),
  $con->real_escape_string($address),
  $con->real_escape_string($country),
  $con->real_escape_string($state),
  $con->real_escape_string($zip),
  $con->real_escape_string($current_time)

);

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Record is not created error occurs";
}
