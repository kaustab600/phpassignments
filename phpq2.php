<?php

 if ($_FILES["ff"]["name"]) {

         
            $target_dir = "/uploadedfiles/";
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
	echo "inside else";
	header('Location:question2.php?msg=No File uploaded');
	exit();
}

?>

<img src="<?php echo $target_file ?>" >