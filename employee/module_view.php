<!--MySQL connection Start-->
<?php
include 'header.php';
$_SESSION["module_id"]= $_POST["e_m_view"];
include '../connection.php';
$select= mysqli_query($con,"SELECT * FROM module Where module_id='$_POST[e_m_view]'");
$select_F = mysqli_fetch_array($select);
$date_s = date_create($select_F['module_start_time']);
                                                          $s_date= date_format($date_s, 'm-d-Y (h a)');
                                                          
                                                            $date_d = date_create($select_F['module_delivery_time']);
                                                          $d_date= date_format($date_d, 'm-d-Y (h a)');
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
						<h2><i class="icon-edit"></i> Module</h2>
                                                <div style="float: right;">
                                                    
                                                        
							  <!--<input type="submit" class="btn btn-success btn-round" value="Active Module">-->
							  <?php
							  if($select_F['module_status']=="pending")
                                                          {
                                                              echo "
									
									  <form  action='module_activate.php' method='post'>
                                                                                 <input type='hidden' name='e_m_action' value='". $select_F['module_id']."'  >
                                                                            
                                                                                <input class='btn btn-success btn-round'  type='submit' value='Activate'>
                                                                          </form>
                                                                    
                                                                     
                                                                        "; 
                                                          }
                                                            
                                                          elseif($select_F['module_status']=="active")
                                                          {
                                                              echo "
									
									  <form  action='module_submit_form.php' method='post'>
                                                                                 <input type='hidden' name='e_m_action' value='". $select_F['module_id']."'  >
                                                                            
                                                                                <input class='btn btn-success btn-round'  type='submit' value='Submit'>
                                                                          </form>
                                                                    
                                                                    
                                                                        "; 
                                                          }
                                                          
                                                           elseif($select_F['module_status']=="successful")
                                                          {
                                                              echo "
									
									  <form  action='module_edit_report_form.php' method='post'>
                                                                                 <input type='hidden' name='e_m_action' value='". $select_F['module_id']."'  >
                                                                            
                                                                                <input class='btn btn-success btn-round'  type='submit' value='Edit Report'>
                                                                          </form>
                                                                    
                                                                    
                                                                        "; 
                                                          }
                                                   ?>
                                                </div>
						
					</div>
					<div class="box-content" >
                                            <div class="form-horizontal">
						  
							
							<div class="control-group">
								<p class="control-label">Module Name : </p>
								<div class="controls">
                                                                    <P class="view_task"><?php echo $select_F["module_name"]; ?></P>
								</div>
							  </div>
                                                        <div class="control-group">
								<p class="control-label">Employee : </p>
								<div class="controls">
                                                                    <P class="view_task"><?php echo $select_F["employee_username"]; ?></P>
								</div>
							  </div>
                                                 <div class="control-group">
								<p class="control-label">Start Date(M-D-Y) : </p>
								<div class="controls">
                                                                    <P class="view_task"><?php echo $s_date; ?></P>
								</div>
							  </div>
                                                 <div class="control-group">
								<p class="control-label">Delivery Date(D/M/Y) : </p>
								<div class="controls">
                                                                    <P class="view_task"><?php echo $d_date; ?></P>
								</div>
                                                </div>
                                                
                                                <div class="control-group">
								<p class="control-label">Attachment : </p>
								<div class="controls view_task_text">
                                                                    <P class="view_task"><a href="download.php?filename=../upload/<?php echo $select_F["module_attachment"]; ?>"><?php echo $select_F["module_attachment"]; ?></a></P>
								</div>
                                                </div>
                                                
                                                <div class="control-group">
								<p class="control-label">Module Description : </p>
								<div class="controls view_task_text">
                                                                    <P class="view_task"><?php echo $select_F["module_description"]; ?></P>
								</div>
                                                </div>
						 
                                            </div>

					</div>
				</div><!--/span-->

			</div><!--/row-->
                        
                        
                        </div>
                        
				</div><!--/fluid-row-->
				
		<hr>

	<?php
include 'footer.php';
        ?>