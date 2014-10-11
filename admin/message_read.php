<?php

session_start();
include 'connection.php';
  
  

  
    mysqli_query($con,"UPDATE messages SET message_status='read'
WHERE msg_id= '$_POST[msg_read]'");
 

  

mysqli_close($con); //close connention.
?>

<script type="text/javascript">

window.location.href="show_message.php";

</script>