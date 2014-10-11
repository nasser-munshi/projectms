<?php

session_start();
include 'connection.php';

$npass= md5($_POST["admin_new_password"]);

    if($_POST["admin_new_password"]==$_POST["admin_confirm_new_password"])
    {
       mysqli_query($con,"UPDATE admin SET password='$npass' 
WHERE admin_username= '$_SESSION[all_admin]'");
       echo 'Successfully Changed.';
    }
 else {
        echo 'Confirm Password Doesnot Match.'; 
    }






mysqli_close($con); //close connention.
?>
