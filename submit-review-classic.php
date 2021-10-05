<?php
session_start();
require('check-authenticate.php');
require('connection.php');
if(!isset($_REQUEST['rating_input_1']) && !isset($_REQUEST['review-text'])){
    echo "<script language='javascript'>
    window.location= 'index.php'; 
   </script>";
}

$text = $con->real_escape_string($_REQUEST['review-text']);
$rating = $con->real_escape_string($_REQUEST['rating_input_1']);
$user_id = $_SESSION['user_id'];

$user_details = $con->query("SELECT * from user where id=$user_id");
$user_row = mysqli_fetch_assoc($user_details);

$user_name = $user_row['first_name'] . " " . $user_row['last_name'];
date_default_timezone_set('America/Los_Angeles');
$timestamp = date("j F  Y", time());

$result = $con->query("INSERT into classic_review(`name`,`rating`,`review_text`,`timestamp`,`user_id`) VALUES('$user_name','$rating','$text','$timestamp','$user_id')");
if(!$result){
    echo "<script language='javascript'>
    window.location= 'error.php'; 
   </script>";
}

echo "<script language='javascript'>
window.location= 'thank-you-review.php'; 
</script>";

?>
