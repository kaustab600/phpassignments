<?php
 require('sessioncheck.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="mystylephp3.css?v=1"/>
</head>
<body>

     <div class="header">
    <div class="container">
        <h1>PHP ASSIGNMENTS 3</h1>
        <a class="logout" href="logout.php">LOGOUT</a>
        <h3>Q3)Add a text area to the above form and accept marks of different subjects in the format, English|80. <br>One subject in each line. Once values entered and submitted, accept them to display the values in the form of a table.</h3>
        
        
    </div>
    </div>

     <div class="main">
        <div class="container">
	<form  name="form1" id="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
       
    <textarea  name="subjectmarks" id="textsubjects" rows="6" cols="20" class="textpart" placeholder="enter subject|marks"></textarea>

	<input type="submit" name="submit" value="submit">
    <?php
        include('phpq3.php');
    ?>
   
    </form>

</div>
</div>

<div class="footer">
    <div class="container">

 
     <div class="pagination">
     <a href="#">&laquo;</a>
     <a href="question1.php">1</a>
     <a href="question2.php">2</a>
     <a class="active" href="question3.php">3</a>
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