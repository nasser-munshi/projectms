<?php
session_start();

include '../connection.php';
 
  $date_birth_e = date_create($_POST["u_birth_date"]);
  $birth_date_e= date_format($date_birth_e, 'Y-m-d');
//file upload start

if(empty($_FILES["e_uploadimage"]["name"]))
{
    
    mysqli_query($con,"UPDATE employee SET email='$_POST[employee_email]', gender='$_POST[u_gender]',birth_date='$birth_date_e',contact_no='$_POST[employee_contact_no]', current_address='$_POST[employee_current_address]'
WHERE employee_username= '$_SESSION[username]'");
}


else{

$allowedExts = array("gif", "jpeg", "jpg", "png","JPG","rar", "pdf", "doc", "xls", "ppt", "txt");
$temp = explode(".", $_FILES["e_uploadimage"]["name"]);
$extension = end($temp);
if ( in_array($extension, $allowedExts )
        && ($_FILES["e_uploadimage"]["size"] <20971520 ))
  {
  if ($_FILES["e_uploadimage"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["e_uploadimage"]["error"] . "<br>";
    }
  else
    {
   

    if (file_exists("../u_images/" . $_FILES["e_uploadimage"]["name"]))
      {
      echo $_FILES["e_uploadimage"]["name"] . " already exists. Please Reaname Your File. ";
      exit();
      }
    else
      {
      move_uploaded_file($_FILES["e_uploadimage"]["tmp_name"],
      "../u_images/" . $_FILES["e_uploadimage"]["name"]);
     
      }
	 
    }
  }
else
  {
  echo "Invalid file";
  exit();
  }

//file upload end
  
  
$file= ($_FILES["e_uploadimage"]["name"]);


 mysqli_query($con,"UPDATE employee SET email='$_POST[employee_email]', gender='$_POST[u_gender]',birth_date='$birth_date_e',contact_no='$_POST[employee_contact_no]', image ='$file', current_address='$_POST[employee_current_address]' 
WHERE employee_username= '$_SESSION[username]'");
  
  

  
}
echo "Successfully Edited.";
  

mysqli_close($con); //close connention.
?>
