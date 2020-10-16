<?php
//include("bdd_connect.php");

$nombre =('SELECT COUNT(*) AS total FROM epreuve ');
$psnombre=$bdd->prepare($nombre);
$psnombre->execute();
$row = $resultat=$psnombre->fetch();

echo $row['total'];

?>
