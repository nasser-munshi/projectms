<!--MySQL connection Start-->
<?php
include 'header.php';
$con=mysqli_connect("localhost","root","","pms");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  $result = mysqli_query($con,"SELECT * FROM employee");
$show = mysqli_query($con,"SELECT * FROM module WHERE module_id= '$_POST[m_edit]'");
$edit= mysqli_fetch_array($show);

$edit_s_date_temp= date_create($edit["module_start_time"]);
  $s_date_h= date_format($edit_s_date_temp, 'H');
$s_temp=0;
if($s_date_h>12)
{
    $s_date_h=$s_date_h-12;
    $s_temp=1;
}

$edit_d_date_temp= date_create($edit["module_delivery_time"]);
  $d_date_h= date_format($edit_d_date_temp, 'H');
$d_temp=0;
if($d_date_h>12)
{
    $d_date_h=$d_date_h-12;
    $d_temp=1;
}






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
						<h2><i class="icon-edit"></i> Edit Module</h2>
						
					</div>
					<div class="box-content">
						<form name="edit_create_module" class="form-horizontal" method="post" action="module_edit.php" onsubmit="return formValidation()" enctype="multipart/form-data">
						  <fieldset>
<!--							<legend>Create Project</legend>-->
							<div class="control-group">
								<label class="control-label" for="focusedInput">Module Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="edit_module_name" required="" value="<?php echo $edit["module_name"];?>">
								</div>
							  </div>
                                                            <input type='hidden' name='edit_module_id' value="<?php echo $edit["module_id"];?>" >


                                                         <div class="control-group">
								<label class="control-label" for="selectError">Employee</label>
								<div class="controls">
								  <select id="selectError" data-rel="chosen" name="edit_module_employee"  required="">
                                                                      
									<?php
                                                                        echo "<option value='".$edit['employee_username']."'>".$edit['employee_username']."</option>";   
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
								<input type="text" class="input-xlarge datepicker" id="date01"  name="edit_module_start_date" required="" value="<?php
                                                                                                                                                                          $date_s = date_create($edit["module_start_time"]);
                                                                                                                                                                          $s_date= date_format($date_s, 'm/d/Y');
                                                                
                                                                                                                                                                          echo $s_date;?>">
							  </div>
							</div>
                                                        
                                                         <div class="control-group">

                                                                        <label class="control-label" for="appendedInput">

                                                                            Start Time

                                                                        </label>
                                                                        <div class="controls">
                                                                            <div class="input-append">
                                                                                <input id="appendedInput" type="text" name="start_time" required="" value="<?php echo $s_date_h; ?>"   size="16"></input>
                                                                               

                                                                                    <select class="add-on" style="height: 28px;" name="start_hour">
                                                                                           <?php
                                                                                           if($s_temp==1)
                                                                                           {
                                                                                           echo '
                                                                                               <option value="pm">PM</option>
                                                                                                <option value="am">AM</option>
                                                                                        
                                                                                                ';
                                                                                           }
                                                                                           elseif ($s_temp==0) {
                                                                                           echo '
                                                                                               <option value="am">AM</option>
                                                                                        <option value="pm">PM</option>
                                                                                                ';
                                                                                           }
                                                                                        
                                                                                        ?>

                                                                                    </select>

                                                                              
                                                                            </div>
                                                                            
                                                                      </div>

                                                                </div>
                                                            
                                                            
                                                        <div class="control-group">
							  <label class="control-label" for="date01">Submission Date</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date02"  name="edit_module_submit_date" required="" value="<?php
                                                                                                                                                                          $date_d = date_create($edit["module_delivery_time"]);
                                                                                                                                                                          $d_date= date_format($date_s, 'm/d/Y');
                                                                
                                                                                                                                                                          echo $d_date;?>">
							  </div>
							</div>
                                                            
                                                            
                                                            
                                                             <div class="control-group">

                                                                        <label class="control-label" for="appendedInput">

                                                                            Submission Time

                                                                        </label>
                                                                        <div class="controls">
                                                                            <div class="input-append">
                                                                                <input id="appendedInput" type="text" name="submit_time" required="" value="<?php echo $d_date_h; ?>"   size="16"></input>
                                                                               

                                                                                    <select class="add-on" style="height: 28px;" name="submit_hour">
                                                                                           <?php
                                                                                           if($d_temp==1)
                                                                                           {
                                                                                           echo '
                                                                                               <option value="pm">PM</option>
                                                                                                <option value="am">AM</option>
                                                                                        
                                                                                                ';
                                                                                           }
                                                                                           elseif ($d_temp==0) {
                                                                                           echo '
                                                                                               <option value="am">AM</option>
                                                                                        <option value="pm">PM</option>
                                                                                                ';
                                                                                           }
                                                                                        
                                                                                        ?>

                                                                                    </select>

                                                                              
                                                                            </div>
                                                                            
                                                                      </div>

                                                                </div>
                                                            
                                                            
                                                            <div class="control-group">
								<label class="control-label" for="selectError3">Status</label>
								<div class="controls">
								  <select id="selectError3" name="m_status">
									<option value="pending">Pending</option>
									<option value="active">Active</option>
                                                                        <option value="successful">Successful</option>
									
								  </select>
								</div>
							  </div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Attachment</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file" name="e_upload_file">
							  </div>
							</div>          
							<div class="control-group">
							  <label class="control-label" for="textarea2">Module Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="edit_module_description"><?php echo $edit["module_description"];?></textarea>
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Edit Module</button>
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