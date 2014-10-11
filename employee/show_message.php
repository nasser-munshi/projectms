<!--MySQL connection Start-->
<?php
include 'header.php';
include '../connection.php';
$select= mysqli_query($con,"SELECT * FROM messages WHERE receiver='$_SESSION[username]'");
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
                        
                        <div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-list-alt"></i> Messages </h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Sender Username</th>
								  
								  <th>Subject</th>
								  
                                                                  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                                                      <?php
                                                      while($select_F = mysqli_fetch_array($select))
                                                        {
                                                          echo "<tr>";
                                                          echo "<td>".$select_F['sender']."</td>";
                                                          echo "<td>".$select_F['subject']."</td>";
                                                         
                                                         
                                                          if($select_F['message_status']=="unread")
                                                          {
                                                              echo "
									<td class='center'>
									<span class='label label-warning'>Unread</span>
								</td>
                                                                        "; 
                                                          }
                                                            
                                                        
                                                          
                                                           elseif($select_F['message_status']=="read")
                                                          {
                                                               echo "
									<td class='center'>
									<span class='label label-success'>Read</span>
								</td>
                                                                        ";
                                                          }
                                                           
                                                          
                                                          
                                                          
                                                          echo "<td class='center'>";
                                                       
                                                          echo "  <div class='btn-v'>
									  <form  action='message_view.php' method='post'>
                                                                                 <input type='hidden' name='msg_view' value='". $select_F['msg_id']."'  >  
                                                                            
                                                                                <input class='btn btn-success'  type='submit' value='View'>
                                                                          </form>
                                                                    </div>
                                                                            ";
                                                            if($select_F["message_status"]=='unread')
                                                            {
                                                                
                                                            
                                                          
                                                          echo "
									<div class='btn-e'>
									  <form  action='message_read.php' method='post'>
                                                                                 <input type='hidden' name='msg_read' value='". $select_F['msg_id']."'  >
                                                                            
                                                                                <input class='btn btn-info'  type='submit' value='Mark As Read'>
                                                                          </form>
                                                                    
                                                                     </div>
                                                                        ";
                                                          
                                                           echo "
                                                                        <div class='btn-d' style='margin-left: 60px;'>
									  <form  action='message_delete.php' method='post'>
                                                                                 <input type='hidden' name='msg_del' value='". $select_F['msg_id']."'  > 
                                                                            
                                                                                <input class='btn btn-danger '  type='submit' value='Delete'>
                                                                          </form>
                                                                       </div>
                                                                       ";
                                                                        
                                                          
                                                          }
                                                        else {
                                                             echo "
                                                                        <div class='btn-d'>
									  <form  action='message_delete.php' method='post'>
                                                                                 <input type='hidden' name='msg_del' value='". $select_F['msg_id']."'  > 
                                                                            
                                                                                <input class='btn btn-danger '  type='submit' value='Delete'>
                                                                          </form>
                                                                       </div>
                                                                       ";

                                                        }
                                                          
                                                         
                                                      
                                                      
                                                      
//                                                      
                                                          
                                                          echo "</td>";
                                                          echo "</tr>";
                                                      
                                                        }
                                                      
                                                      ?>
<!--                                                      	<tr>
								<td>David R</td>
								<td class="center">2012/01/01</td>
								<td class="center">Member</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>  
										View                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="icon-trash icon-white"></i> 
										Delete
									</a>
								</td>
							</tr>
                                                      -->
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                        
                        
                        
                        
                                            </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->  
			
                 </div>	
                </div>
		<hr>

	<?php
include 'footer.php';
?>