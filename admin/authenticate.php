<?php
session_start();
require("../connection.php");
if (isset($_POST['email']) && isset($_POST['password'])) {
    $mail = $_POST["email"];
    $pwd = $_POST["password"];
    if (isset($_POST['remember']))
        $remember = $_POST['remember'];
    else
        $remember = FALSE;

    $query = "SELECT * from `admin` where email = '$mail'";
    $result = $con->query($query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $password = $row['password'];
            if ($remember) {
                if ($pwd == $password || password_verify($pwd, $password)) {

                    $_SESSION["email"] = $row["email"];
                    if ($remember) {
                        $hour = time() + 3600 * 24 * 360;
                        setcookie('Remember_me_email', $mail, $hour);
                        setcookie('Remember_me_password', $password, $hour);
                    }
                    echo "<script>
                    window.location= 'dashboard.php'; 
                    </script>";
                }
            } else {
                if (password_verify($pwd, $password)) {
                    $_SESSION["email"] = $row["email"];
                    if ($remember) {
                        $hour = time() + 3600 * 24 * 360;
                        setcookie('Remember_me_email', $mail, $hour);
                        setcookie('Remember_me_password', $password, $hour);
                    }
                    echo "<script>
                    window.location= 'dashboard.php'; 
                    </script>";
                }
            }
            echo "<script language='javascript'>
          window.location = 'index.php?message=Incorrect Password try another one!!';
           </script>";
        }
    }
    echo "<script language='javascript'>
    window.location= 'index.php?message=This email does not exists try another one!!!'; 
   </script>";
} else {
    echo "<script language='javascript'>
    window.location= 'index.php'; 
   </script>";
}
?>

