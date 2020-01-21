<?php
session_start();
//echo $_SESSION['mail'];
//session_destroy();
 if(!$_SESSION['mail'])
 {
  header('Location:logout.php');
  exit();
 }

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="myscript.js"></script>
	<link rel="stylesheet" type="text/css" href="mystyle.css"/>
    <style type="text/css">
         *{
      margin:0;
      padding: 0;
    }
    .container{
      width:1000px;
      margin: 0 auto;
    }
    .header{
        float:left;
        display: inline-block;
        width: 100%;
        height:25vh;
        background-color: #3e82b3;
        
    }

    .header h1{
          margin-top: 35px;
          margin-left: 330px;
          color:white;
          text-shadow: 2px 2px 4px black;
          display:inline-block;
    }

    .header h3{
        margin-top:10px;
        padding-top: 10px;
        color:white;
        text-shadow: 1px 1px black;
    }

    .header .logout{
      float: right;
      margin-top: 32px;
      color:white;
    }

    .header a{
      padding: 10px;
      text-decoration: none;
      background-color: #0f0f0f;
    }

     .main{
      float: left;
      width: 100%;
      
    }

    .main #form1{
        border:1px solid black;
        margin-top:20px;
        box-shadow: 3px 3px 4px grey;
        padding: 20px;
    }

    #form1 input{
        margin: 10px;
    }

    .footer{
      float:left;
      width:100%;

    }

    .footer .pagination{
      margin-top:50px;
      margin-left:340px;
    }
    .footer a{
      padding:10px;
    }

    .footer a:hover{
      background-color: black;
      color:white;
    }
    </style>
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
		Firstname:<input type="text" name="firstname" id="first" pattern="[a-zA-Z ]{1,}" placeholder="enter Firstname" required onkeyup="OnBlurInput()"/>
	</div>

	<div class="validator">
	Lastname:<input type="text" name="secondname" id="second" placeholder="enter Lastname" pattern="[a-zA-Z ]{1,}" required  onkeyup="OnBlurInput()"/>
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
    	ContactNo:<input type="text" name="telephoneno" id="telno" placeholder="enter valid  contactno" onblur="func()" value="" required>
    </div>


    <div class="validator">
    	emailid:<input type="text" id="emailid" name="emailid" placeholder="enter email id" onblur="emailcheck()" >
    	
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
</html>