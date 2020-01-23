<?php
 require('sessioncheck.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="mystylephp5.css"/>
</head>
<body>
     <div class="header">
    <div class="container">
        <h1>PHP ASSIGNMENTS 5</h1>
        <a class="logout" href="logout.php">LOGOUT</a>
    <h3>Q5)Add a new single text field to the above form that will accept email id. Do not use email id input field type.</h3>
     </div>
    </div>

    <div class="main">
        <div class="container">
	<form  name="form1" id="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
       
    emailid:<input type="text" id="emailid" name="emailid" placeholder="enter email id" />

	<input type="submit" name="submit" value="submit">
    <?php
    include('phpq5.php');
    ?>
    </form>
    </div>
</div>

<div class="footer">
    <div class="container">


     <div class="pagination">
     <a href="#">&laquo;</a>
     <a  href="question1.php">1</a>
     <a href="question2.php">2</a>
     <a href="question3.php">3</a>
     <a href="question4.php">4</a>
     <a class="active" href="question5.php">5</a>
     <a href="question6.php">6</a>
     <a href="#">&raquo;</a>
    </div>

</div>
</div>

	<script src="myscriptq5.js"></script>
</body>
</html>