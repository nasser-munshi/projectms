
<?php
include 'header.php';
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
						<form name="user_registration"  class="form-horizontal"   method="post" action="user_registration.php"    onsubmit="return formValidation()"  enctype="multipart/form-data" >
						  <fieldset>
<!--							<legend>Create Project</legend>-->
							
                                                            <div class="control-group">
								<label class="control-label" for="focusedInput">Username</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="e_username" placeholder="username" required="">
								</div>
							  </div>


							<div class="control-group">
								<label class="control-label" for="focusedInput">Password</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="password" name="e_password" required="">
								</div>
							  </div>


							<div class="control-group">
								<label class="control-label" for="focusedInput">Confirm Password</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="password" name="e_repassword" required="">
								</div>
							  </div>
                                                            <div class="control-group">
								<label class="control-label" for="focusedInput">Full Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="e_name" required="">
								</div>
							  </div>

							<div class="control-group">
								<label class="control-label" for="focusedInput">Email</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" name="employee_email" placeholder="example@domain.com" required="" type="email">
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
							  <label class="control-label" for="date01">Birth Date</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01"  name="u_birth_date" required="">
							  </div>
							</div>
							
                                                           <div class="control-group">
								<label class="control-label" for="focusedInput">Post</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="employee_post" required="">
								</div>
							  </div>

                                                        
                                                         <div class="control-group">
								<label class="control-label" for="selectError3">Role</label>
								<div class="controls">
								  <select id="selectError3" name="u_role">
									<option value="Employee">Employee</option>
									<option value="Admin">Admin</option>
									
								  </select>
								</div>
							  </div>
                        
                                                        
                                                        
                                                 

							<div class="control-group">
							  <label class="control-label" for="fileInput">Image</label>
							  <div class="controls">
								<input name="uploadimage" class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div>   

							<div class="control-group">
								<label class="control-label" for="focusedInput">Contact Number</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="employee_contact_no" required="">
								</div>
							  </div>

							

							<div class="control-group">
								<label class="control-label" for="focusedInput">Current Address</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="employee_current_address" required="">
								</div>
							  </div>


							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Register</button>
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