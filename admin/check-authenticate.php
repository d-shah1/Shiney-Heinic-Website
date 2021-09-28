<?php
if(!isset($_SESSION['email']))
{
     echo "<script language='javascript'>
    window.location= 'index.php'; 
   </script>"; 
}
?>