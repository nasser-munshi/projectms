<?php
session_start();
include '../connection.php';
 
    if($_POST["submit_hour"]=="pm")
      $s_hour = $_POST["submit_time"]+12;
  else    
  $s_hour = $_POST["submit_time"];
  
  
  $date_s = date_create($_POST["submit_project_date"].' '.$s_hour.":0:0");
  $s_date= date_format($date_s, 'Y-m-d H:i:s');
  
  
 
//file upload start

if(empty($_FILES["submit_project_file"]["name"]))
{
    
    mysqli_query($con,"UPDATE project SET project_status='successful', project_submitted_date='$s_date', project_submitted_description='$_POST[submit_project_description]'
WHERE project_id= '$_SESSION[project_id]'");
}


else{

$allowedExts = array("gif", "jpeg", "jpg", "png","zip","rar", "pdf", "doc", "xls", "ppt", "txt");
$temp = explode(".", $_FILES["submit_project_file"]["name"]);
$extension = end($temp);
if ( in_array($extension, $allowedExts )
        && ($_FILES["submit_project_file"]["size"] <20971520 ))
  {
  if ($_FILES["submit_project_file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["submit_project_file"]["error"] . "<br>";
    }
  else
    {
   

    if (file_exists("../upload/" . $_FILES["submit_project_file"]["name"]))
      {
      echo $_FILES["submit_project_file"]["name"] . " already exists. Please Reaname Your File. ";
      exit();
      }
    else
      {
      move_uploaded_file($_FILES["submit_project_file"]["tmp_name"],
      "../upload/" . $_FILES["submit_project_file"]["name"]);
     
      }
	 
    }
  }
else
  {
  echo "Invalid file";
  exit();
  }

//file upload end
  
  
$file= ($_FILES["submit_project_file"]["name"]);



  
  

  
    mysqli_query($con,"UPDATE project SET project_status='successful', project_submitted_date='$s_date', project_submitted_description='$_POST[submit_project_description]', project_submitted_attachment='$file' 
WHERE project_id= '$_SESSION[project_id]'");
}
echo "Successfully Edited.";
  

mysqli_close($con); //close connention.
?>