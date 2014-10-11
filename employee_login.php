<?php
$con=mysqli_connect("localhost","root","","pms");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
   
 
  
  $passL = mysqli_query($con,"SELECT password FROM employee WHERE employee_username='$_POST[emp_username]'");
  $passL_F = mysqli_fetch_array($passL);
  $pass = md5($_POST["emp_password"]);
  if($passL_F['password']=="")
  {
      echo 'You are not register. Please complete your registration';
  }
  
  elseif($passL_F['password']=="$pass")
  {
      
      session_start();
      if(isset($_SESSION['username']))
{
           $_SESSION['username']=$_POST['emp_username'];
          $_SESSION['user_role']="employee";
          header('Location: employee/employee_panel.php');
      }
 else {
        $_SESSION['user_role']="employee";
        $_SESSION['username']=$_POST['emp_username'];

        header('Location: employee/employee_panel.php');
      }
    
    ?>


 <?php
  }
  else {
   echo 'Username Password doesnot matched.'  ; 
  }
  
  
  
 
  
  
?>