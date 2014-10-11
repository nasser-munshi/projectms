<!--MySQL connection Start-->
<?php
include 'header.php';
$_SESSION["module_id"]= $_POST["e_m_action"];
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
						<h2><i class="icon-edit"></i> Submit Module </h2>
						
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="module_submit.php" enctype="multipart/form-data">
						  <fieldset>
<!--							<legend>Create Project</legend>-->
							
                                                        
                                                         
                                                        
							<div class="control-group">
							  <label class="control-label" for="date01">Submit Date</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01"  name="submit_module_date" required="">
							  </div>
							</div>
                                                        
                                                         <div class="control-group">

                                                                        <label class="control-label" for="appendedInput">

                                                                            Submission Time

                                                                        </label>
                                                                        <div class="controls">
                                                                            <div class="input-append">
                                                                                <input id="appendedInput" type="text" name="submit_time" required=""  size="16"></input>
                                                                               

                                                                                    <select class="add-on" style="height: 28px;" name="submit_hour">

                                                                                        <option value="am">AM</option>
                                                                                        <option value="pm">PM</option>
                                                                                        

                                                                                    </select>

                                                                              
                                                                            </div>
                                                                            
                                                                      </div>

                                                                </div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Attachment</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file" name="submit_module_file" required=''>
							  </div>
							</div>          
							<div class="control-group">
							  <label class="control-label" for="textarea2">Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="submit_module_description"></textarea>
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Submit Module</button>
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