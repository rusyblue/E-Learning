<?php
	if (isset($_POST['btn_ajouter']))
	{
			$name_d=addslashes($_POST['name_d']);
			$price=addslashes($_POST['price']);
			 $description_d =addslashes($_POST['description_d']);
			 $categorie =addslashes($_POST['categorie']);
					
					$doubl=$bbd->prepare("SELECT * FROM course WHERE name_d='$name_d' ");
						$doubl->execute();
						$resuldoubl=$doubl->fetch();
						if($resuldoubl['idcourse']=='')
						{
	$requet=$bbd->prepare("INSERT INTO course (idcourse, name_d,price,description_d,categorie) VALUES (NULL,'$name_d','$price', '$description_d','$categorie')");
	
							$requet->execute();

							$erreur1= "sujet ajouté avec succès";
					}else
					{
					$erreur2= "Cet auteur existe déjà ";
					}
					 if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
        $tailleMax = 2097152;
        $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
        if($_FILES['avatar']['size'] <= $tailleMax) {
           $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
           if(in_array($extensionUpload, $extensionsValides)) {
              $chemin = "../courses/".$_SESSION['iduser'].".".$extensionUpload;
              $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
              if($resultat) {
                 $updateavatar = $bbd->prepare('UPDATE useric SET avatar = :avatar WHERE iduser = :iduser');
                 $updateavatar->execute(array(
                    'avatar' => $_SESSION['iduser'].".".$extensionUpload,
                    'id' => $_SESSION['iduser']
                    ));
                 header('Location:index.php');
              } else {
                 $erreur= "Erreur durant l'importation de votre photo de profil";
              }
           } else {
              $erreur = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
           }
        } else {
           $erreur= "Votre photo de profil ne doit pas dépasser 2Mo";
        }
     }
	}
?>

