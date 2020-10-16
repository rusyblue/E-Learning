<?php
require_once("./php/database.php");
$bbd= bbd();
//include("../php/verify.php");

if(isset($_POST['btn_ajouter'])) {
 include("php/add_cours.php");
}

?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Auteur | BIBLIOTHEQUE</title>
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/font-awesome.min.css" rel="stylesheet">
 <link href="css/datepicker3.css" rel="stylesheet">
 <link href="css/styles.css" rel="stylesheet">

 <!-- return on top -->

 <link type="text/css" rel="stylesheet" href="../return_on_top/returnOnTop.css" media="all" />
 <script type="text/javascript" src="../return_on_top/jquery.js"></script>
    <script type="text/javascript" src="../return_on_top/returnOnTop.js"></script>

 <!-- -->

 <!-- Favicons -->
    <link href="images/g7.jpg" rel="icon">
    <link href="../images/logo.jpg" rel="apple-touch-icon">
 
 <!--Custom Font-->
 <!--<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">-->
 <!--[if lt IE 9]>
 <script src="js/html5shiv.js"></script>
 <script src="js/respond.min.js"></script>
 <![endif]-->
</head>
<body>
 <?php include("navbar/navbar_title.php"); ?> BIBLIOTHEQUE
 <?php include("navbar/navbar_logout.php"); ?>
 <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
  <?php include("sidebar/profile.php"); ?>

  <div class="divider"></div>
  <ul class="nav menu">
   <li class="active"><a href="home.php"><em class="fa fa-home">&nbsp;</em> Accueil</a></li>
   <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
    <em class="fa fa-bandcamp">&nbsp;</em> AUTEUR <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
    </a>
    <ul class="children collapse" id="sub-item-1">
     <li><a class="" href="auteur.php">
      <span class="fa fa-arrow-right">&nbsp;</span> Ajouter
     </a></li>
     <li><a class="" href="liste_auteur.php">
      <span class="fa fa-arrow-right">&nbsp;</span> Liste
     </a></li>
    </ul>
   </li>
 
   <li class="parent "><a data-toggle="collapse" href="#sub-item-3">
    <em class="fa fa-clone ">&nbsp;</em> EPREUVE <span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><em class="fa fa-plus"></em></span>
    </a>
    <ul class="children collapse" id="sub-item-3">
     <li><a class="" href="epreuve.php">
      <span class="fa fa-arrow-right">&nbsp;</span> Ajouter
     </a></li>
     <li><a class="" href="liste_agent.php">
      <span class="fa fa-arrow-right">&nbsp;</span> Liste
     </a></li>
    </ul>
   </li>
   <li class="parent "><a data-toggle="collapse" href="#sub-item-4">
    <em class="fa fa-toggle-off">&nbsp;</em> STATISTIQUES <span data-toggle="collapse" href="#sub-item-4" class="icon pull-right"><em class="fa fa-plus"></em></span>
    </a>
    <ul class="children collapse" id="sub-item-4">
     <li><a class="" href="promotion.php">
      <span class="fa fa-arrow-right">&nbsp;</span> AAAAAA
     </a></li>
     <li><a class="" href="end_promo.php">
      <span class="fa fa-arrow-right">&nbsp;</span> AAAAAA
     </a></li>
     <li><a class="" href="historique_promo.php">
      <span class="fa fa-arrow-right">&nbsp;</span> AAAAAA
     </a></li>
    </ul>
   </li>

  </ul>
 </div><!--/.sidebar-->

 <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
   <ol class="breadcrumb">
    <li><a href="home.php">
     <em class="fa fa-home"></em>
    </a></li>
    <li class="active">Cours </li>
   </ol>
  </div><!--/.row-->
  <?php include("notification/notification.php"); ?>
   <div class="row">
   <div class="col-lg-12">
    <h5 class="page-header" align="center">
    -
    <?php
     include("php/count_auteur.php");
    ?>
    -
    </h5>
   </div>
  </div><!--/.row-->


  <div class="row">
   <div class="col-lg-12">
    <span class="page-header">
     <?php
      if(isset($erreur1)) {
       echo'<span class="alert bg-teal" role="alert">'.'<font color="white">'.$erreur1.'</font>'.'</span>'.'<br><br><br>';
      } else {
       if(isset($erreur2)) {
        echo'<span class="alert bg-teal" role="alert" style="background-color: #f9243f;">'.'<font color="white">'.$erreur2.'</font>'.'</span>'.'<br><br><br>';
       }
      }
     ?>
    </span>
   </div>
  </div>

   <div class="col-lg-12" >
    <form method="POST" enctype="multipart/form-data">
    <div class="col-lg-12">
     <div class="panel panel-default shad">
      <div class="panel-heading">
      
      </div>
       <div class="panel-body">
        <div class="col-md-3">       
         <div class="form-group">
          <input class="form-control" type="text" name="name_d" onkeyup='this.value=this.value.toUpperCase()' autocomplete="off" placeholder="Le nom du cours" required="on">
         </div>

         <div class="form-group">
          <input class="form-control" type="text" name="price" onkeyup='this.value=this.value.toUpperCase()' autocomplete="off" placeholder="Le prix du cours" required="on">
         </div>

         <div class="form-group">
          <input class="form-control" type="text" name="description_d" autocomplete="off" placeholder="description_d" required="on">
         </div>

          
     <!--      <input class="form-control" type="text" name="categorie" autocomplete="off" placeholder="categorie" required="on"> -->
         

