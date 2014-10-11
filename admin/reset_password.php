<?php 

function generatePassword($length=9, $strength=0) {
    $vowels = 'aeuy';
    $consonants = 'bdghjmnpqrstvz';
    if ($strength & 1) {
        $consonants .= 'BDGHJLMNPQRSTVWXZ';
    }
    if ($strength & 2) {
        $vowels .= "AEUY";
    }
    if ($strength & 4) {
        $consonants .= '23456789';
    }
    if ($strength & 8) {
        $consonants .= '@#$%';
    }
    $password = '';
    $alt = time() % 2;
    for ($i = 0; $i < $length; $i++) {
        if ($alt == 1) {
            $password .= $consonants[(rand() % strlen($consonants))];
            $alt = 0;
        } else {
            $password .= $vowels[(rand() % strlen($vowels))];
            $alt = 1;
        }
    }
    return $password;
}





$con=mysqli_connect("localhost","root","","pms"); //connect to the mysql database.

// Check connection start
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  //check connection end

    $select= mysqli_query($con,"SELECT * FROM security_question Where username='$_POST[a_username]'");
$select_F = mysqli_fetch_array($select);
if($select_F["question"]==$_POST["a_question"])
{
    if($select_F["answer"]==$_POST["a_answer"])
    {
        $pass= generatePassword();
        
        
        mysqli_query($con,"UPDATE admin SET password='$pass' 
WHERE admin_username= '$_POST[a_username]'");
        
        
        
    }
 else {
       
        ?>
<script type="text/javascript">
alert("Wrong Answer.");
window.location.href="index.php";

</script>


<?php
        
    }
}
 else {
      
        ?>
<script type="text/javascript">
alert("Wrong Security Question.");
window.location.href="index.php";

</script>


<?php
}

    ?>
<script type="text/javascript">
alert("Use Password: <?php echo $pass; ?> for login. ");
window.location.href="index.php";

</script>


<php

mysqli_close($con);
?>