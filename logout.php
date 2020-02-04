<?php
 session_start();
 //echo $_SESSION['mail'];
 //echo $_SESSION['pass'];

session_destroy();
unset($_SESSION['mail']) ;
unset($_SESSION['pass']) ;
unset($_SESSION['uid']);
header('Location:loginform.php');


?>