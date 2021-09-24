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
    window.location= 'register.php?message=user already exist'; 
   </script>";
          
  }
 
  }
else{



session_start();
$host = '127.0.0.1';
$db   = 'shiney_heinic_website';
$user = 'root';
$pass = '';
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
    

    

    $result = "INSERT INTO `user`(`email`, `password`, `first_name`, `last_name`) VALUES  (?,?,?,?)";
    $statement = $pdo->prepare($result);
    $statement->execute([$mail,$pwd,$user,$lastname]);
        if ($statement) {
            echo "<script language='javascript'>
            window.location= 'login.php?message=successful register login!!'; 
           </script>";
        } else {
            echo "<script language='javascript'>
            window.location= 'login.php?message=error try again!!'; 
           </script>";
        }
} else {
    echo "<script language='javascript'>
    window.location= 'login.php'; 
   </script>";
}

}
?>
