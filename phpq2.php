<?php
if(isset($_POST['submit']))
{
   
$first = $_POST['firstname'];
$second = $_POST['secondname'];
$fullname = $first." ".$second;
$_SESSION['first'] = $first;
$_SESSION['second'] = $second;


 if ($_FILES["ff"]["name"]) {

            
            $target_dir = "./uploadedfiles/";
            $target_file = $target_dir . basename($_FILES["ff"]["name"]);
            //echo $target_file."<br>";
            $_SESSION['target'] = $target_file;
            $ftmp=$_FILES['ff']['tmp_name'];
           // echo "temp location".$ftmp;
            //echo $_SESSION['imgfile'];
            $_SESSION['img'] = $ftmp;
            //echo $_SESSION['img'] ;
            

            if (move_uploaded_file($ftmp,$target_file)) {
                $status = "The file " . basename($_FILES['ff']['name']) . " has been uploaded";
                
                echo "<img src='".$target_file."' width='200px' height='200px' ><br><br>";
                echo "Hello ".$fullname; 

            } else {
                $status = "Sorry, there was a problem uploading your file.";
            }

            //echo $status;
}
else
{   
	//echo "inside else";
	echo "no files uploaded";
	//exit();
}

}

?>

