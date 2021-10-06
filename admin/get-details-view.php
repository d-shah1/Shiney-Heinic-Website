<?php
session_start();
require("check-authenticate.php");
require("../connection.php");


if (!isset($_REQUEST['id'])) {
    echo '
    <script language="javascript">
    
    window.location="dashboard.php";
    </script>
    ';
}



    $id = $_REQUEST['id'];

    $result = $con->query("SELECT * from `transaction` where id=$id") or die("finding master detail failed");
    $row = mysqli_fetch_assoc($result);

    $userid=$row['id'];
    $customer_id = $row['customer_id'];
    $customer_name = $row['customer_name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $shiping_address = $row['shiping_address'];
    $country = $row['country'];
    $state = $row['state'];
    $zip  = $row['zip'];
    $bill_address = $row['bill_address'];
    $country_bill=$row['country_bill'];
    $state_bill = $row['state_bill'];
    $zip_bill = $row['zip_bill'];
    $shiney_heinie_classic = $row['shiney_heinie_classic'];
    $shiney_no_the_go = $row['shiney_no_the_go'];
    $status = $row['status'];
    $amount = $row['amount'];
   
    


    echo json_encode(array(
        "error" => "false", "comment" => "successful", 
        "customer_id" => $customer_id,
        "customer_name" => $customer_name,
        "email" => $email,
        "phone" => $phone,
        "shiping_address" => $shiping_address,
         "country" => $country,
         
         
          "userid" => $userid, 
        "state"=>$state,     
        "zip"=>$zip,
        "bill_address"=>$bill_address,
        "country_bill"=>$country_bill,
        "state_bill"=>$state_bill,
        "zip_bill"=>$zip_bill,
        "shiney_heinie_classic"=>$shiney_heinie_classic,
        "shiney_no_the_go"=>$shiney_no_the_go,
        "status"=>$status,
        "amount"=>$amount
    ));

