<?php
session_start();
include 'connection.php';
//file upload start

$allowedExts = array("gif", "jpeg", "jpg", "png","zip","rar", "pdf", "doc", "xls", "ppt", "txt");
$temp = explode(".", $_FILES["upload_file"]["name"]);
$extension = end($temp);
if ( in_array($extension, $allowedExts )
        && ($_FILES["upload_file"]["size"] <20971520 ))
  {
  if ($_FILES["upload_file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["upload_file"]["error"] . "<br>";
    }
  else
    {
   

    if (file_exists("../upload/" . $_FILES["upload_file"]["name"]))
      {
      echo $_FILES["upload_file"]["name"] . " already exists. Please Reaname Your File. ";
      exit();
      }
    else
      {
      move_uploaded_file($_FILES["upload_file"]["tmp_name"],
      "../upload/" . $_FILES["upload_file"]["name"]);
     
      }
	 
    }
  }
else
  {
  echo "Invalid file";
  exit();
  }

//file upload end
  
  
$file= ($_FILES["upload_file"]["name"]);



  if($_POST["start_hour"]=="pm")
      $s_hour = $_POST["start_time"]+12;
  else    
  $s_hour = $_POST["start_time"];
  
  
  $date_s = date_create($_POST["start_date"].' '.$s_hour.":0:0");
  $s_date= date_format($date_s, 'Y-m-d H:i:s');
  
   if($_POST["submit_hour"]=="pm")
      $sub_hour = $_POST["submit_time"]+12;
  else    
  $sub_hour = $_POST["submit_time"];
  
  
  
   $date_d = date_create($_POST["submit_date"].' '.$sub_hour.":0:0");
  $d_date= date_format($date_d, 'Y-m-d H:i:s');
  
  $sql="INSERT INTO project (project_name, project_description, employee_username, project_start_time, project_delivery_time, project_attachment)
VALUES
('$_POST[create_project_name]','$_POST[create_project_description]','$_POST[project_leader]' ,'$s_date' ,' $d_date', '$file')";
  
  if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

  

mysqli_close($con); //close connention.
?>

<script type="text/javascript">
alert("Project Created Successfully.");
window.location.href="create_project_form.php";

</script>