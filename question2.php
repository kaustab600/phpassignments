<?php
require('sessioncheck.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="mystylephp2.css"/>
</head>
<body>

    <div class="header">
    <div class="container">
        <h1>PHP ASSIGNMENTS 2</h1>
        <a class="logout" href="logout.php">LOGOUT</a>
        <h3>Q2)Add a new field to accept user image in addition to the above fields.<br>On submit store the image in the backend and display it with the full name below it.</h3>
        
        
    </div>
    </div>

    <div class="main">
        <div class="container">
	<form  name="form1" id="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
	
    <div class="validator">
        Firstname:<input type="text" name="firstname" id="first" pattern="[a-zA-Z ]{1,}" placeholder="enter Firstname" required />
    </div>

    <div class="validator">
    Lastname:<input type="text" name="secondname" id="second" placeholder="enter Lastname" pattern="[a-zA-Z ]{1,}" required />
    </div>

    <div class="validator">
    Fullname:<input type="text" disabled="true" id="full" name="fullname" />
    </div>

    <div class="validator">
     <input type="file" name="ff">
    </div>

    <div class="validator">
	<input type="submit" name="submit" value="submit">
    </div>
    <?php require('phpq2.php');  ?>
    </form>
</div>
</div>
    
  <div class="footer">
    <div class="container">

    <div class="pagination">
     <a href="#">&laquo;</a>
     <a href="question1.php">1</a>
     <a class="active" href="question2.php">2</a>
     <a href="question3.php">3</a>
     <a href="question4.php">4</a>
     <a href="question5.php">5</a>
     <a href="question6.php">6</a>
     <a href="#">&raquo;</a>
    </div>
</div>
</div>

    <script src="myscript.js"></script>

</body>
</html>