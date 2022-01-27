<?php 

  if(!isset($_SESSION['user'])){
     header("Location: ".Url('/FE/login.php'));
  }

?>