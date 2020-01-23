<?php
session_start();
//echo $_SESSION['mail'];
//session_destroy();
 if(!isset($_SESSION['mail']))
 {
 	header('Location:logout.php');
 	exit();
 }

 if(isset($_GET['q']))
			{
				 $q = $_GET['q'];
                //echo "question".$q.".php";
                if($q == '7')
                {
                    header('Location:logout.php');
                }
                else
                {
                   header("Location:question".$q.".php");
                   exit();
                }
				
			}
            
    if(isset($_GET['msg']))
        {
            $msg = $_GET['msg'];
            echo "<script> alert('".$msg."');</script>";
        }


?>