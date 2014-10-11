<!--MySQL connection Start-->
<?php
include 'header.php';
include '../connection.php';
$select= mysqli_query($con,"SELECT * FROM module Where project_id='$_SESSION[projectid]' AND module_status='successful'");

$select_F2 = mysqli_fetch_array($select);
$select2= mysqli_query($con,"SELECT * FROM module Where project_id='$_SESSION[projectid]' AND module_status='successful'");




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
						<h2><i class="icon-list-alt"></i> Modules </h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Module Name</th>
								  
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                                                      <?php
                                                      while($select_F = mysqli_fetch_array($select2))
                                                        {
                                                          echo "<tr>";
                                                          echo "<td>".$select_F['module_name']."</td>";
                                                         
                                                          
                                                          echo "<td class='center'>";
                                                       
                                                          echo "  <div class='btn-v'>
									  <form  action='module_report.php' method='post'>
                                                                                 <input type='hidden' name='m_report' value='". $select_F['module_id']."'  >  
                                                                            
                                                                                <input class='btn btn-info'  type='submit' value='Report'>
                                                                          </form>
                                                                    </div>
                                                                            ";
                                                                  
                                                          
                                                         
                                                    
                                                          
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