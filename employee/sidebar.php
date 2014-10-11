<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Main Menu</li>
						<li><a class="ajax-link" href="employee_panel.php"><i class="icon-home"></i><span class="hidden-tablet"> Employee Panel</span></a></li>
						
                                                   <?php 
                                                if(!empty($employee_prjct_F))
                                                {
                                                    echo "<li><a class='ajax-link' href='../project/main.php'><i class='icon-font'></i><span class='hidden-tablet'> Manage Projects</span></a></li>";
                                               
                                                }  
                                                    ?>
                                                
						<li><a class="ajax-link" href="show_module.php"><i class="icon-font"></i><span class="hidden-tablet"> Show All Module</span></a></li>
                                               
						<li><a class="ajax-link" href="send_message_form.php"><i class="icon-pencil"></i><span class="hidden-tablet"> Send Message</span></a></li>
					</ul>
					
				</div><!--/.well -->