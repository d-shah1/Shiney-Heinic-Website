<?php
session_start();
require("./check-authenticate.php");
require("./connection.php");
if (!isset($_POST['email'])) {
  echo '
  <script language="javascript">
  window.location="index.php";
  </script>
  ';
}
$email = $_POST['email'];
$sql="select * from newsletter where email='$email'";

$res=$con->query($sql);

if ($res->num_rows > 0) {
  
  $row = $res->fetch_assoc();
  if($email==isset($row['email']))
  {
    echo "already exits";
          
  }
 
  }
else {

date_default_timezone_set('America/Los_Angeles');
$current_time = date("j F  Y , g:i:s a", time());







$sql = sprintf(
  "INSERT INTO `newsletter` ( `email`, `time_stamp`)VALUES ('%s','%s')",

  $con->real_escape_string($email),
  $con->real_escape_string($current_time)

);

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Record is not created error occurs";
}

}
