<!--MySQL connection Start-->
<?php
include 'header.php';

include 'connection.php';

  $sq= mysqli_query($con,"SELECT * FROM security_question Where username='$_SESSION[username]'");
$sq_F = mysqli_fetch_array($sq);
  
  
$select= mysqli_query($con,"SELECT * FROM admin Where admin_username='$_SESSION[username]'");
$select_F = mysqli_fetch_array($select);
$date_birth = date_create($select_F["birth_date"]);
  $birth_date= date_format($date_birth, 'd/m/Y');
//  
//  
//   $date_d = date_create($select_F["module_delivery_time"]);
//  $d_date= date_format($date_d, 'd/m/Y');
?>
<!--MySQL connection End-->


<body>
		<!-- topbar starts -->
	<div class="navbar">
		<?php
include 'navbar.php';
?>
	</div>
	<!-- topbar ends -->
		<div class="container-fluid">
		<div class="row-fluid">
				
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<?php
include 'sidebar.php';
?>
			</div><!--/span-->
			<!-- left menu ends -->
			
			
			
			 <div id="content" class="span10">
			<!-- content starts -->
                        
                        <!--form start-->
                        
                        			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Profile</h2>
                                                <?php
                                                
                                                if(empty($sq_F))
                                                {
                                                    echo '
                                                         <div style="float: right;">
                                                    
                                                    <form action="s_sq_form.php">
							  <input type="submit" class="btn btn-info btn-round" value="Set Security Question">
                                                    </form>
                                                </div>
                                                        ';
                                                }
                                                
                                                else {
                                                     echo '
                                                         <div style="float: right;">
                                                    
                                                    <form action="c_sq_form.php">
							  <input type="submit" class="btn btn-info btn-round" value="Change Security Question">
                                                    </form>
                                                </div>
                                                        ';

                                                }

                                                
                                                ?>
                                                <div style="float: right; padding-right: 10px;">
                                                    
                                                    <form action="change_admin_password_form.php">
							  <input type="submit" class="btn btn-info btn-round" value="Change Password">
                                                    </form>
                                                </div>
                                                
                                                <div style="float: right; padding-right: 10px;">
                                                    
                                                    <form action="edit_admin_profile_form.php">
							  <input type="submit" class="btn btn-info btn-round" value="Edit Profile">
                                                    </form>
                                                </div>
                                                
						
					</div>
					<div class="box-content">
                                            <div class="form-horizontal" style="width: 800px; float: left;">
						  
							
							<div class="control-group">
								<p class="control-label">User Name : </p>
								<div class="controls">
                                                                    <P class="view_task"><?php echo $select_F["admin_username"]; ?></P>
								</div>
							  </div>
                                                        <div class="control-group">
								<p class="control-label">Full Name : </p>
								<div class="controls">
                                                                    <P class="view_task"><?php echo $select_F["full_name"]; ?></P>
								</div>
							  </div>
                                                <div class="control-group">
								<p class="control-label">Gender : </p>
								<div class="controls">
                                                                    <P class="view_task"><?php  echo $select_F["gender"]; ?></P>
								</div>
                                                </div>
                                                 <div class="control-group">
								<p class="control-label">Birth Date(D/M/Y) : </p>
								<div class="controls">
                                                                    <P class="view_task"><?php echo $birth_date; ?></P>
								</div>
							  </div>
                                                
                                                 <div class="control-group">
								<p class="control-label">Post : </p>
								<div class="controls">
                                                                    <P class="view_task"><?php  echo $select_F["post"]; ?></P>
								</div>
                                                </div>
                                                
                                               
                                                <div class="control-group">
								<p class="control-label">Email : </p>
								<div class="controls view_task_text">
                                                                    <P class="view_task"><?php echo $select_F["email"]; ?></P>
								</div>
                                                </div>
                                                
                                                <div class="control-group">
								<p class="control-label">Contact No : </p>
								<div class="controls view_task_text">
                                                                    <P class="view_task"><?php echo $select_F["contact_no"]; ?></P>
								</div>
                                                </div>
                                                
                                                <div class="control-group">
								<p class="control-label">Current Address : </p>
								<div class="controls view_task_text">
                                                                    <P class="view_task"><?php echo $select_F["current_address"]; ?></P>
								</div>
                                                </div>
						 
                                            </div>
                                            
                                            
                                            <div style="float: left;">
                                                <img style="width: 150px; height: 150px;" src="../u_images/<?php echo $select_F["image"]; ?>">
                                                
                                            </div>

					</div>
				</div><!--/span-->

			</div><!--/row-->
                        
                        
                        </div>
                        
				</div><!--/fluid-row-->
				
		<hr>

		<?php
include 'footer.php';
?>