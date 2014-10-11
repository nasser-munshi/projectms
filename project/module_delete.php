<?php
include '../connection.php';
  
  mysqli_query($con,"DELETE FROM module WHERE module_id='$_POST[m_del]';");
  



mysqli_close($con);
 header( 'Location: show_module.php' ) ;
?>
