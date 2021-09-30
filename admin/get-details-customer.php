<?php
session_start();
require("check-authenticate.php");
require("../connection.php");


if (!isset($_REQUEST['id'])) {
    echo '
    <script language="javascript">
    
    window.location="contact-details.php";
    </script>
    ';
}



    $id = $_REQUEST['id'];

    $result = $con->query("SELECT * from `customer_address_list` where id=$id") or die("finding master detail failed");
    $row = mysqli_fetch_assoc($result);

    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $country = $row['country'];
    $state = $row['state'];
    $zip = $row['zip'];
    $email = $row['email'];
    $address = $row['address'];
    $userid = $row['id'];


    echo json_encode(array(
        "error" => "false", "comment" => "successful", "first_name" => $first_name, 
        "last_name" => $last_name, "country" => $country, 
        "state" => $state, "zip" => $zip,
        "address" => $address, "email" => $email, "userid" => $userid
    ));

