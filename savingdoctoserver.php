<?php

$out = '';
ob_start();
$first = 'kaustab';
$second = 'roy';
$email = 'kaustavroy@gmail.com';
$contact = 9007622568;
echo "<html>";

echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";

//body part start here

echo "<body>";

//print the content

echo "<br><br><br><br>";
echo "<table cellpadding='10' cellspacing='5' border ='1px solid black'>";

echo "<tr>";
echo "<td>FirstName</td>";
echo "<td>".$first."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>SecondName</td>";
echo "<td>".$second."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>EmailId</td>";
echo "<td>".$email."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>contactno</td>";
echo "<td>".$contact."</td>";
echo "</tr>";
echo "</table>";


echo "</body>";

//end html tag

echo "</html>";
$out .= ob_get_contents();
//ob_flush();
//echo ' some more text to add to the buffer';
//$out .= ob_get_contents();
ob_end_flush();
// check that something was actually written to the buffer
if (strlen($out) > 0) {
 $file = './uploadedfiles/userdetails' .time() . '.html';
 touch($file); 
 $fh = fopen($file, 'w');
 fwrite($fh, $out);
 fclose($fh);
}


