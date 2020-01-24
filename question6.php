<?php
require('sessioncheck.php');
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

    <div class="main">
        <div class="container">
	<form  name="form1" id="form1" >
	       
        <img src="<?php echo $_SESSION['target']; ?>" width="100px" height="100px"><br>

		    Firstname:<input type="text" value="<?php
              if(isset($_SESSION['first'])){echo $_SESSION['first'];}
              ?>" disabled="true" /><br>
	    
        Lastname:<input type="text" value="<?php
              if(isset($_SESSION['second'])){echo $_SESSION['second'];}
              ?>" disabled="true"  /><br>
    
    	  ContactNo:<input type="text" value="<?php
              if(isset($_SESSION['contactno'])){echo $_SESSION['contactno'];}
              ?>" disabled="true" /><br>

        emailid:<input type="text" value="<?php
              if(isset($_SESSION['emailid'])){echo $_SESSION['emailid'];}
              ?>" disabled="true" /><br>

       <table cellpadding="10" cellspacing="5" border="1px solid black">
            <tr>
                <th>Subject</th>
                <th>Marks</th>
           </tr>
           <?php    if(isset($_SESSION['textarray']))
                    {
                        $array = $_SESSION['textarray']; 
                        foreach($array as $key => $value)
                        {
                            echo "<tr><td>".$key."</td><td>".$value."</td></tr>";
                        }

                    }
           ?>
            
        </table>

    <div id="anchortag">
    <h3>Download the userdetails</h3>
    <a href="phptodoc.php">Download</a>
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
