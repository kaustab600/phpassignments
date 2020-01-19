<?php
session_start();

//learned from coding passive income tutorial 
// learn Form Handling for backend checking

/*session_destroy();
unset($_SESSION['firstname']);
unset($_SESSION['secondname']);*/

if(isset($_POST['submit']))
{

if(!isset($_SESSION['firstname']))
			{
			$firstname = $_POST['firstname'];
			$secondname = $_POST['secondname'];
			session_start();
			$_SESSION['first'] = $firstname;
			$_SESSION['second'] = $secondname;
			//session_destroy();
			$url = "page2session.php";
			header("Location:".$url);
			exit();
		   }
}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form name="frm2" method="post" action="page1session.php">
		firstname:<input type="text" name="firstname">
		secondname:<input type="text" name="secondname">
		<input type="submit" name="submit" value="save">
	</form>
</body>

</html>