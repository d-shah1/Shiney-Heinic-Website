<?php
if(!isset($_SESSION['email']))
{
     echo "<script language='javascript'>
    window.location= 'login.php'; 
   </script>"; 
}
echo $_SESSION['email'];
?>