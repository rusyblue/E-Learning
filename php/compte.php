<?php
   
?>
<?php
include_once './functions/database.php';
$bbd = bbd();

    if (isset($_POST['account'])) {

      $user = htmlspecialchars($_POST['user']);
      $email = htmlspecialchars($_POST['email']);
      $pwd = ($_POST['pwd']);
      $pwd2 = ($_POST['pwd2']);
      
 
 
 
      if (!empty($_POST['user']) AND  !empty($_POST['email']) AND !empty($_POST['pwd']) AND !empty($_POST['pwd2']))
       {
 
          if(filter_var($email, FILTER_VALIDATE_EMAIL))
          {
              $reqmail = $bbd->prepare("SELECT * FROM useric WHERE email = ?");
 
              $reqmail->execute(array($email));
 
              $mailexist = $reqmail->rowCount();
 
       
          if($mailexist == 0)
 
          {
          if($_POST['pwd'] == $_POST['pwd2']) {
 
 
 
 
          $requete = $bbd->prepare('INSERT INTO useric
          (user,email,pwd,Avatar) VALUES (?,?,?,?)');
          $requete->execute(array($user,$email,$pwd,"default.png"));
          $msg = "Votre compte à été bien crée!!!<br> ";
 
          
          } else {
 
              $msg = "Veuillez entrer des mots de passe identiques!";
          }
          }else
 
          {
 
            $msg= "Adresse mail deja utilisée ";
          }
 
          
      } else {
          $msg = "Votre email n'est pas valide ";
 
      }
 
    }
    else{
 
      $msg ="Veuillez remplir les champs";
  }
 
    } 
 
   
    ?>




    <form action="" method="post" class="form-box" >
                    <h3 class="h4 text-black mb-4"> Créer votre compte IC </h3>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Nom d'utilisateur" name ="user">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Adresse email" name="email">
                    </div>
                    <div class="form-group mb-4">
                      <input type="password" class="form-control" placeholder="Saisissez votre mot de passe" name="pwd">
                    </div>
                    <div class="form-group mb-4">
                      <input type="password" class="form-control" placeholder="Confirmation de votre mot de passe" name="pwd2">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-pill" value="Créer un compte" name="account">
                    </div>
                    <p class="p text-black "> 

         <a href="./index.php?conx=connexion">Se connecter à un compte existant  </a>
           </p>
                        <?php 
        if(isset($msg))
        {
          echo  '<h3 class="h4 text-black mb-4">'. $msg.'</h3>';
        }
        ?>
        
       
                  </form>
     
                  <!-- <a href=\"index.php?conx=connexion\"> Me connecter</a> -->