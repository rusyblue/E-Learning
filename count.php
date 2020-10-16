<?php include_once './functions/database.php';
  $bbd = bbd();
?>



   <?php 
               $count=$bbd->prepare("SELECT COUNT(*) AS NBR FROM course ");
               $count->execute();
               $rese=$count->fetch();

               echo $rese['NBR'] ;

               ?> 

