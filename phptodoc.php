<?php

       $firstname = $_POST['firstname'];
	   $secondname =$_POST['secondname'];
       $emailid = $_POST['emailid'];
       $contactno = $_POST['telephoneno'];

//header part

header("Content-type: application/vinod.ms-word");

header("Content-Disposition: attachment;Filename=Userdetail.doc");

//starting html tag

echo "<html>";

echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";

//body part start here

echo "<body>";

//print the content


echo "<table cellpadding='10' cellspacing='5' border ='1px solid black'>";
echo "<tr>";
echo "<td>FirstName</td>";
echo "<td>".$firstname."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>SecondName</td>";
echo "<td>".$secondname."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>EmailId</td>";
echo "<td>".$emailid."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>contactno</td>";
echo "<td>".$contactno."</td>";
echo "</tr>";
echo "</table>";


echo "</body>";

//end html tag

echo "</html>";



?>