<?php
include 'header.php';
$_SESSION['projectid']=$_POST['p_work'];
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
						<h1>Project Leader Activity: </h1>
                                                <br>
                                                <ul style="list-style-type:circle;">
                                                    
                                                
						<li>Project Leader divided a project into several Modules.</li>
                                                <li>Project Leader can create Module and select employee for this module.</li>
                                                <li>Project Leader can edit module.</li>
                                                <li>Project Leader can change module employee.</li>
                                                <li>Project Leader can see module report submitted by employee.</li>
                                                
                                                
                                                
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