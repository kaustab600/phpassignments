<?php
require('sessioncheck.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
    <link rel="stylesheet" type="text/css" href="mystylephp4.css"/>
</head>
<body>
    <div class="header">
    <div class="container">
        <h1>PHP ASSIGNMENTS 4</h1>
        <a class="logout" href="logout.php">LOGOUT</a>
    <h3>Q4)Add a new text field to the above form to accept the phone number from the user. The number will belong to an Indian user. So, the number should begin with +91 and not be more than 10 digits.</h3>
     </div>
    </div>

    <div class="main">
        <div class="container">
	<form  name="form1" id="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    
    	ContactNo:<input type="text" name="telephoneno" id="telno" placeholder="enter valid  contactno"  required>
  
	<input type="submit" name="submit" value="submit">

    <?php
    include('phpq4.php');
       
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
     <a class="active" href="question4.php">4</a>
     <a href="question5.php">5</a>
     <a href="question6.php">6</a>
     <a href="#">&raquo;</a>
    </div>
</div>
</div>
<script src="myscriptq4.js"></script>
</body>
</html>