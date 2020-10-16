<?php
//include("bdd_connect.php");

$nombre =('SELECT COUNT(*) AS total FROM course');
$psnombre=$bbd->prepare($nombre);
$psnombre->execute();
$row = $resultat=$psnombre->fetch();

echo $row['total'];

?>
