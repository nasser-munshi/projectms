<?php
$con=mysqli_connect("localhost","root","","pms"); //connect to the mysql database.

// Check connection start
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  //check connection end
  
  ?>