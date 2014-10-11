<?php
session_start();

include '../connection.php';
$select= mysqli_query($con,"SELECT password FROM employee Where employee_username='$_SESSION[username]'");
$select_F = mysqli_fetch_array($select);
$npass= md5($_POST["employee_new_password"]);
if($_POST["employee_current_password"]==$select_F["password"])
{
    if($_POST["employee_new_password"]==$_POST["employee_confirm_new_password"])
    {
       mysqli_query($con,"UPDATE employee SET password='$npass' 
WHERE employee_username= '$_SESSION[username]'");
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
