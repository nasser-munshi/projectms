<!--MySQL connection Start-->
<?php

include '../connection.php';
$result = mysqli_query($con,"SELECT * FROM employee");
?>
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
						<h2><i class="icon-edit"></i> Create New Module</h2>
						
					</div>
					<div class="box-content">
						<form name="create_module" class="form-horizontal" method="post" action="create_module.php" onsubmit="return formValidation()" enctype="multipart/form-data">
						  <fieldset>
<!--							<legend>Create Project</legend>-->
							<div class="control-group">
								<label class="control-label" for="focusedInput">Module Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="create_module_name" required="">
								</div>
							  </div>
                                                        
                                                         <div class="control-group">
								<label class="control-label" for="selectError">Employee</label>
								<div class="controls">
								  <select id="selectError" data-rel="chosen" name="module_employee"  required="">
									<?php
                                                                            while ($row=mysqli_fetch_array($result)) {
                                                                            echo "<option value='".$row['employee_username']."'>".$row['employee_username']."</option>";   
                                                                            }
                                                                        ?>
								  </select>
								</div>
							  </div>
                                                        
							<div class="control-group">
							  <label class="control-label" for="date01">Start Date</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01"  name="m_start_date" required="">
							  </div>
							</div>
                                                        
                                                        <div class="control-group">

                                                                        <label class="control-label" for="appendedInput">

                                                                            Start Time

                                                                        </label>
                                                                        <div class="controls">
                                                                            <div class="input-append">
                                                                                <input id="appendedInput" type="text" name="start_time" required=""  size="16"></input>
                                                                               

                                                                                    <select class="add-on" style="height: 28px;" name="start_hour">

                                                                                        <option value="am">AM</option>
                                                                                        <option value="pm">PM</option>
                                                                                        

                                                                                    </select>

                                                                              
                                                                            </div>
                                                                            
                                                                      </div>

                                                                </div>




                                                        
                                                        <div class="control-group">
							  <label class="control-label" for="date01">Submission Date</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date02"  name="m_submit_date" required="">
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
								<input class="input-file uniform_on" id="fileInput" type="file" name="upload_file" required="">
							  </div>
							</div>          
							<div class="control-group">
							  <label class="control-label" for="textarea2">Module Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="create_module_description"></textarea>
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Create Module</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
                        
                        
                        </div>
                        
				</div><!--/fluid-row-->
				
		<hr>
<?php
include 'footer.php';
        ?>