<?php
require_once("database.php");
$bbd= bbd();
include("php/securite.php");

if(isset($_POST['btn_ajouter'])) {
	include("php/add_epreuve.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Epreuve | BIBLIOTHEQUE</title>
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
			<li class="parent "><a data-toggle="collapse" href="#sub-item-5">
				<em class="fa fa-toggle-off">&nbsp;</em> MATIERE <span data-toggle="collapse" href="#sub-item-5" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-5">
					<li><a class="" href="matiere.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Ajouter
					</a></li>
					<li><a class="" href="liste_matiere.php">
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
				<li class="active">PRODUIT </li>
			</ol>
		</div><!--/.row-->
		<?php include("notification/notification.php"); ?>
			<div class="row">
			<div class="col-lg-12">
				<h5 class="page-header" align="center">
				- 
				<?php
					include("php/count_epreuve.php");
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
										<select class="form-control" name="auteur">
											<option value=''>-- CHOISIR L'AUTEUR --</option>
											<?php
												include("php/bdd_connect.php");
												$sql = $bdd->prepare("SELECT * FROM auteur ORDER BY Noms ");
												// $req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
												$sql -> execute();

												while ($data = $sql->fetch()) { ?>
													<option value="<?php echo $data['IdAuteur'] ?> "><?php echo $data['Noms'] ?> </option>
											<?php
												}
											?>
										</select>
									</div>
									<div class="form-group">
										<select class="form-control" name="matiere">
											<option value=''>-- CHOISIR LA MATIERE --</option>
											<?php
												include("php/bdd_connect.php");
												$sql = $bdd->prepare("SELECT * FROM matiere ");
												// $req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
												$sql -> execute();

												while ($data = $sql->fetch()) { ?>
													<option value="<?php echo $data['IdMatiere'] ?> "><?php echo $data['LibelleMatiere'] ?> </option>
											<?php
												}
											?>
										</select>
									</div>
									<div class="form-group">
										<input class="form-control" type="text" name="titre" onkeyup='this.value=this.value.toUpperCase()' placeholder="Titre"  required="on">
									</div>
									
								<div class="form-group">
									<input class="form-control" name="jointe1" type="file" > 
								</div>
									<div class="form-group">	
									<br>	
										<button type="submit" class="btn btn-primary" name="btn_ajouter">AJOUTER</button>
										<button type="reset" class="btn btn-default">ANNULER</button>
									</div>
									
								</div>
								<div class="col-md-9">
									<div class="panel-body">
										<div class="form-group">
											<?php
												$serievente=$bdd->prepare("SELECT * from epreuve,matiere,auteur WHERE epreuve.IdAuteur=auteur.IdAuteur AND epreuve.IdMatiere=matiere.IdMatiere ORDER BY IdEpreuve DESC  LIMIT 0,5");
												$serievente->execute();

												?>

											<table id="example1" class="table table-bordered table-hover table-striped">
											    <tr class="danger" style="color:#6600FF" >
												<th width="4%"><div align="center" class="Style31">VU </div></th>
												<th width="36%"><div align="center" class="Style31">TITRE </div></th>
											              <th width="30%"><div align="center" class="Style31">MATIERE </div></th>
											              <th width="25%"><div align="center" class="Style31">AUTEUR </div></th>
											              <th width="5%"><div align="center" class="Style31">ACTION </div></th>
											    </tr>
											            <?php while($gedserieS=$serievente->fetch()){ ?>
											    <tr>
												<td><div align="center" class="Style9"><?php echo ($gedserieS['vu']) ?></div></td>
												<td><div align="center" class="Style9"><?php echo ($gedserieS['Titre']) ?></div></td>
												<td><div align="center" class="Style9"><?php echo ($gedserieS['LibelleMatiere']) ?></div></td>
												<td><div align="center" class="Style9"><?php echo ($gedserieS['Noms']) ?></div></td>
															<!-- **************************************************** -->
											              <td>
                            <div align="center" class=" action-buttons" >
                                <a href="delete_epreuve.php?id=<?= $gedserieS['IdEpreuve'] ?>" class="pencil" onclick="return confirm('Voulez-vous vraiment modifier le bon <?= $gedserieS['libelle_bon'] ?> [ <?= $gedserieS['montant_bon'] ?> ] ?');" style="text-decoration: none;" title="Modifier" >
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
                       </script> <a href="" target="_blank">BIBLIOTHEQUE PROD</a>				</p>
			</div>
		</div><!-- /.row -->
	</div>	<!--/.main-->
	  
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables/dataTables.bootstrap4.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>

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

	<script>
         $(document).ready(function () {
		 $("#example2").DataTable();
           $('#example1').DataTable({
                "language": {
                    "sProcessing": "Traitement en cours...",
                    "sSearch": "Rechercher&nbsp;:",
                    "sLengthMenu": "Afficher _MENU_ &eacute;l&eacute;ments",
                    "sInfo": "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                    "sInfoEmpty": "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                    "sInfoFiltered": "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                    "sInfoPostFix": "",
                    "sLoadingRecords": "Chargement en cours...",
                    "sZeroRecords": "Aucun &eacute;l&eacute;ment &agrave; afficher",
                    "sEmptyTable": "Aucune donn&eacute;e disponible dans le tableau",
                    "oPaginate": {
                        "sFirst": "Premier",
                        "sPrevious": "Pr&eacute;c&eacute;dent",
                        "sNext": "Suivant",
                        "sLast": "Dernier"
                    },
                    "oAria": {
                        "sSortAscending": ": activer pour trier la colonne par ordre croissant",
                        "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
                    }
                },
                "order": [[0, "desc"]],
                "columnDefs": [
                    {
                        "targets": [0],
                        "visible": true,
                        "searchable": true
                    },
                    {
                        "targets": [2],
                        "visible": true,
                        "searchable": true
                    },
                    {
                        "targets": [1],
                        "visible": true
                    }
                ],
                "pagingType": "full_numbers",
                "bProcessing": true,
            });
        });
    </script>	
	
</body>
</html>
