<!--MySQL connection Start-->
<?php

include 'connection.php';
$select= mysqli_query($con,"SELECT * FROM project Where project_id='$_POST[p_report]'");
$select_F = mysqli_fetch_array($select);

   $date_d = date_create($select_F['project_submitted_date']);
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
						<h2><i class="icon-edit"></i> Report </h2>
                                               
						
					</div>
					<div class="box-content">
                                            <div class="form-horizontal" style="width: 500px; margin: auto;">
						  
							
							
                                                 <div class="control-group">
								<p class="control-label" style="width: 152px;">Submitted Date (M-D-Y) : </p>
								<div class="controls">
                                                                    <P class="view_task"><?php echo $d_date; ?></P>
								</div>
							  </div>
                                                
                                                
                                                <div class="control-group">
								<p class="control-label">Attachment : </p>
								<div class="controls view_task_text">
                                                                    <P class="view_task"><a href="download.php?filename=../upload/<?php echo $select_F["project_submitted_attachment"]; ?>"><?php echo $select_F["project_submitted_attachment"]; ?></a></P>
								</div>
                                                </div>
                                                
                                                <div class="control-group">
								<p class="control-label">Project Description : </p>
								<div class="controls view_task_text">
                                                                    <P class="view_task"><?php echo $select_F["project_submitted_description"]; ?></P>
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
