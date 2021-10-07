<?php
session_start();
require("check-authenticate.php");
require("../connection.php");


if (!isset($_REQUEST['id'])) {
    echo '
    <script language="javascript">
    
    window.location="review-list-classic.php";
    </script>
    ';
}



    $id = $_REQUEST['id'];

    $result = $con->query("SELECT * from `classic_review` where id=$id") or die("finding master detail failed");
    $row = mysqli_fetch_assoc($result);

    $name = $row['name'];
    $userid = $row['id'];
    
    $rating = $row['rating'];
   
    $review_text = $row['review_text'];
   

    echo json_encode(array(
        "error" => "false", "comment" => "successful", "name" => $name, 
        "review_text" => $review_text, "rating" => $rating, "userid" => $userid
    ));

