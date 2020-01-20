<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form  name="form1" id="form1" method="post" action="phpq2.php" enctype="multipart/form-data">
	
    <div class="validator">
     <input type="file" name="ff">
    </div>

    <div class="validator">
	<input type="submit" name="submit" value="submit">
    </div>

    <?php
    	if($_GET['msg'])
    	{
    		$msg = $_GET['msg'];
    		echo $msg;
    	}


    ?>

   </form>


</body>
</html>