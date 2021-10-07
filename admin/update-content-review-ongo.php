<?php
session_start();
require("check-authenticate.php");
require("../connection.php");
if (!isset($_POST['name'])) {
    session_destroy();
    echo '
    <script language="javascript">
    window.location="review-list-onthego.php";
    </script>
    ';
}


$name = $con->real_escape_string($_POST['name']);


$ratingForm = $con->real_escape_string($_POST['ratingForm']);
$review_textFrom = $con->real_escape_string($_POST['review_textFrom']);

$id = $con->real_escape_string($_POST['userid']);

$query_update = "UPDATE `onthego_review` SET 
`name`='$name',`review_text`='$review_textFrom',`rating`='$ratingForm' WHERE `id`=$id";
$result = $con->query($query_update);


if ($result === TRUE) {
    echo "Record Edited Successfully";
} else {
    echo "Error Updating the record";
}
