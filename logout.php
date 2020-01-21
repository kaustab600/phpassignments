<?php
 session_start();
 //echo $_SESSION['mail'];
 //echo $_SESSION['pass'];

session_destroy();
unset($_SESSION['mail']) ;
unset($_SESSION['pass']) ;
header('Location:loginform.php');


?>