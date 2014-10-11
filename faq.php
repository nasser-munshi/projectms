
<?php
$page='faq';
include 'home_header.php';



$con=mysqli_connect("localhost","root","","pms");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$select= mysqli_query($con,"SELECT * FROM faq");


?>




  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
          
         <div style="width: 600px;  border: solid 1px #e1e0e0; border-radius: 10px; margin-top: 20px;   background: #ffffff;">
             <br>
             <?php
             while ($row = mysqli_fetch_array($select)) {
                 echo '<p style="color: #40b5ff; font-weight: bold; font-size: 20px; line-height: 30px; text-align: center;"> Q.'.$row["id"].': '.$row["question"] .'</p>';
                 echo '<p style="color: #aaaaaa; font-weight: bold; font-size: 15px; line-height: 20px; text-align: center;"><i>'.$row["answer"].'</i>  </p>';
             }
             
             
 
             ?>
             
             <br> 
    </div>
          
          
          
      </div>
        
      <div class="sidebar">
        <?php
            include 'home_sidebar.php';
        ?>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <?php
            include 'home_footer.php';
        ?>