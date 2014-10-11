<?php
session_start();
include 'connection.php';
  
  mysqli_query($con,"DELETE FROM project WHERE project_id='$_POST[p_del]';");
   mysqli_query($con,"DELETE FROM module WHERE project_id='$_POST[p_del]';");
  



mysqli_close($con);
 
?>


<script type="text/javascript">
alert("Project Deleted Successfully.");
window.location.href="show_projects.php";

</script>