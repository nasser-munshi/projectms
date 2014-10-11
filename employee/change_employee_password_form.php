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
						<h2><i class="icon-edit"></i> Change Password</h2>
						
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="change_employee_password.php">
						  <fieldset>
<!--							<legend>Create Project</legend>-->
							
                              
							

							<div class="control-group">
								<label class="control-label" for="focusedInput">Current Password</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="password" name="employee_current_password" required="" >
								</div>
							  </div>
                                                        <div class="control-group">
								<label class="control-label" for="focusedInput">New Password</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="password" name="employee_new_password" required="" >
								</div>
							  </div>
                                                            <div class="control-group">
								<label class="control-label" for="focusedInput">Confirm New Password</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="password" name="employee_confirm_new_password" required="" >
								</div>
							  </div>


							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Change Password</button>
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