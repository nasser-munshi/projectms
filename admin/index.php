<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Admin Login</title>
<link href="admin_index/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
	<section id="content">
		<form name="admin_login" onsubmit="return formValidation()" method="post" action="admin_login.php">
			<h1>Admin Login</h1>
			<div>
				<input type="text" placeholder="Username" required="" id="username" name="a_username" />
			</div>
			<div>
				<input type="password" placeholder="Password" required="" id="password" name="admin_password" />
			</div>
			<div>
				<input type="submit" value="Log in" />
				<a href="reset_password_form.php">Lost your password?</a>
				
			</div>
		</form><!-- form -->
<!--		<div class="button">
			<a href="#">Download source file</a>
		</div>-->
                <!-- button -->
	</section><!-- content -->
</div><!-- container -->

<script src="../javascript/admin_login_validation.js"></script>

</body>
</html>