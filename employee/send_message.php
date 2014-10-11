<?php
session_start();
include '../connection.php';
 
 
  
  
 
//file upload start

if(empty($_FILES["msg_file"]["name"]))
{
    
  $sql="INSERT INTO messages (sender, receiver, subject, body)
VALUES
('$_SESSION[username]','$_POST[msg_username]','$_POST[msg_subject]','$_POST[msg_description]')";
}


else{

$allowedExts = array("gif", "jpeg", "jpg", "png","zip","rar", "pdf", "doc", "xls", "ppt", "txt");
$temp = explode(".", $_FILES["msg_file"]["name"]);
$extension = end($temp);
if ( in_array($extension, $allowedExts )
        && ($_FILES["msg_file"]["size"] <20971520 ))
  {
  if ($_FILES["msg_file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["msg_file"]["error"] . "<br>";
    }
  else
    {
   

    if (file_exists("../msg_upload/" . $_FILES["msg_file"]["name"]))
      {
      echo $_FILES["msg_file"]["name"] . " already exists. Please Reaname Your File. ";
      exit();
      }
    else
      {
      move_uploaded_file($_FILES["msg_file"]["tmp_name"],
      "../msg_upload/" . $_FILES["msg_file"]["name"]);
     
      }
	 
    }
  }
else
  {
  echo "Invalid file";
  exit();
  }

//file upload end
  
  
$file= ($_FILES["msg_file"]["name"]);



  
  

  $sql="INSERT INTO messages (sender, receiver, subject, body, attachment)
VALUES
('$_SESSION[username]','$_POST[msg_username]','$_POST[msg_subject]','$_POST[msg_description]','$file')";
}

 if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }




  

mysqli_close($con); //close connention.
?>

<script type="text/javascript">
alert("Message sent Successfully.");
window.location.href="send_message_form.php";

</script>