<?php
session_start();

$con=mysqli_connect("localhost","root","","pms");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$select= mysqli_query($con,"SELECT password FROM employee Where employee_username='$_SESSION[username]'");
$select_F = mysqli_fetch_array($select);

if($_POST["employee_current_password"]==$select_F["password"])
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
window.location.href="employee_profile.php";

</script>