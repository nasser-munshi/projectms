<?php
session_start();
include 'connection.php';
 
 
  
  $passL = mysqli_query($con,"SELECT password FROM admin WHERE admin_username='$_POST[a_username]'");
  $passL_F = mysqli_fetch_array($passL);
  
  $pass = md5($_POST["admin_password"]);
 
  
  if($passL_F['password']=="")
  {
      echo 'You are not register. Please complete your registration';
  }
  
  elseif($passL_F['password']=="$pass")
  {
      
      session_start();
      if(isset($_SESSION['username']))
{
          $_SESSION['username']=$_POST['a_username'];
          $_SESSION['user_role']="admin";
          header('Location: admin_panel.php');
      }
 else {
        $_SESSION['username']=$_POST['a_username'];
          $_SESSION['user_role']="admin";
        header('Location: admin_panel.php');
      }
    
   
  }
  else {
   echo 'Username Password doesnot matched.'  ; 
  }
 
  
?>