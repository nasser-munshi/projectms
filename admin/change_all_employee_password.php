<?php

session_start();
include 'connection.php';

$npass= md5($_POST["employee_new_password"]);

    if($_POST["employee_new_password"]==$_POST["employee_confirm_new_password"])
    {
       mysqli_query($con,"UPDATE employee SET password='$npass' 
WHERE employee_username= '$_SESSION[all_employee]'");
       echo 'Successfully Changed.';
    }
 else {
        echo 'Confirm Password Doesnot Match.'; 
    }






mysqli_close($con); //close connention.
?>
