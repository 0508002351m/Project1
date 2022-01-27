<?php 
 
 session_start();

 require '../helpers/functions.php';

 require '../helpers/checkLogin.php';
 
 session_destroy();

 header("location: ".Url('/FE/login.php'));


?>

