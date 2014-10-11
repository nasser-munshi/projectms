<!--MySQL connection Start-->
<?php


include '../connection.php';
$select= mysqli_query($con,"SELECT * FROM messages Where msg_id='$_POST[msg_view]'");
$select_F = mysqli_fetch_array($select);

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
						<h2><i class="icon-edit"></i> Message</h2>
                                                <div style="float: right;">
                                                    
                                                        
							  <!--<input type="submit" class="btn btn-success btn-round" value="Active Module">-->
							  <?php
							  if($select_F["message_status"]=='unread')
                                                            {
                                                                
                                                            
                                                          
                                                          echo "
									
									  <form  action='message_read.php' method='post'>
                                                                                 <input type='hidden' name='msg_read' value='". $select_F['msg_id']."'  >
                                                                            
                                                                                <input class='btn btn-info'  type='submit' value='Mark As Read'>
                                                                          </form>
                                                                    
                                                                     
                                                                        ";
                                                                        
                                                          
                                                          }
                                                          
                                                          
                                                          
                                                   ?>
                                                </div>
						
					</div>
					<div class="box-content">
                                            <div class="form-horizontal">
						  
							
							<div class="control-group">
								<p class="control-label">Sender Username : </p>
								<div class="controls">
                                                                    <P class="view_task"><?php echo $select_F["sender"]; ?></P>
								</div>
							  </div>
                                                        <div class="control-group">
								<p class="control-label">Subject:  </p>
								<div class="controls">
                                                                    <P class="view_task"><?php echo $select_F["subject"]; ?></P>
								</div>
							  </div>
                                               
                                                
                                             
                                                
                                                <div class="control-group">
								<p class="control-label"> Description : </p>
								<div class="controls view_task_text">
                                                                    <P class="view_task"><?php echo $select_F["body"]; ?></P>
								</div>
                                                </div>
                                                <?php
                                                if(!empty($select_F["attachment"]))
                                                {
                                                  
                                                    echo '
                                                        <div class="control-group">
								<p class="control-label">Attachment : </p>
								<div class="controls view_task_text">
                                                                    <P class="view_task"><a href="download.php?filename=../msg_upload/'. $select_F["attachment"].'">'. $select_F["attachment"].'</a></P>
								</div>
                                                </div>


                                                                ';
                                                    
                                                }
                                                ?>
                                                   
                                                
						 
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