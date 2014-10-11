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
			

			
		
			
			<div class="row-fluid">
				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-info-sign"></i> Introduction</h2>
					
					</div>
					<div class="box-content">
                                            <div style="margin-left: 10px;">
						<h1>Admin Activity: </h1>
                                                <br>
                                                <ul style="list-style-type:circle;">
                                                    
                                                
						<li>Admin can Add new user.</li>
                                                <li>Admin can Delete user.</li>
                                                <li>Admin can create new project.</li>
                                                <li>Admin can edit project.</li>
                                                <li>Admin can Delete project.</li>
                                                <li>Admin can Change project manager.</li>
                                                <li>Admin can change any password</li>
                                                <li>Admin can send message to any one.</li>
                                                <li>Admin can see project report submitted by project leader.</li>
                                                <li>Admin can see bar chart which show monthly project number.</li>
                                                <li>Admin can see Pie chart which show Current Month projects status.</li>
						</ul>
                                            </div>
						
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
					
			

			
				  

		  
       
					<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
		<hr>

		<?php
include 'footer.php';
?>