<?php
session_start();
//echo $_SESSION['mail'];
//session_destroy();
 if(!isset($_SESSION['mail']))
 {
  header('Location:logout.php');
  exit();
 }

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="mystylephp3.css"/>
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
	<form  name="form1" id="form1" method="post" action="phpq3.php" enctype="multipart/form-data">
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
    <textarea  name="subjectmarks" rows="6" cols="20" class="textpart" placeholder="enter subject|marks"></textarea>
    </div>
    <?php


            if(isset($_GET['q']))
            {
                $q = $_GET['q'];
                //echo "question".$q.".php";
                if($q == '7')
                {
                    header('Location:logout.php');
                }
                else
                {
                   header("Location:question".$q.".php");
                   exit();
                }
                
            }



        if(isset($_GET['msg']))
        {
            $msg = $_GET['msg'];
            echo "<script> alert('".$msg."');</script>";
        }


    ?>

    <div class="validator">
	<input type="submit" name="submit" value="submit">
    </div>
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