
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
						<h2><i class="icon-edit"></i> Send Message </h2>
						
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="send_message.php" enctype="multipart/form-data">
						  <fieldset>
<!--							<legend>Create Project</legend>-->
							
                                                        
                                                         
                                                        
							<div class="control-group">
								<label class="control-label" for="focusedInput"> To </label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="msg_username" required="">
								</div>
							  </div>
                                                        

                                                          <div class="control-group">
								<label class="control-label" for="focusedInput"> Subject </label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="msg_subject" required="">
								</div>
							  </div>


                                                        

							          
							<div class="control-group">
							  <label class="control-label" for="textarea2"> Text </label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="msg_description"></textarea>
							  </div>
							</div>

                                                        <div class="control-group">
							  <label class="control-label" for="fileInput">File Attachment</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file" name="msg_file" >
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Send Message</button>
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