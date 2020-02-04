<?php
	session_start();
	session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
	<div id="loginform">
		<div class="container">
		<div class="loginmain">
			<h1>LOGIN</h1>
	<form name="login" method="post" action="questio7.php">
		<div class="parameters">
			<h3>EmailID</h3>
			<input type="text" name="email">
		</div>
		<div class="parameters">
			<h3>Password</h3>
			<input type="password" name="passwordid">
		</div>
		<?php include('Gettinginvalidlogin.php'); ?>
		<div class="parameters">
			<input type="submit" name="submit" value="Login">
		</div>
		<div id="pass">
		<a href="forgotpass.php">Forgot Password</a>
		</div>
	</form>
</div>
</div>
</div>


</body>
</html>