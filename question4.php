<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="myscript.js"></script>
</head>
<body>
	<form  name="form1" id="form1" method="post" action="phpq4.php">

	 <div class="validator">
    	ContactNo:<input type="text" name="telephoneno" id="telno" placeholder="enter valid  contactno" onblur="func()" value="" required>
    </div>

    <?php
    	if(isset($_GET['msg']))
    	{
    		$msg = $_GET['msg'];
    		echo $msg;
    	}


    ?>

    <div class="validator">
	<input type="submit" name="submit" value="submit">
    </div>

</form>


</body>
</html>