<div class="form-group">
           <select type="text"  name="categorie">
  </div>
<?php $re = $bbd->prepare('SELECT idcat,name_cat FROM categories');
$re->execute();
while ($choix = $re->fetch()) {
 ?>
<option value="<?php echo $choix['name_cat'];?>"><?php echo $choix['name_cat'];?></option>
    <?php
  }
   ?>
  



</select>
</div>

         <div class="form-group">
          <input type="file" class="form-control"  name="avatar" onkeyup='this.value=this.value.toUpperCase()' autocomplete="off"  required="on">
         </div>


         
         <div class="form-group"> 
         <br> 
          <button type="submit" class="btn btn-primary" name="btn_ajouter">AJOUTER</button>
          <button type="reset" class="btn btn-default">ANNULER</button>
         </div>
         
        </div>
        <div class="col-md-9">
         <div class="panel-body list_scroll">
          <div class="form-group">
           <?php

            $envoi=$bbd->prepare("SELECT * from course ORDER BY name_d");
            $envoi->execute();

            ?>

           <table width="100%" height="30%" border="1" align="center" cellpadding="0"
            cellspacing="0" bgcolor="#FFFFFF"  class="table table-bordered table-striped table-condensed" style="margin-top:0px" >
               <tr class="danger" style="color:#6600FF" >
                         <th width="80%"><div align="center" class="Style31">Noms des cours </div></th>

                         <th width="80%"><div align="center" class="Style31">Prix des cours </div></th>

                         <th width="80%"><div align="center" class="Style31">Description des cours </div></th>

                           <th width="80%"><div align="center" class="Style31">Apercu image </div></th>
                           <th width="80%"><div align="center" class="Style31">Categorie </div></th>

                         <th width="80%"><div align="center" class="Style31">ACTION </div></th>
               </tr>
                       <?php while($davenvoi=$envoi->fetch()){ ?>
               <tr>
                 
               <!-- **************************************************** -->
                         <td><div align="center" class="Style9">
                          <?php
                
                 echo '<font color="black">'.($davenvoi['name_d']).'</font>' ; 
                
               ?></div></td>

                <td><div align="center" class="Style9">
                          <?php
                
                 echo '<font color="black">'.($davenvoi['price']).'</font>' ; 
                
               ?></div></td>
                <td><div align="center" class="Style9">
                          <?php
                
                 echo '<font color="black">'.($davenvoi['description_d']).'</font>' ; 
                
               ?></div></td>

                <td><div align="center" class="">
                          <?php
                
        
    echo '<img src="../courses/'.($davenvoi['avatar']). '?> class="img-fluid">';

                
               ?></div></td>

               <td><div align="center" class="Style9">
                          <?php
                
                 echo '<font color="black">'.($davenvoi['categorie']).'</font>' ; 
                
               ?></div></td>
               <style >
                img {
                 width: 100%;
                 height: 100%;
                 border-radius: 50%;
                }
               </style>
               <!-- **************************************************** -->
                         <td>
                            <div align="center" class=" action-buttons" >
                                <a href="update_cours.php?id=<?= $gedcompte['id'] ?>" class="pencil" onclick="return confirm('Voulez-vous vraiment modifier la <?= $gedcompte['LibelleCategorie'] ?> ?');" style="text-decoration: none;" title="Update" >
                                    <?php echo '<em class="fa fa-pencil"></em>'; ?>
                                </a>&nbsp;&nbsp;
                                
                                 
                            </div>
                        </td>
 
               </tr>
                       <?PHP } ?>
           </table>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div><!-- </div> -->
    </div><!-- /.panel -->

    
   </form>
   </div><!-- /.col-->
    

   <div class="col-sm-12">
    <p class="back-link">&copy;
     <script>
      document.write(new Date().getFullYear())
           </script> <a href="" target="_blank">BIBLIOTHEQUE PROD</a>
    </p>
   </div>
  </div><!-- /.row -->
 </div> <!--/.main-->
   

 <script src="js/jquery-1.11.1.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/chart.min.js"></script>
 <script src="js/chart-data.js"></script>
 <script src="js/easypiechart.js"></script>
 <script src="js/easypiechart-data.js"></script>
 <script src="js/bootstrap-datepicker.js"></script>
 <script src="js/custom.js"></script>

 <script>
  function validate(evt) {
   if(evt.keyCode!=8)
   {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode(key);
    var regex = /[0-9]|\./;
    if (!regex.test(key))
    {
     theEvent.returnValue = false;

     if (theEvent.preventDefault)
      theEvent.preventDefault();
     }
    }
   }
 </script>
 
</body>
</html>
