<!--MySQL connection Start-->
<?php
include 'header.php';
$_SESSION["project_id"]= $_POST["e_p_action"];
include '../connection.php';
$select= mysqli_query($con,"SELECT * FROM project Where project_id='$_SESSION[project_id]'");
$select_F = mysqli_fetch_array($select);
$date_s = date_create($select_F["project_submitted_date"]);
  $s_date= date_format($date_s, 'm/d/Y');
  
  $edit_d_date_temp= date_create($select_F["project_submitted_date"]);
  $d_date_h= date_format($edit_d_date_temp, 'H');
$d_temp=0;
if($d_date_h>12)
{
    $d_date_h=$d_date_h-12;
    $d_temp=1;
}
  
  
?>
<?php


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
						<h2><i class="icon-edit"></i> Edit Submitted Project Report </h2>
						
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="project_edit_report.php" enctype="multipart/form-data">
						  <fieldset>
<!--							<legend>Create Project</legend>-->
							
                                                        
                                                         
                                                        
							<div class="control-group">
							  <label class="control-label" for="date01">Submit Date</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01"  name="submit_project_date" required="" value="<?php echo $s_date; ?>">
							  </div>
							</div>
                                                        
                                                       


                                                                  <div class="control-group">

                                                                        <label class="control-label" for="appendedInput">

                                                                            Submission Time

                                                                        </label>
                                                                        <div class="controls">
                                                                            <div class="input-append">
                                                                                <input id="appendedInput" type="text" name="submit_time" value="<?php echo $d_date_h; ?>" required=""  size="16"></input>
                                                                               

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
							  <label class="control-label" for="fileInput">Attachment</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file" name="submit_project_file">
							  </div>
							</div>          
							<div class="control-group">
							  <label class="control-label" for="textarea2">Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="submit_project_description"><?php echo $select_F["project_submitted_description"]; ?></textarea>
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