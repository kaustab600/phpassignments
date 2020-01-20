<?php

	$contact = $_POST['telephoneno'];

	if(!preg_match('/^(\+91)\d{10}$/', $contact))
	{
		header('Location:question4.php?msg=invalid contactno');
		exit();
	}
	else
	{
		echo "<script>alert('valid email');</script>";

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	contactno:<?php echo $contact;?>
</body>
</html>

