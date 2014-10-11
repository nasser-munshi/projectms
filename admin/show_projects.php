<!--MySQL connection Start-->
<?php

include 'connection.php';
$select= mysqli_query($con,"SELECT * FROM project");
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
                        
                        <div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-list-alt"></i> Projects</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Project Name</th>
								  <th>Project Manager</th>
								  <th>Project Start Time(M-D-Y)</th>
								  <th>Project Delivery Time(M-D-Y)</th>
                                                                  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                                                      <?php
                                                      while($select_F = mysqli_fetch_array($select))
                                                        {
                                                          
                                                          $date_s = date_create($select_F['project_start_time']);
                                                          $s_date= date_format($date_s, 'm-d-Y (h a)');
                                                          
                                                            $date_d = date_create($select_F['project_delivery_time']);
                                                          $d_date= date_format($date_d, 'm-d-Y (h a)');
                                                          
                                                          echo "<tr>";
                                                          echo "<td>".$select_F['project_name']."</td>";
                                                          echo "<td>".$select_F['employee_username']."</td>";
                                                          echo "<td class='center'>".$s_date."</td>";
                                                          echo "<td class='center'>".$d_date."</td>";
                                                         
                                                          if($select_F['project_status']=="pending")
                                                          {
                                                              echo "
									<td class='center'>
									<span class='label label-warning'>Pending</span>
								</td>
                                                                        "; 
                                                          }
                                                            
                                                          elseif($select_F['project_status']=="active")
                                                          {
                                                               echo "
									<td class='center'>
									<span class='label btn-primary'>Active</span>
								</td>
                                                                        "; 
                                                          }
                                                          
                                                           elseif($select_F['project_status']=="successful")
                                                          {
                                                               echo "
									<td class='center'>
									<span class='label label-success'>Successful</span>
								</td>
                                                                        ";
                                                          }
                                                           
                                                          
                                                          
                                                          
                                                          echo "<td class='center'>";
                                                       
                                                          echo "  <div class='btn-v'>
									  <form  action='project_view.php' method='post'>
                                                                                 <input type='hidden' name='p_view' value='". $select_F['project_id']."'  >  
                                                                            
                                                                                <input class='btn btn-success'  type='submit' value='View'>
                                                                          </form>
                                                                    </div>
                                                                            ";
                                                                  
                                                          
                                                          echo "
									<div class='btn-e'>
									  <form  action='project_edit_form.php' method='post'>
                                                                                 <input type='hidden' name='p_edit' value='". $select_F['project_id']."'  >
                                                                            
                                                                                <input class='btn btn-info'  type='submit' value='Edit'>
                                                                          </form>
                                                                    
                                                                     </div>
                                                                        ";
                                                                        
                                                          echo "
                                                                        <div class='btn-d'>
									  <form  action='project_delete.php' method='post'>
                                                                                 <input type='hidden' name='p_del' value='". $select_F['project_id']."'  > 
                                                                            
                                                                                <input class='btn btn-danger '  type='submit' value='Delete'>
                                                                          </form>
                                                                       </div>
                                                                       ";
                                                      
                                                      
                                                      
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