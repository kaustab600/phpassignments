<?php
// Create a simple array.
$array = array('eng|80', 'hindi|70', 'physics|85');
//print_r($array);
$arrayvalue = array();
// Now delete every item, but leave the array itself intact:
foreach ($array as $i => $value) {
    //unset($array[$i]);
    //print_r($array[$value]);
    //print_r($i);
    //print_r($array[$i]);
	$var = explode('|', $array[$i]);
	$temp = $var[0];
	$temp2 =  $var[1];
	//echo $temp;
	$arrayvalue[$temp] = intval($temp2);  
    //echo $array[$value];
	//echo $arrayvalue[$temp]." ";
   // echo "<br>";
}

var_dump($arrayvalue);
/*print_r($array);

// Append an item (note that the new key is 5, instead of 0).
$array[] = 6;
print_r($array);

// Re-index:
$array = array_values($array);
$array[] = 7;
print_r($array);*/
?>