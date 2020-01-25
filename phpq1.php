<?php

if(isset($_POST['submit']))
{   
	$fname = $_POST['firstname'];
	$lname  = $_POST['secondname'];
	
	if(preg_match('/^[a-zA-Z ]{1,}$/', $fname) and preg_match('/^[a-zA-Z ]{1,}$/', $lname))
	{
		$fullname = $fname." ".$lname;
		$_SESSION['first'] = $fname;
    	$_SESSION['second'] = $lname;
		echo "Hello ".$fullname;
	}
	else
	{
		echo "<script>alert('please enter valid name');</script>";
	}
}
?>