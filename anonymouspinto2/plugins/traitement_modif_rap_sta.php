<?php
require_once("connexion.php");
require_once("securite.php");

if(isset($_GET['modifier'])){
	 $id_rapport=$_SESSION['id_rapport'];
	 $objet=$_POST['objet'];
	  $Id_user=$_POST['Id_user'];
	   $Contenu=$_POST['Contenu'];
	 $requette="UPDATE `rapport` SET `Contenu`='$Contenu',`Id_destinaire`='$Id_user',`objet`='$objet' WHERE id_rapport='$id_rapport' ";
	 $ps=$bdd->prepare($requette);
	 $ps->execute();
	 header("location:modifier_rap.php");
	 }
	 ?>