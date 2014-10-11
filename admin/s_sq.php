<?php
session_start();

include 'connection.php';
$select= mysqli_query($con,"SELECT password FROM admin Where admin_username='$_SESSION[username]'");
$select_F = mysqli_fetch_array($select);

if($_POST["admin_current_password"]==$select_F["password"])
{
    
       $sql="INSERT INTO security_question (username, question, answer)
VALUES
('$_SESSION[username]','$_POST[sq_question]','$_POST[sq_answer]')";
  
 if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }  
}

 else {
   echo "Current Password Doesnot Match." ;
}



mysqli_close($con); //close connention.
?>
<script type="text/javascript">
alert("Security Question Set Successfully.");
window.location.href="admin_profile.php";

</script>