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
			
		   $firstname = $_POST['firstname'];
		   $secondname =$_POST['secondname'];
	
		   $fullname = $firstname." ".$secondname;
		   


		   if (!empty($_FILES) && isset($_FILES['ff'])) {

    
            $target_dir = "./uploadedfiles/";
            $target_file = $target_dir . basename($_FILES["ff"]["name"]);
            $ftmp=$_FILES['ff']['tmp_name'];
            

            if (move_uploaded_file($ftmp,$target_file)) {
                $status = "The file " . basename($_FILES['ff']['name']) . " has been uploaded";

            } else {
                $status = "Sorry, there was a problem uploading your file.";
            }
           

    

   // echo "Status: {$status}<br/>\n";

}
           
       
?>

<img src="<?php echo $target_file ?>">
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
    echo $len." ".$key."<br>";
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
    echo "<tr><td>".$key."</td><td>".$arraytext[$key]."</td></tr>";

 }


 ?>
</table>


	
</table>  
</body>


</html>


