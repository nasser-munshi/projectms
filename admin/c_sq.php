<?php
session_start();

$con=mysqli_connect("localhost","root","","pms");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$select= mysqli_query($con,"SELECT password FROM admin Where admin_username='$_SESSION[username]'");
$select_F = mysqli_fetch_array($select);

if($_POST["admin_current_password"]==$select_F["password"])
{
    
     
  
 mysqli_query($con,"UPDATE security_question SET question='$_POST[sq_question]', answer= '$_POST[sq_answer]'
WHERE admin_username= '$_SESSION[username]'");  
}

 else {
   echo "Current Password Doesnot Match." ;
}



mysqli_close($con); //close connention.
?>
<script type="text/javascript">
alert("Security Question change Successfully.");
window.location.href="admin_profile.php";

</script>