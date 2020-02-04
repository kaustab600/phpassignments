<?php
	session_start();

	/*if (isset($_SESSION['LAST_ACTIVITY'])) {
    // request 30 minates ago
		echo time()."<br>";
		echo $_SESSION['LAST_ACTIVITY']."<br>";
		$diff = time() - $_SESSION['LAST_ACTIVITY'];
		echo "diff ".$diff;
		if($diff>20)
		{
    		session_destroy();
    		session_unset();
    		header('Location:loginform.php');
		}
		$_SESSION['LAST_ACTIVITY'] = time();
    }
		$_SESSION['LAST_ACTIVITY'] = time();
  //echo $_SESSION['mail'];
  //session_destroy();*/
 if(!isset($_SESSION['uid']))
 {
 	header('Location:logout.php');
 	exit();
 }

?>

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
	<form name="frm3" id="frm2" method="post">
		<h2>new password</h2>
		<input type="text" name="newpass">
		<h2>retype password</h2>
		<input type="text" name="crmfpass">
		<input type="submit" name="submit" value="submit">
		
	</form>
   </div>
</div>
	<?php
	require('connection.php');
	if(isset($_POST['submit']))
	{
		$pass = $_POST['newpass'];
		$crmfpass = $_POST['crmfpass'];
		if($pass != $crmfpass)
		{
			echo"<script>alert('confirm password invalid');</script>";
		}
		else
		{
			$uid = $_SESSION['uid'];
			$qr1 = "update loginuser set password='".md5($pass)."' where uid ='".$uid."'";
			$rs = mysqli_query($conn,$qr1);
			if($rs)
			{
				session_destroy();
				header('Location:loginform.php');
			}
			else
			{	
				echo mysqli_error($conn);
			}
		}
		
	}


?>
</body>
</html>
