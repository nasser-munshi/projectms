<?php
session_start();

//file upload start

$allowedExts = array("gif", "jpeg", "jpg", "png","zip","rar", "pdf", "doc", "xls", "ppt", "txt");
$temp = explode(".", $_FILES["submit_module_file"]["name"]);
$extension = end($temp);
if ( in_array($extension, $allowedExts )
        && ($_FILES["submit_module_file"]["size"] <20971520 ))
  {
  if ($_FILES["submit_module_file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["submit_module_file"]["error"] . "<br>";
    }
  else
    {
   

    if (file_exists("../upload/" . $_FILES["submit_module_file"]["name"]))
      {
      echo $_FILES["submit_module_file"]["name"] . " already exists. Please Reaname Your File. ";
      exit();
      }
    else
      {
      move_uploaded_file($_FILES["submit_module_file"]["tmp_name"],
      "../upload/" . $_FILES["submit_module_file"]["name"]);
     
      }
	 
    }
  }
else
  {
  echo "Invalid file";
  exit();
  }

//file upload end
  
  
$file= ($_FILES["submit_module_file"]["name"]);


include '../connection.php';
  
  
  
    if($_POST["submit_hour"]=="pm")
      $s_hour = $_POST["submit_time"]+12;
  else    
  $s_hour = $_POST["submit_time"];
  
  
  $date_s = date_create($_POST["submit_module_date"].' '.$s_hour.":0:0");
  $s_date= date_format($date_s, 'Y-m-d H:i:s');
 
  
  
  

  
    mysqli_query($con,"UPDATE module SET module_status='successful', module_submitted_date='$s_date', module_submitted_description='$_POST[submit_module_description]', module_submitted_attachment='$file' 
WHERE module_id= '$_SESSION[module_id]'");
 
echo "Successfully Registered.";
  

mysqli_close($con); //close connention.
?>