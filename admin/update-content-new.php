<?php
session_start();
require("check-authenticate.php");
require("../connection.php");
if (!isset($_POST['email'])) {
    session_destroy();
    echo '
    <script language="javascript">
    window.location="new_subscriptions.php";
    </script>
    ';
}

$email = $con->real_escape_string($_POST['email']);

$id = $con->real_escape_string($_POST['userid']);


$query_update = "UPDATE `newsletter` SET 
`email`='$email' WHERE `id`=$id";
$result = $con->query($query_update);


if ($result === TRUE) {
    echo "Record Edited Successfully";
} else {
    echo "Error Updating the record";
}
