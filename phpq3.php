<?php
 $flag = 0;
if(isset($_POST['submit']))
{

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
      
      //------unsetting the entries with string length 0
      unset($text_line[$key]);
     
    }

  }


  foreach($text_line as $key1 => $value1)
  {

  if(!preg_match("/^[a-zA-Z]+\|[0-9]+$/",$value1 ))
    {
      $flag = 1;
  		echo "<script>alert('please provide inputs informat: SUBJECT|MARKS');</script>";

    }
  }

  //echo $key1." ".$value1."<br>";

if($flag != 1)
{
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

 $_SESSION['textarray'] = $arraytext;
//-----printing the values in table format

echo "<table cellpadding='10' cellspacing='5' border='1px solid black'>";
 echo "<tr>
    <th>subject</th>
    <th>marks</th>
  </tr>";
 
 foreach($arraytext as $key => $value)
 {
    echo "<tr><td>".$key."</td><td>".$value."</td></tr>";

 }
echo "</table>";
}


}

 ?>
