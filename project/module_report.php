<!--MySQL connection Start-->
<?php
include 'header.php';
include '../connection.php';
$select= mysqli_query($con,"SELECT * FROM module Where module_id='$_POST[m_report]'");
$select_F = mysqli_fetch_array($select);
$date_s = date_create($select_F['module_submitted_date']);
                                                          $s_date= date_format($date_s, 'm-d-Y (h a)');
  
  
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
                                               
						
					</div>
					<div class="box-content">
                                            <div class="form-horizontal" style="width: 500px; margin: auto;">
						  
							
							
                                                 <div class="control-group">
								<p class="control-label" style="width: 152px;">Submitted Date (M-D-Y) : </p>
								<div class="controls">
                                                                    <P class="view_task"><?php echo $s_date; ?></P>
								</div>
							  </div>
                                                
                                                
                                                <div class="control-group">
								<p class="control-label">Attachment : </p>
								<div class="controls view_task_text">
                                                                    <P class="view_task"><a href="download.php?filename=../upload/<?php echo $select_F["module_submitted_attachment"]; ?>"><?php echo $select_F["module_submitted_attachment"]; ?></a></P>
								</div>
                                                </div>
                                                
                                                <div class="control-group">
								<p class="control-label">Module Description : </p>
								<div class="controls view_task_text">
                                                                    <P class="view_task"><?php echo $select_F["module_submitted_description"]; ?></P>
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