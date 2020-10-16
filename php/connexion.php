<?php
session_start();
include_once './functions/database.php';
$bbd = bbd();

if(isset($_POST['connexion'])){

  $email= htmlspecialchars($_POST['email']);
  $pwd= $_POST['pwd'];
  if(!empty($email) AND !empty($pwd))
  {
    //requete préparée
     $requser=$bbd->prepare("SELECT * FROM useric WHERE email= ? AND pwd= ?");
     $requser->execute(array($email,  $pwd)); // declaration de la variable requser
     $userexist= $requser->rowCount();
     if($userexist == 1)
     {
        $_SESSION =$requser->fetch();
        $_SESSION['iduser'] = $_SESSION['iduser'];
        $_SESSION['email']=$_SESSION['email'];
        $_SESSION['pwd']=$_SESSION['pwd'];
         header('Location:user.php');
        $msg ="connecté";

     }
     else{
       $msg="Mauvais mail ou mot de passe !";
     }

  }
  else
  {
    $msg = "Tous les champs doivent etre complétés !";
  }
}

// } catch(PDOException $e){
//     echo "Erreur de connection:  ".$e->getMessage();//si erreur trouvé renvoyer le msg suivant
//   }

?>
    <form action="" method="post" class="form-box">
                    <h3 class="h4 text-black mb-4">Connexion à un compte IC </h3>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder=" Adresse email" name="email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Saisissez votre mot de passe" 
                      name="pwd">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-pill" value="Connexion" name="connexion">
                    </div>
                    <p class="p text-black "> 
      <a href="./index.php?conx=register">Créer  un compte </a>
        </p>
        <?php 
        if(isset($msg))
        {
          echo  '<h3 class="h4 text-black mb-4 text-align=center">'. $msg.'</h3>';
        }
        ?>
        
                </form>


