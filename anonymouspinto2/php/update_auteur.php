<?php
require_once("database.php");
$bbd= bbd();
	
	if (isset($_POST['btn_update']))
	{
			$noms=addslashes($_POST['noms']);
			
			$auteur=$_SESSION['auteur'];

			$datecreate=date('Y:m:d');
			$heurecreate=date('H:i');
			$Iduser_creat=$_SESSION['ID'];	
			$user_creat=$_SESSION['Pseudo'];

					
					
					$requet=$bdd->prepare("UPDATE auteur SET Noms='$noms' WHERE IdAuteur='$auteur' ");
					$requet->execute();


			echo "<script>alert('Modification effectué avec succès !')</script>";
			echo "<script>window.open('auteur.php','_self')</script>";
					
					
	}
?>

