<?php
session_start();
if(session_destroy()==true){
  header('Location:index.php');
}

 ?>
