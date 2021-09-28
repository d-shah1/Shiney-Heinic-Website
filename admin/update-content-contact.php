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
$address = $con->real_escape_string($_POST['address']);
$country = $con->real_escape_string($_POST['country']);
$state = $con->real_escape_string($_POST['state']);
$zip = $con->real_escape_string($_POST['zip']);
$email = $con->real_escape_string($_POST['email']);

$id = $con->real_escape_string($_POST['userid']);

$query_update = "UPDATE `customer_address_list` SET 
`first_name`='$first_name',`last_name`='$last_name',`email`='$email',
`address`='$address',`country`='$country',`state`='$state',`zip`=$zip WHERE `id`=$id";
$result = $con->query($query_update);


if ($result === TRUE) {
    echo "Record Edited Successfully";
} else {
    echo "Error Updating the record";
}
