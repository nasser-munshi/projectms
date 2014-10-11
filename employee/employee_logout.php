<?php
session_start();
if(isset($_SESSION['username']))
{
unset($_SESSION['username']);
unset ($_SESSION['user_role']);
 header('Location: ../index.php');
}
 else {
    echo 'You are not login. please login.';   
}

?>
