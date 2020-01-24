<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<style type="text/css">

		@import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

		*{
			margin: 0 ;
			padding: 0;

		}

		body{
			background-color: #76c3d6;
			font-family: 'Montserrat', sans-serif;
		}

		.container{
			width: 1000px;
			margin: 0 auto;
		}

		#loginform{
			width:100%;
		}

		.loginmain{
			background-color: white;
			z-index: 1;
			width:350px;
			padding: 30px;
			box-shadow: 4px 4px 6px black;
			transform: translate(55%,50%);
		}

		.loginmain:hover{
			box-shadow: 8px 8px 16px  black;
		}

		.loginmain h1{
			text-shadow: 2px 2px  4px grey;
			font-weight: 200;
			text-align: center;
			margin-bottom: 20px;

		}

		.loginmain h3{
			font-weight: 350;
			text-shadow: 1px 1px black;
			text-align: center;
			padding: 8px 0px;
		}

		.loginmain input[type="text"]{
			margin-left: 85px;
			width:50%;
			height:20px;
			border:1px solid black;
			padding: 3px;
			border-radius:8px;
		}

		.loginmain input[type="password"]{
			margin-left: 85px;
			width:50%;
			height:20px;
			border:1px solid black;
			padding: 3px;
			border-radius:8px;
		}



		.loginmain input:hover{
			box-shadow: 2px 2px 4px black;
		}

		.loginmain input[type=submit]{
			margin-top: 20px;
			margin-left: 43%;
			padding: 5px 15px;
			border-radius: 6px;
			border:2px solid black;

		}

		

		.loginmain input[type=submit]:hover{
				background-color: #99c7de;
				box-shadow: 2px 2px 4px black;
				
		}

	</style>
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
		<?php
			if(isset($_GET['msg']))
			{
				$msg =$_GET['msg'];
				echo"<script>alert('".$msg."');</script>";
			}

		?>
		<div class="parameters">
			<input type="submit" name="submit" value="Login">
		</div>
		
	</form>
</div>
</div>
</div>


</body>
</html>