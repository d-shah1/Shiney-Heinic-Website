<?php
session_start();
require("check-authenticate.php");
require("../connection.php");
if (!isset($_POST['name'])) {
  echo '
  <script language="javascript">
  window.location="review-list-classic.php";
  </script>
  ';
}

date_default_timezone_set('America/Los_Angeles');
$current_time = date("j F  Y ", time());

$name = $_POST['name'];
$user = 0;
$ratingForm = $_POST['ratingForm'];
$review_textFrom = $_POST['review_textFrom'];


$sql = sprintf(
  "INSERT INTO `classic_review` ( `name`, `user_id`,  `rating`, `review_text`, `timestamp`)VALUES ('%s','%s','%s','%s','%s')",
  $con->real_escape_string($name),
  $con->real_escape_string($user),

  $con->real_escape_string($ratingForm),
  $con->real_escape_string($review_textFrom),
  $con->real_escape_string($current_time)

);

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Record is not created error occurs";
}