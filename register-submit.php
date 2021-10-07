<?php
require("./connection.php");
$email=$_POST['email'];
$sql="select * from user where email='$email'";

$res=$con->query($sql);

if ($res->num_rows > 0) {
  
  $row = $res->fetch_assoc();
  if($email==isset($row['email']))
  {
    echo "<script language='javascript'>
    window.location= 'register.php?message=This Email Already Exists'; 
   </script>";
          
  }
 
  }
else{
session_start();
$host = 'localhost';
$db   = 'rounavza_shiney';
$user = 'rounavza_shiney';
$pass = 'rounavza_shiney';
$port = "3306";
$charset = 'utf8mb4';

$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
try {
     $pdo = new \PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
if (isset($_POST['email']) && isset($_POST['password'])) {
    $mail = $_POST["email"];
    $pwd = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $user=$_POST["name"];
    $lastname=$_POST["last_name"];
    date_default_timezone_set('America/Los_Angeles');
    $current_time = date("j F  Y , g:i:s a", time());
    

    

    $result = "INSERT INTO `user`(`email`, `password`, `first_name`, `last_name`, `time_stamp`) VALUES  (?,?,?,?,?)";
    $statement = $pdo->prepare($result);
    $statement->execute([$mail,$pwd,$user,$lastname,$current_time]);
        if ($statement) {
            $_SESSION['login_error'] = "false";
            echo "<script language='javascript'>
            window.location= 'login.php?message=You have registered Sucessfully!'; 
           </script>";
        } else {
            echo "<script language='javascript'>
            window.location= 'register.php?message=Error Please Try Again!'; 
           </script>";
        }
} else {
    echo "<script language='javascript'>
    window.location= 'login.php'; 
   </script>";
}

}
?>
