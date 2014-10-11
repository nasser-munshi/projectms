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
						<h2><i class="icon-edit"></i> Change Security Question</h2>
						
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="c_sq.php">
						  <fieldset>
<!--							<legend>Create Project</legend>-->
							
                              
							

							<div class="control-group">
								<label class="control-label" for="focusedInput">Current Password</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="password" name="admin_current_password" required="" >
								</div>
							  </div>
                                                         <div class="control-group">
								<label class="control-label" for="selectError">Question</label>
								<div class="controls">
								  <select id="selectError" data-rel="chosen" name="sq_question"  required="">
                                                                      <option value="What is your favorite color?">What is your favorite color?</option>
                                                                      <option value="What is your favorite pet name?">What is your favorite pet name?</option>
                                                                      <option value="What is the name your favorite person?">What is the name your favorite person?</option>
								  <option value="What is the name your favorite book?">What is the name your favorite book?</option>
                                                                  <option value="What is the name your favorite poet?">What is the name your favorite poet?</option>
                                                                  </select>
								</div>
							  </div>
                                                            <div class="control-group">
								<label class="control-label" for="focusedInput">Answer</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="sq_answer" required="" >
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