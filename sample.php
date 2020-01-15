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

<?php  echo "Hello ".$fullname;?>

<?php
  $text_line = $_POST['subjectmarks'];
   /*$text_line = explode("\n",$text_line);

   //echo $text_line[1];
   $var1 = $text_line[0];
   $second_line = explode('|',$var1);
   echo $second_line[1];
   //$second_line = explode('|',$text_line[1])
  // echo $second_line[0];
  */

    $text_line = explode("\n", $text_line);
            $textAreaArray = array();
            foreach ($text_line as $data){
               $format_data = explode('|',$data);
               $textAreaArray[trim($format_data[0])] = trim($format_data[1]);
           }

        

        foreach ($textAreaArray as $key => $value){
                  echo "<tr>";
                  echo "<td>" . $key . "</td>";
                  echo "<td>" . $value . "</td>";
          }
?>

<!--<table cellpadding="10" cellspacing="5">
		<tr>
		<th>subject</th>
		<th>marks</th>
	    </tr>
	    <?php
	    //	$i=0;
	    //	while ($i < count($text_line)) {
	    		
	    	}

				
	    ?>-->

	
</table>  
</body>


</html>


