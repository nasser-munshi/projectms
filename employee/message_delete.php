<?php
include '../connection.php';
  
  mysqli_query($con,"DELETE FROM messages WHERE msg_id='$_POST[msg_del]';");
  



mysqli_close($con);
 header( 'Location: show_message.php' ) ;
?>
