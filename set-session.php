<?php
session_start();
require("./check-authenticate.php");
if(isset($_REQUEST['pay'])){
    $pay = $_REQUEST['pay'];
    $_SESSION['pay']=$pay;
   
    echo 'yes';
    }
    else{
       echo 'no';
    }