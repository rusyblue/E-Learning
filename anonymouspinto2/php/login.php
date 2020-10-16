<?php
require_once("database.php");
$bbd = bbd();
if(isset($_POST['btn_connexion'])) {
   if(!empty($_POST['user']) AND !empty($_POST['pwd'])) {

	  $user=addslashes($_POST['user']);
	  $pwd=addslashes($_POST['pwd']);
      $date_connect=date('y:m:d');
      $time_connect=date('H:i');

	  $requser = $bbd->prepare("SELECT * FROM useric WHERE user = '$user' AND pwd = '$pwd' ");
	  $requser -> execute();
      $data = $requser->fetch();

      if($data['iduser']!=''){
          if($data['niveau']!='0'){
            $_SESSION['iduser'] = $data['iduser'];
            $user_id = $_SESSION['iduser'];
            $_SESSION['user'] = $data['user'];
            $user= $_SESSION['user'];
            $sql=$bbd->prepare("UPDATE useric SET statut='1' WHERE iduser='$user_id' ");
            $sql->execute();
            header("Location:home.php");

            }else{
            $erreur1 = "Votre compte est bloqué !";
        }
        
      }else{
        $erreur1 = "Mot de passe ou Login erroné !";
    }
   }else {
      $erreur1 = "Tous les champs doivent être complétés !";
   }
}
?>

