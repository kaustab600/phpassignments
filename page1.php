<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form name="frm1" method="post" action="page1.php">
		firstname:<input type="text" name="firstname">
		secondname:<input type="text" name="secondname">
		<input type="submit" name="submit" value="save">
	</form>

	<?php

		

		if(isset($_POST['submit']))
		{
			$firstname = $_POST['firstname'];
			$secondname = $_POST['secondname'];
			$url = 'page2.php?firstname='.$firstname.'&secondname='.$secondname;
			header('Location:'.$url);
			exit();
		}

		if (isset($_GET['msg'])) {
			 	$msg = $_GET['msg'];
				echo $msg;

			}

	?>
</body>
</html>