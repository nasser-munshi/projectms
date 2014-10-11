<?php
session_start();

include '../connection.php';

  
  

  
    mysqli_query($con,"UPDATE module SET module_status='active'
WHERE module_id= '$_POST[e_m_action]'");
 
echo "Successfully Activated.";
  

mysqli_close($con); //close connention.
?>