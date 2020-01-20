<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="myscript.js"></script>
</head>
<body>


<form  name="form1" id="form1" method="post" action="http://localhost/sample.php">
	<div class="validator">
		Firstname:<input type="text" name="firstname" id="first" pattern="[a-zA-Z ]{1,}" placeholder="enter Firstname" required onkeyup="OnBlurInput()"/>
	</div>

	<div class="validator">
	Lastname:<input type="text" name="secondname" id="second" placeholder="enter Lastname" pattern="[a-zA-Z ]{1,}" required  onkeyup="OnBlurInput()"/>
    </div>

    <div class="validator">
	Fullname:<input type="text" disabled="true" id="full" />
    </div>

</form>
</body>
</html>