<?php

$first = $_POST['firstname'];
$second = $_POST['secondname'];
$fullname = $first." ".$second;
$fname = $_FILES["ff"]["tmp_name"];

 if (!empty($fname)){

         
            $target_dir = "./uploadedfiles/";
            $target_file = $target_dir . basename($_FILES["ff"]["name"]);
            $_SESSION['target'] = $target_file;
            $ftmp=$_FILES['ff']['tmp_name'];
            //echo $_SESSION['imgfile'];
            $_SESSION['img'] = $ftmp;
            //echo $_SESSION['img'] ;
            

            if (move_uploaded_file($ftmp,$target_file)) {
                $status = "The file " . basename($_FILES['ff']['name']) . " has been uploaded";

            } else {
                $status = "Sorry, there was a problem uploading your file.";
            }
}
else
{   
  
  header('Location:question3.php?msg=No File uploaded');
  exit();
}

$pattern = '/^[a-zA-Z]+\|[0-9]+$/';

$text_line1 = $_POST['subjectmarks'];


  $text_line = explode(PHP_EOL,$text_line1);

  function trimvalues(&$key)
  {
      $key = trim($key," \r \t \n \0");

  }

  array_walk($text_line, 'trimvalues');




//-------------used for removing any key if  empty values are found 
  foreach($text_line as $key => $value)
  {
    $len = strlen($value);
    
    if($len == 0)
    { 
      
      //unsetting the entries with string length 0
      unset($text_line[$key]);
     
    }

  }


  foreach($text_line as $key1 => $value1)
  {

  if(!preg_match("/^[a-zA-Z]+\|[0-9]+$/",$value1 ))
    {
  		header('Location:question3.php?msg=enter valid value');
   		exit();
    }
  }

  //echo $key1." ".$value1."<br>";



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

  
?>
<img src="<?php echo $target_file ?>" width="200px" height="200px" ><br><br>
<?php echo "Hello ".$fullname;  ?>
<!--printing the values in table format-->

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