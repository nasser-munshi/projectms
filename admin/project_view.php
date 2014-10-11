<!--MySQL connection Start-->
<?php

include 'connection.php';
$select= mysqli_query($con,"SELECT * FROM project Where project_id='$_POST[p_view]'");
$select_F = mysqli_fetch_array($select);
$date_s = date_create($select_F['project_start_time']);
                                                          $s_date= date_format($date_s, 'm-d-Y (h a)');
                                                          
                                                            $date_d = date_create($select_F['project_delivery_time']);
                                                          $d_date= date_format($date_d, 'm-d-Y (h a)');
?>
<!--MySQL connection End-->

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
						<h2><i class="icon-edit"></i> Project</h2>
                                               
						
					</div>
					<div class="box-content">
                                            <div class="form-horizontal">
						  
							
							<div class="control-group">
								<p class="control-label">Project Name : </p>
								<div class="controls">
                                                                    <P class="view_task"><?php echo $select_F["project_name"]; ?></P>
								</div>
							  </div>
                                                        <div class="control-group">
								<p class="control-label">Project Leader : </p>
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
								<p class="control-label">Delivery Date(M-D-Y) : </p>
								<div class="controls">
                                                                    <P class="view_task"><?php echo $d_date; ?></P>
								</div>
                                                </div>
                                                
                                                <div class="control-group">
								<p class="control-label">Attachment : </p>
								<div class="controls view_task_text">
                                                                    <P class="view_task"><a href="download.php?filename=../upload/<?php echo $select_F["project_attachment"]; ?>"><?php echo $select_F["project_attachment"]; ?></a></P>
								</div>
                                                </div>
                                                
                                                <div class="control-group">
								<p class="control-label">Module Description : </p>
								<div class="controls view_task_text">
                                                                    <P class="view_task"><?php echo $select_F["project_description"]; ?></P>
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