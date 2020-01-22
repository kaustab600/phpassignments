<?php
if(isset($_POST['submit']))
{
	$fname = $_POST['firstname'];
	$lname  = $_POST['secondname'];
	$fullname = $fname." ".$lname;
	echo "Hello ".$fullname;

}
?>