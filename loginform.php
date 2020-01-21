<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
	<div class="container">
	<form name="login" method="post" action="questio7.php">
		<div class="parameters">
			<h3>EmailID</h3>
			<input type="text" name="email">
		</div>
		<div class="parameters">
			<h3>Password</h3>
			<input type="password" name="passwordid">
		</div>
		<?php
			if(isset($_GET['msg']))
			{
				$msg =$_GET['msg'];
				echo"<script>alert('please fill all the fields');</script>";
			}

		?>
		<div class="parameters">
			<input type="submit" name="submit" value="Login">
		</div>
		
	</form>
</div>


</body>
</html>