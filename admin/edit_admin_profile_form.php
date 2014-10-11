<!--MySQL connection Start-->
<?php

include 'header.php';
include 'connection.php';
$select= mysqli_query($con,"SELECT * FROM admin Where admin_username='$_SESSION[username]'");
$select_F = mysqli_fetch_array($select);
$date_birth = date_create($select_F["birth_date"]);
  $birth_date= date_format($date_birth, 'm/d/Y');
mysqli_close($con); //close connention.
?>


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
						<h2><i class="icon-edit"></i> Create New User</h2>
						
					</div>
					<div class="box-content">
						<form name="edit_admin_profile" class="form-horizontal" method="post" action="edit_admin_profile.php" onsubmit="return formValidation()" enctype="multipart/form-data">
						  <fieldset>
<!--							<legend>Create Project</legend>-->
							
                                                            <div class="control-group">
								<label class="control-label" for="focusedInput">Username</label>
								<div class="controls">
								  
                                                                  <input class="input-xlarge disabled" id="disabledInput" type="text"  disabled="" value="<?php echo $select_F["admin_username"]; ?>">
								</div>
							  </div>


							
                                                            <div class="control-group">
								<label class="control-label" for="focusedInput">Full Name</label>
								<div class="controls">
								
                                                                  <input class="input-xlarge disabled" id="disabledInput" type="text"  disabled="" value="<?php echo $select_F["full_name"]; ?>">
								</div>
							  </div>

							<div class="control-group">
								<label class="control-label" for="focusedInput">Email</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="admin_email" value="<?php echo $select_F["email"]; ?>" required="" type="email">
								</div>
							  </div>

                                                           <div class="control-group">
								<label class="control-label">Gender</label>
								<div class="controls">
								  <label class="radio">
									<input type="radio" name="u_gender" id="optionsRadios1" value="Male" checked="">
									Male
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<input type="radio" name="u_gender" id="optionsRadios2" value="Female">
									Female
								  </label>
								</div>
							  </div>

							<div class="control-group">
							  <label class="control-label" for="date01">Date Of Birth</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01"  name="u_birth_date" required="" value="<?php echo $birth_date; ?>">
							  </div>
							</div>
							
                                                           <div class="control-group">
								<label class="control-label" for="focusedInput">Post</label>
								<div class="controls">
								
                                                                  <input class="input-xlarge disabled" id="disabledInput" type="text"  disabled="" value="<?php echo $select_F["post"]; ?>">
								</div>
							  </div>

                                                        
                                                        
                        
                                                        
                                                        
                                                 

							<div class="control-group">
							  <label class="control-label" for="fileInput">Image</label>
							  <div class="controls">
								<input name="e_uploadimage" class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div>   

							<div class="control-group">
								<label class="control-label" for="focusedInput">Contact Number</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="admin_contact_no" required="" value="<?php echo $select_F["contact_no"]; ?>">
								</div>
							  </div>

							

							<div class="control-group">
								<label class="control-label" for="focusedInput">Current Address</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="admin_current_address" required="" value="<?php echo $select_F["current_address"]; ?>">
								</div>
							  </div>


							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Edit Profile</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
                        
                        
                        </div>
                        
                        
                        
                        
                        
			
			
<!--form end-->				
		<hr>
<?php
include 'footer.php';
?>