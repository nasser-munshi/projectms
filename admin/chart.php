<?php
session_start();
include 'connection.php';
 
 
  
  $select_s = mysqli_query($con,"SELECT count(project_id) FROM project WHERE project_status='successful' AND MONTH(project_start_time) = (MONTH(NOW())) AND YEAR(project_start_time) = (YEAR(NOW()))");
  $select_s_F = mysqli_fetch_array($select_s);
$successful= $select_s_F[0];



  $select_p = mysqli_query($con,"SELECT count(project_id) FROM project WHERE project_status='pending' AND MONTH(project_start_time) = (MONTH(NOW())) AND YEAR(project_start_time) = (YEAR(NOW()))");
  $select_p_F = mysqli_fetch_array($select_p);
$pending= $select_p_F[0];


 
  $select_a = mysqli_query($con,"SELECT count(project_id) FROM project WHERE project_status='active' AND MONTH(project_start_time) = (MONTH(NOW())) AND YEAR(project_start_time) = (YEAR(NOW()))");
  $select_a_F = mysqli_fetch_array($select_a);
$active= $select_a_F[0];


$select_1 = mysqli_query($con,"SELECT count(project_id) FROM project WHERE  MONTH(project_start_time) = '01' AND YEAR(project_start_time) = (YEAR(NOW()))");
  $select_1_F = mysqli_fetch_array($select_1);
$jan= $select_1_F[0];

$select_2 = mysqli_query($con,"SELECT count(project_id) FROM project WHERE  MONTH(project_start_time) = '02' AND YEAR(project_start_time) = (YEAR(NOW()))");
  $select_2_F = mysqli_fetch_array($select_2);
$feb= $select_2_F[0];

$select_3 = mysqli_query($con,"SELECT count(project_id) FROM project WHERE  MONTH(project_start_time) = '03' AND YEAR(project_start_time) = (YEAR(NOW()))");
  $select_3_F = mysqli_fetch_array($select_3);
$mar= $select_3_F[0];

$select_4 = mysqli_query($con,"SELECT count(project_id) FROM project WHERE  MONTH(project_start_time) = '04' AND YEAR(project_start_time) = (YEAR(NOW()))");
  $select_4_F = mysqli_fetch_array($select_4);
$apr= $select_4_F[0];

$select_5 = mysqli_query($con,"SELECT count(project_id) FROM project WHERE  MONTH(project_start_time) = '05' AND YEAR(project_start_time) = (YEAR(NOW()))");
  $select_5_F = mysqli_fetch_array($select_5);
$may= $select_5_F[0];

$select_6 = mysqli_query($con,"SELECT count(project_id) FROM project WHERE  MONTH(project_start_time) = '06' AND YEAR(project_start_time) = (YEAR(NOW()))");
  $select_6_F = mysqli_fetch_array($select_6);
$jun= $select_6_F[0];

$select_7 = mysqli_query($con,"SELECT count(project_id) FROM project WHERE  MONTH(project_start_time) = '07' AND YEAR(project_start_time) = (YEAR(NOW()))");
  $select_7_F = mysqli_fetch_array($select_7);
$jul= $select_7_F[0];

$select_8 = mysqli_query($con,"SELECT count(project_id) FROM project WHERE  MONTH(project_start_time) = '08' AND YEAR(project_start_time) = (YEAR(NOW()))");
  $select_8_F = mysqli_fetch_array($select_8);
$aug= $select_8_F[0];

$select_9= mysqli_query($con,"SELECT count(project_id) FROM project WHERE  MONTH(project_start_time) = '09' AND YEAR(project_start_time) = (YEAR(NOW()))");
  $select_9_F = mysqli_fetch_array($select_9);
$sep= $select_9_F[0];

$select_10 = mysqli_query($con,"SELECT count(project_id) FROM project WHERE  MONTH(project_start_time) = '10' AND YEAR(project_start_time) = (YEAR(NOW()))");
  $select_10_F = mysqli_fetch_array($select_10);
$oct= $select_10_F[0];

$select_11 = mysqli_query($con,"SELECT count(project_id) FROM project WHERE  MONTH(project_start_time) = '11' AND YEAR(project_start_time) = (YEAR(NOW()))");
  $select_11_F = mysqli_fetch_array($select_11);
$nov= $select_11_F[0];

$select_12 = mysqli_query($con,"SELECT count(project_id) FROM project WHERE  MONTH(project_start_time) = '12' AND YEAR(project_start_time) = (YEAR(NOW()))");
  $select_12_F = mysqli_fetch_array($select_12);
$dec= $select_12_F[0];


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!--
		Charisma v1.0.0

		Copyright 2012 Muhammad Usman
		Licensed under the Apache License v2.0
		http://www.apache.org/licenses/LICENSE-2.0

		http://usman.it
		http://twitter.com/halalit_usman
	-->
	<meta charset="utf-8">
	<title>Project Panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

	<!-- The styles -->
	<link id="bs-css" href="css/bootstrap-journal.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/charisma-app.css" rel="stylesheet">
	<link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='css/fullcalendar.css' rel='stylesheet'>
	<link href='css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='css/chosen.css' rel='stylesheet'>
	<link href='css/uniform.default.css' rel='stylesheet'>
	<link href='css/colorbox.css' rel='stylesheet'>
	<link href='css/jquery.cleditor.css' rel='stylesheet'>
	<link href='css/jquery.noty.css' rel='stylesheet'>
	<link href='css/noty_theme_default.css' rel='stylesheet'>
	<link href='css/elfinder.min.css' rel='stylesheet'>
	<link href='css/elfinder.theme.css' rel='stylesheet'>
	<link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='css/opa-icons.css' rel='stylesheet'>
	<link href='css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
        
        
        
          <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Successful', <?php echo $successful; ?>],
          ['Pending', <?php echo $pending; ?>],
          ['Active', <?php echo $active; ?>]
        ]);

        // Set chart options
        var options = {'title':'Projects Of Current Month',
                       
                       'height':500,
                       is3D: true

                   
                   };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
    
    
    
    
    
    <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Month');
        data.addColumn('number', 'Projects');
        data.addRows([
          ['JAN', <?php echo $jan; ?>],
          ['FEB', <?php echo $feb; ?>],
          ['MAR', <?php echo $mar; ?>],
          ['APR', <?php echo $apr; ?>],
          ['MAY', <?php echo $may; ?>],
          ['JUN', <?php echo $jun; ?>],
          ['JUL', <?php echo $jul; ?>],
          ['AUG', <?php echo $aug; ?>],
          ['SEP', <?php echo $sep; ?>],
          ['OCT', <?php echo $oct; ?>],
          ['NOV', <?php echo $nov; ?>],
          ['DEC', <?php echo $dec; ?>]
        ]);

        // Set chart options
        var options = {'title':'PROJECTS',
            vAxis: {title: 'Month',  titleTextStyle: {color: 'red'}},
                       
                       'height':500,
                       

                   
                   };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
        
        
        
        
        
		
</head>
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
			
			
			<div id="content" class=" box span5">
			<!-- content starts -->
			

			
                                <div id="piechart_3d" style="width: 500px; "></div>
		
			
			
					
			 
		</div><!--/row-->
		
                <div id="content" class="box span5">
			<!-- content starts -->
			

			
                                <div id="chart_div" style="width: 500px; "></div>
		
			
			
					
			 
		</div><!--/row-->
                
					<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
		<hr>

		<?php
include 'footer.php';
?>