<?php
session_start();
include 'connection.php';
  
  mysqli_query($con,"DELETE FROM admin WHERE admin_username='$_POST[a_del]';");
  



mysqli_close($con);
 header( 'Location: show_projects.php' ) ;
?>
