<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form  name="form1" id="form1" method="post" action="phpq3.php">
	<div class="validator">
    <textarea  name="subjectmarks" rows="6" cols="20" class="textpart" placeholder="enter subject|marks"></textarea>
    </div>
    <?php
    		if($_GET['msg'])
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