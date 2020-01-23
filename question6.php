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
	<link rel="stylesheet" type="text/css" href="mystylephp6.css"/>
</head>
<body>
    <div class="header">
    <div class="container">
        <h1>PHP ASSIGNMENTS 6</h1>
        <a class="logout" href="logout.php">LOGOUT</a>
    <h3>Q6) When the user submits the above form, 2 copies of the data will get created in a doc format. <br>One will store on the server and the other will be downloaded to the user submitting the data.<br>The information in the doc should be presented in a well-defined manner</h3>
     </div>
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
    ?>
    <div class="main">
        <div class="container">
	<form  name="form1" id="form1" method="post" action="sample.php" enctype="multipart/form-data">
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
     <input type="file" name="ff">

    </div>


    <div class="validator">
    <textarea  name="subjectmarks" rows="6" cols="20" class="textpart" placeholder="enter subject|marks"></textarea>
    </div>

    <div class="validator">
    	ContactNo:<input type="text" name="telephoneno" id="telno" placeholder="enter valid  contactno" required>
    </div>


    <div class="validator">
    	emailid:<input type="text" id="emailid" name="emailid" placeholder="enter email id" >
    	
    </div>

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
     <a  href="question1.php">1</a>
     <a href="question2.php">2</a>
     <a href="question3.php">3</a>
     <a href="question4.php">4</a>
     <a href="question5.php">5</a>
     <a class="active" href="question6.php">6</a>
     <a href="#">&raquo;</a>
    </div>

</div>
</div>

</body>
	<script src="myscript.js"></script>
</html>