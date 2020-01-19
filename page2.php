<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		if(!isset($_GET['firstname']))
		{
			header('Location:page1.php');
			exit();
		}

		$firstname = $_GET['firstname'];
		$secondname = $_GET['secondname'];
		echo "Hello".$firstname." ".$secondname."<a href='page1.php?msg=goodjob'>clickMe</a>";

	?>

</body>
</html>