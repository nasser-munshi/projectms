<!--MySQL connection Start-->
<?php
include 'header.php';
$_SESSION["project_id"]= $_POST["e_p_action"];
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
			
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
                        <div id="content" class="span10">
			<!-- content starts -->
                        
                        <!--form start-->
                        
                        			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Submit Project </h2>
						
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="project_submit.php" enctype="multipart/form-data">
						  <fieldset>
<!--							<legend>Create Project</legend>-->
							
                                                        
                                                         
                                                        
							<div class="control-group">
							  <label class="control-label" for="date01">Submit Date</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01"  name="submit_project_date" required="">
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
								<input class="input-file uniform_on" id="fileInput" type="file" name="submit_project_file" required=''>
							  </div>
							</div>          
							<div class="control-group">
							  <label class="control-label" for="textarea2">Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="submit_project_description"></textarea>
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Submit Project</button>
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