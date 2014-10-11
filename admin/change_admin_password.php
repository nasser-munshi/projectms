<?php

session_start();
include 'connection.php';
$select= mysqli_query($con,"SELECT password FROM admin Where admin_username='$_SESSION[username]'");
$select_F = mysqli_fetch_array($select);
$npass= md5($_POST["admin_new_password"]);
if($_POST["admin_current_password"]==$select_F["password"])
{
    if($_POST["admin_new_password"]==$_POST["admin_confirm_new_password"])
    {
       mysqli_query($con,"UPDATE admin SET password='$npass' 
WHERE admin_username= '$_SESSION[username]'");
       echo 'Successfully Changed.';
    }
 else {
        echo 'Confirm Password Doesnot Match.'; 
    }
}

 else {
   echo "Current Password Doesnot Match." ;
}



mysqli_close($con); //close connention.
?>
