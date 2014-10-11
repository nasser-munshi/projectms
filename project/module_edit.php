<?php
include '../connection.php';
  
   if($_POST["start_hour"]=="pm")
      $s_hour = $_POST["start_time"]+12;
  else    
  $s_hour = $_POST["start_time"];
  
  
  $date_s = date_create($_POST["edit_module_start_date"].' '.$s_hour.":0:0");
  $s_date= date_format($date_s, 'Y-m-d H:i:s');
  
   if($_POST["submit_hour"]=="pm")
      $sub_hour = $_POST["submit_time"]+12;
  else    
  $sub_hour = $_POST["submit_time"];
  
  
  
   $date_d = date_create($_POST["edit_module_submit_date"].' '.$sub_hour.":0:0");
  $d_date= date_format($date_d, 'Y-m-d H:i:s');
  
  
  
  

  
  if(empty($_FILES["upload_file"]["name"]))
  
  {
       mysqli_query($con,"UPDATE module SET module_name='$_POST[edit_module_name]', module_description='$_POST[edit_module_description]', employee_username='$_POST[edit_module_employee]' , module_start_time= '$s_date', module_delivery_time='$d_date', module_status='$_POST[m_status]'
WHERE module_id= '$_POST[edit_module_id]'");
  }  
  
 else {
      
     
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


 mysqli_query($con,"UPDATE module SET module_name='$_POST[edit_module_name]', module_description='$_POST[edit_module_description]', employee_username='$_POST[edit_module_employee]' , module_start_time= '$s_date', module_delivery_time='$d_date', module_attachment='$file', module_status='$_POST[m_status]'
WHERE module_id= '$_POST[edit_module_id]'");

}
  
  
  mysqli_close($con); //close connention.
  ?>


<script type="text/javascript">
alert("Module Edited Successfully.");
window.location.href="show_module.php";

</script>
  
