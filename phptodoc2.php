<?php
	   session_start();
	   if($_SESSION['first'])
		{
       $first =  $_SESSION['first'];
       $second =  $_SESSION['second'];
       $email =  $_SESSION['email'];
       $contact =  $_SESSION['contact'];
       $imgname	=	$_SESSION['target'];

       $file = "details.doc";
       $handle = fopen($file,"w");
       fwrite($handle, $first." ".$second);
       fwrite($handle, PHP_EOL);
       fwrite($handle, $email);
       fwrite($handle, PHP_EOL);
       fwrite($handle, $contact);
       fclose($handle);

header("Content-type: application/vinod.ms-word");

header("Content-Disposition: attachment;Filename=Userdetails.doc");

//starting html tag



echo "<html>";

echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";

//body part start here

echo "<body>";

//print the content

echo "<br><br><br><br>";
echo "<table cellpadding='10' cellspacing='5' border ='1px solid black'>";
echo "<tr>";
echo "<td><img src='/var/www/html/uploadedfiles/".$imgname."'width='100px' height='100px'></td>";
//readfile('var/www/html/uploadedfiles/head_logo.jpg');
echo "</tr>";
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
}
else{

	echo "session fault";
	session_destroy();

}


?>