<!--MySQL connection Start-->
<?php
include 'header.php';
$con=mysqli_connect("localhost","root","","pms");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$select= mysqli_query($con,"SELECT * FROM module Where employee_username='$_SESSION[username]'");
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
						<h2><i class="icon-list-alt"></i> Modules </h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Module Name</th>
								  <th>Employee</th>
								  <th>Start Time (M-D-Y)</th>
								  <th>Delivery Time(M-D-Y)</th>
                                                                  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                                                      <?php
                                                      while($select_F = mysqli_fetch_array($select))
                                                        {
                                                          
                                                          $date_s = date_create($select_F['module_start_time']);
                                                          $s_date= date_format($date_s, 'm-d-Y (h a)');
                                                          
                                                            $date_d = date_create($select_F['module_delivery_time']);
                                                          $d_date= date_format($date_d, 'm-d-Y (h a)');
                                                          
                                                          
                                                          echo "<tr>";
                                                          echo "<td>".$select_F['module_name']."</td>";
                                                          echo "<td>".$select_F['employee_username']."</td>";
                                                          echo "<td class='center'>".$s_date."</td>";
                                                          echo "<td class='center'>".$d_date."</td>";
                                                          
                                                          if($select_F['module_status']=="pending")
                                                          {
                                                              echo "
									<td class='center'>
									<span class='label label-warning'>Pending</span>
								</td>
                                                                        "; 
                                                          }
                                                            
                                                          elseif($select_F['module_status']=="active")
                                                          {
                                                               echo "
									<td class='center'>
									<span class='label btn-primary'>Active</span>
								</td>
                                                                        "; 
                                                          }
                                                          
                                                           elseif($select_F['module_status']=="successful")
                                                          {
                                                               echo "
									<td class='center'>
									<span class='label label-success'>Successful</span>
								</td>
                                                                        ";
                                                          }
                                                          
                                                          
                                                          
                                                          
                                                          echo "<td class='center'>";
                                                       
                                                          echo "  <div class='btn-v'>
									  <form  action='module_view.php' method='post'>
                                                                                 <input type='hidden' name='e_m_view' value='". $select_F['module_id']."'  >  
                                                                            
                                                                                <input class='btn btn-success'  type='submit' value='View'>
                                                                          </form>
                                                                    </div>
                                                                            ";
                                                          if($select_F['module_status']=="pending")
                                                          {
                                                              echo "
									<div class='btn-e'>
									  <form  action='module_activate.php' method='post'>
                                                                                 <input type='hidden' name='e_m_action' value='". $select_F['module_id']."'  >
                                                                            
                                                                                <input class='btn btn-info'  type='submit' value='Activate'>
                                                                          </form>
                                                                    
                                                                     </div>
                                                                        "; 
                                                          }
                                                            
                                                          elseif($select_F['module_status']=="active")
                                                          {
                                                              echo "
									<div class='btn-e'>
									  <form  action='module_submit_form.php' method='post'>
                                                                                 <input type='hidden' name='e_m_action' value='". $select_F['module_id']."'  >
                                                                            
                                                                                <input class='btn btn-info'  type='submit' value='Submit'>
                                                                          </form>
                                                                    
                                                                     </div>
                                                                        "; 
                                                          }
                                                          
                                                           elseif($select_F['module_status']=="successful")
                                                          {
                                                              echo "
									<div class='btn-e'>
									  <form  action='module_edit_report_form.php' method='post'>
                                                                                 <input type='hidden' name='e_m_action' value='". $select_F['module_id']."'  >
                                                                            
                                                                                <input class='btn btn-info'  type='submit' value='Edit Report'>
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


<!--		<footer>
			<p class="pull-left">&copy; <a href="http://usman.it" target="_blank">Muhammad Usman</a> 2012</p>
			<p class="pull-right">Powered by: <a href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
		</footer>
		-->
	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.min.js"></script>
	<script src="js/jquery.flot.pie.min.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="js/charisma.js"></script>
	
		
</body>
</html>
