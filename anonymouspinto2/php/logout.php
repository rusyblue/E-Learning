<?php
require_once("database.php");
$bbd= bbd();
$user_id=$_SESSION['iduser'];

$sql=$bbd->prepare("UPDATE useric SET statut='0' WHERE iduser='$user_id' ");
$sql->execute();

  $_SESSION['iduser'] = '';
  $_SESSION['user'] = '';
session_destroy();
echo "<script>window.open('../index.php','_self')</script>";

?>

<!-- anonymouspinto2/index.php -->