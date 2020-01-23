<?php


	$firstname = "kaustav".PHP_EOL;
	$secondname = "roy";
	$email = "kaustab@roy.com";
	//$file = "userdetails.doc";
	$handle = fopen("userdetails.doc","w");
	fwrite($handle,$firstname);
	fwrite($handle,$secondname);
	fwrite($handle,$email);
	fclose($handle);
	/*$handle = fopen(, "r");
	$contents = fread($handle, filesize(basename($file)));
	echo $contents;
	fclose($handle);*/







?>