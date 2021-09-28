<?php
session_start();
if(isset($_REQUEST['pay'])){
    $pay = $_REQUEST['pay'];
    $_SESSION['pay']=$pay;
    $_SESSION['name']=$_REQUEST['proname'];
    echo 'yes';
    }
    else{
       echo 'no';
    }