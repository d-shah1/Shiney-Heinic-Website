<?php
session_start();
require("check-authenticate.php");
require("../connection.php");
if (!isset($_POST['first_name'])) {
    session_destroy();
    echo '
    <script language="javascript">
    window.location="contact-details.php";
    </script>
    ';
}


$first_name = $con->real_escape_string($_POST['first_name']);
$last_name = $con->real_escape_string($_POST['last_name']);

$email = $con->real_escape_string($_POST['email']);

$id = $con->real_escape_string($_POST['userid']);

$query_update = "UPDATE `user` SET 
`first_name`='$first_name',`last_name`='$last_name',`email`='$email' WHERE `id`=$id";
$result = $con->query($query_update);


if ($result === TRUE) {
    echo "Record Edited Successfully";
} else {
    echo "Error Updating the record";
}
