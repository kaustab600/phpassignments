<?php
 
 session_start();
  if(isset($_POST['email']))
  {
    $useremail = "kaustab.roy@innoraft.com";
    $pass = "12345";
    
    if($_POST['email'] and $_POST['passwordid'])
    {
      $email = $_POST['email'];
      $password = $_POST['passwordid'];
      if($email!=$useremail or $password!=$pass)
      {
        header('Location:loginform.php?msg=authorization decline');
      }
      else{
            //session_start();
            $_SESSION['mail'] = $email;
            $_SESSION['pass'] = $password;
          }
    }
    else
    {
      //echo "inside else";
      header('Location:loginform.php?msg=enter login details');
    }

  }
  
else{

  if(!isset($_SESSION['mail']))
  {
  header('Location:loginform.php');
  exit();
   }
}

  ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
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
        height:20vh;
        background-color: #3e82b3;
        text-align: center;
    }

    .header h1{
          margin-top: 35px;
          color:white;
          text-shadow: 2px 2px 4px black;
          display:inline-block;
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
      height:5vh;
    }

    .main h3{
      margin-top:30px;
      margin-left:300px;
      color:#328535;
      
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
        <h1>PHP ASSIGNMENTS</h1>
        <a class="logout" href="logout.php">LOGOUT</a>
    </div>
  </div>
 


  <div class="main">
    <div class="container">
      <h3>Please Go through the below Questions:</h3>
    </div> 
  </div>

  <div class="footer">
    <div class="container">
	<div class="pagination">
  
  <a href="question1.php">Q1</a>
  <a href="question2.php">Q2</a>
  <a href="question3.php">Q3</a>
  <a href="question4.php">Q4</a>
  <a href="question5.php">Q5</a>
  <a href="question6.php">Q6</a>
  
  </div>
  </div>
  </div>
</body>
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
</html>