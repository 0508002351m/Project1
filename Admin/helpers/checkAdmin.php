<?php 

  if($_SESSION['user']['Role_id'] != 2 ){
     header("Location: ".Url('/FE/error.php'));
  }
?>