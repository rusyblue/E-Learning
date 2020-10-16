<?php
require_once("database.php");
$bbd= bbd();
if(!isset($_SESSION['iduser'])){
  echo "<script>alert('Veuillez-vous connecter !')</script>";
  echo "<script>window.open('php/logout.php','_self')</script>";
}

?>

