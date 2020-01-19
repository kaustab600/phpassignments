<?php

	session_start();

	//session_destroy();

	//session_unset();

	
	if(!$_SESSION['first'])
	{
		header("Location:page1session.php");
		exit();
	}
	else
	{
		$firstname1 = $_SESSION['first'];
		$secondname1 = $_SESSION['second'];
		echo $firstname1." ".$secondname1;
		session_destroy();
		
	}


?>