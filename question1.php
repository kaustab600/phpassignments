<?php
require('sessioncheck.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="mystylephp1.css?v=1"/>	
</head>
<body>
	
	<div class="header">
    <div class="container">
        <h1>PHP ASSIGNMENTS 1</h1>
        <a class="logout" href="logout.php">LOGOUT</a>
        <h3>Q1)Create a form with below fields:</h3>
        <h3>First Name - User will input only alphabets<br>Last Name - User will input only alphabets</h3>
        <h3>Full name: User cannot enter a value in Full name field. It will be disabled by default. When the first name and last name fields are filled, this field outputs the sum of the above 2 fields.</h3>
        
    </div>
    </div>

    <div class="main">
    	<div class="container">

<form  name="form1" id="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<div class="validator">
		Firstname:<input type="text" name="firstname" id="first" pattern="[a-zA-Z ]{1,}" placeholder="enter Firstname" required />
	</div>

	<div class="validator">
	Lastname:<input type="text" name="secondname" id="second" placeholder="enter Lastname" pattern="[a-zA-Z ]{1,}" required />
    </div>

    <div class="validator">
	Fullname:<input type="text" disabled="true" id="full" />
    </div>

    

    <div class="validator">
  <input type="submit" name="submit" value="submit">
    </div>
      <?php
include('phpq1.php');
?>
</form>
</div>
</div>


<div class="footer">
    <div class="container">
     <div class="pagination">
     
     <a class="active" href="question1.php">1</a>
     <a href="question2.php">2</a>
     <a href="question3.php">3</a>
     <a href="question4.php">4</a>
     <a href="question5.php">5</a>
     <a href="question6.php">6</a>
     <a href="question2.php">&raquo;</a>
    </div>
</div>
</div>
	<script src="myscript.js"></script>
</body>

</html>

		