<?php
if(isset($_POST['submit']))
{
	$fname = $_POST['firstname'];
	$lname  = $_POST['secondname'];
	$fullname = $fname." ".$lname;
	$_SESSION['first'] = $fname;
    $_SESSION['second'] = $lname;
	echo "Hello ".$fullname;

}
?>