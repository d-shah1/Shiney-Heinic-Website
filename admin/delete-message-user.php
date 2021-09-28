<?php
session_start();
require("check-authenticate.php");
require("../connection.php");
if (!isset($_POST['userid'])) {
    session_destroy();
    echo '
    <script language="javascript">
    window.location="contact-details.php";
    </script>
    ';
}



$id = $con->real_escape_string($_POST['userid']);

$query_update = "DELETE FROM `user` WHERE `id`=$id";
$result = $con->query($query_update);


if ($result === TRUE) {
    echo "Record Deleted Successfully";
} else {
    echo "Error Deleting the record";
}
