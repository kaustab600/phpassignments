<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form name="frm2" method="post">
		username:<input type="text" name="username">
	<select name="question">
		<option value="what is your address">what is your address</option>
		<option value="what is your name">what is your name</option>
		<option value="which pet do you have">which pet do you have</option>
		
	</select>
	answer<input type="text" name="answer">
		<input type="submit" name="submit" value="verify">
	</form>

</body>
</html>


<?php
	require('connection.php');

	if(isset($_POST['submit']))
	{
		$ques = $_POST['question'];
		$ans = $_POST['answer'];
		$qr2 = "select uid from loginuser where phrase='".$ques."' and answer='".$ans."'";
		$rs = mysqli_query($conn,$qr2);
		if(mysqli_num_rows($rs)>0)
		{
			header('Location:newpassword.php');
		}
		else
		{
			echo mysqli_error($conn);
		}
	}

?>