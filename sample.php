<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		img{
			width:200px;
		}
	</style>


</head>
<body>
<?php
			 session_start();

		   $firstname = $_POST['firstname'];
		   $secondname =$_POST['secondname'];
       $emailid = $_POST['emailid'];
       $contactno = $_POST['telephoneno'];

       $_SESSION['first'] = $firstname;
        $_SESSION['second'] = $secondname;
         $_SESSION['email'] = $emailid;
          $_SESSION['contact'] = $contactno;

	
		   $fullname = $firstname." ".$secondname;
		   
       

		   if (!empty($_FILES) && isset($_FILES['ff'])) {

         
            $target_dir = "./uploadedfiles/";
            $target_file = $target_dir . basename($_FILES["ff"]["name"]);
            $_SESSION['target'] = $_FILES["ff"]["name"];
            $ftmp=$_FILES['ff']['tmp_name'];
            //echo $_SESSION['imgfile'];
            $_SESSION['img'] = $ftmp;
            //echo $_SESSION['img'] ;
            

            if (move_uploaded_file($ftmp,$target_file)) {
                $status = "The file " . basename($_FILES['ff']['name']) . " has been uploaded";

            } else {
                $status = "Sorry, there was a problem uploading your file.";
            }
           

    

   // echo "Status: {$status}<br/>\n";

}

       
       
?>

<img src="<?php echo $target_file ?>" >
<br>

<?php  echo "Hello ".$fullname;


  $text_line1 = $_POST['subjectmarks'];


  $text_line = explode(PHP_EOL,$text_line1);

  function trimvalues(&$key)
  {
      $key = trim($key," \r \t \n \0");

  }

  array_walk($text_line, 'trimvalues');

  /*function removenewline($item)
  {
    echo "inside func<br>";
    $len = strlen($item);
    $key = array_keys($item);
    echo $len." ".$key."<br>";
    if($len == 0)
    { 
      
      echo $key."<br>";
      unset($text_line[$key]);
      echo "unseted";
    }
  }

  array_walk($text_line,'removenewline');*/

//-------------used for removing any key if  empty values are found 
  foreach($text_line as $key => $value)
  {
    $len = strlen($value);
    //echo $len." ".$key."<br>";
    if($len == 0)
    { 
      
      //echo $key."<br>";
      unset($text_line[$key]);
      //echo "unseted";
    }

  }

  
  //echo"<br>";
  //var_dump($text_line);
  


  $arraytext = array();

  //print_r($text_line);
  foreach($text_line as $i => $value)
  {
    //print_r($text_line[$i]);
    $var = explode('|',$text_line[$i]);
    $temp = $var[0];
    $temp2 = $var[1];
    $arraytext[$temp] = intval($temp2);
    //echo "<br>";
  }

 // print_r($arraytext);

  //$len = count($arraytext);
  //echo $len;
       
?>

<table cellpadding="10" cellspacing="5" border="1px solid black">
  <tr>
    <th>subject</th>
    <th>marks</th>
  </tr>
 <?php
 foreach($arraytext as $key => $value)
 {
    echo "<tr><td>".$key."</td><td>".$value."</td></tr>";

 }


 ?>
</table>

ContactNo:<?php echo $contactno;    ?><br><br>

Email id:<?php  echo $emailid;   ?> <br><br>

<?php

if(isset($_POST['submit']))
{

// set API Access Key
$access_key = '9c117789243c894c0d837e1e0cfc4c7f';

// set email address
$email_address = $emailid;

// Initialize CURL:
$ch = curl_init('http://apilayer.net/api/check?access_key='.$access_key.'&email='.$email_address.'');  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$validationResult = json_decode($json, true);

// Access and use your preferred validation result objects
// $validationResult['format_valid'];
 //$validationResult['smtp_check'];
  //$validationResult['mx_found'];
//echo $validationResult['score'];



      if( isset($validationResult['score'])>= 0.7 )
      {
          echo "<script type='text/javascript'>alert('valid email');</script>";
          //echo $validationResult['smtp_check'];
      }

}              


?>


<a href="phptodoc2.php">Download</a>

</body>
</html>


