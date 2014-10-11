<?php
session_start();
include 'connection.php';
  
  mysqli_query($con,"DELETE FROM employee WHERE employee_username='$_POST[e_del]';");
  



mysqli_close($con);
 header( 'Location: show_projects.php' ) ;
?>
