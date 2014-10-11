<?php
session_start();
//file upload start

if(!($_POST["e_password"]==$_POST["e_repassword"]))
{
    ?>
<script type="text/javascript">
alert("Password and Comfirm Password does not match.");
window.location.href="user_registration_form.php";

</script>
<?php
    die();
}

$allowedExts = array("gif", "jpeg", "jpg", "png","JPG","rar", "pdf", "doc", "xls", "ppt", "txt");
$temp = explode(".", $_FILES["uploadimage"]["name"]);
$extension = end($temp);
if ( in_array($extension, $allowedExts )
        && ($_FILES["uploadimage"]["size"] <20971520 ))
  {
  if ($_FILES["uploadimage"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["uploadimage"]["error"] . "<br>";
    }
  else
    {
   

    if (file_exists("../u_images/" . $_FILES["uploadimage"]["name"]))
      {
      echo $_FILES["uploadimage"]["name"] . " already exists. Please Reaname Your File. ";
      exit();
      }
    else
      {
      move_uploaded_file($_FILES["uploadimage"]["tmp_name"],
      "../u_images/" . $_FILES["uploadimage"]["name"]);
     
      }
	 
    }
  }
else
  {
  echo "Invalid file";
  exit();
  }

//file upload end
  
  
$filename= ($_FILES["uploadimage"]["name"]);


include 'connection.php';
 
  $_POST["e_password"]= md5($_POST["e_password"]);
  
  
  $date_birth = date_create($_POST["u_birth_date"]);
  $birth_date= date_format($date_birth, 'Y-m-d');
  
  if($_POST["u_role"]=="Employee")
  {
       $sql="INSERT INTO employee (employee_username, password, full_name, post, current_address,image,contact_no, email, gender, birth_date)
VALUES
('$_POST[e_username]','$_POST[e_password]','$_POST[e_name]','$_POST[employee_post]','$_POST[employee_current_address]','$filename','$_POST[employee_contact_no]','$_POST[employee_email]','$_POST[u_gender]','$birth_date')";
  
  }
  else
  {
    $sql="INSERT INTO admin (admin_username, password, full_name, post, current_address,image,contact_no, email, gender, birth_date)
VALUES
('$_POST[e_username]','$_POST[e_password]','$_POST[e_name]','$_POST[employee_post]','$_POST[employee_current_address]','$filename','$_POST[employee_contact_no]','$_POST[employee_email]','$_POST[u_gender]','$birth_date')";
    
  }
  
  
  if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

  

mysqli_close($con); //close connention.
?>
<script type="text/javascript">
alert("User Registered Successfully.");
window.location.href="user_registration_form.php";

</script>