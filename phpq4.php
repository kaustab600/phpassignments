<?php
 if(isset($_POST['submit']))
 {
	$contact = $_POST['telephoneno'];

	if(!preg_match('/^(\+91)\d{10}$/', $contact))
	{
		echo "<script>alert('INVALID contact');</script>";
	
	}
	else
	{
		//echo "<script>alert('VALID contact');</script>";
    echo "Contact:".$contact;
    $_SESSION['contactno'] = $contact;

	}
}
?>

