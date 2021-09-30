<?php
session_start();
require("check-authenticate.php");
require("../connection.php");


if (!isset($_REQUEST['id'])) {
    echo '
    <script language="javascript">
    
    window.location="new_subscriptions.php";
    </script>
    ';
}



    $id = $_REQUEST['id'];

    $result = $con->query("SELECT * from `newsletter` where id=$id") or die("finding master detail failed");
    $row = mysqli_fetch_assoc($result);

    
    $email = $row['email'];
    
    $userid = $row['id'];
   


    echo json_encode(array(
        "error" => "false", "comment" => "successful",   "email" => $email, "userid" => $userid
    ));

