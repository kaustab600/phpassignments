<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylepass.css">
</head>
<body>
	<div class="header">
		<div class="container">
			<h1>Reset Password</h1>
		</div>
		
	</div>
	<div id="main">
	<div class="container">
	<form name="frm2" method="post" id="frm2">
		<h3>Username</h3>
	<input type="text" name="username">
	<h3>Question</h3>
	<select name="question">
		<option  selected=""></option>
		<option value="what is your address">what is your address</option>
		<option value="what is your name">what is your name</option>
		<option value="which pet do you have">which pet do you have</option>
		
	</select>
	<h3>Answer</h3>
	<input type="text" name="answer">
		<input type="submit" name="submit" value="verify">
	</form>
</div>
</div>

</body>
</html>


<?php
	require('connection.php');

	if(isset($_POST['submit']))
	{
		$ques = $_POST['question'];
		$ans = $_POST['answer'];
		$user = $_POST['username'];
		$qr1 = "select uid from loginuser where username='".$user."'";
		$res = mysqli_query($conn,$qr1);
		if(mysqli_num_rows($res)>0)
		{
			$qr2 = "select uid from loginuser where phrase='".$ques."' and answer='".$ans."' and username='".$user."'";
			$rs = mysqli_query($conn,$qr2);
			if(mysqli_num_rows($rs)>0)
			{	
				$row = mysqli_fetch_assoc($rs);
				session_start();
				$_SESSION['uid'] = $row['uid'];
				header('Location:newpassword.php');
			}
			else
			{
				echo mysqli_error($conn);
			}
		}
		else
		{
			echo mysqli_error($conn);
		}
		
	}

?>