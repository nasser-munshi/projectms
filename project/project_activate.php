<?php
session_start();

include '../connection.php';

  
  

  
    mysqli_query($con,"UPDATE project SET project_status='active'
WHERE project_id= '$_POST[e_p_action]'");
 
echo "Successfully Activated.";
  

mysqli_close($con); //close connention.
?>