<?php
include("php/database.php");
$bbd =bbd();
include("php/securite.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administration Informatic Center</title>
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
    <link href="images/2.jpg" rel="icon">
    <link href="../images/2.jpg" rel="apple-touch-icon">
	
	<!--Custom Font-->
	<!--<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">-->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php include("navbar/navbar_title.php"); ?> INFORMATIC CENTER
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
					<li><a class="" href="cours.php">
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
				<li><a href="">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Accueil</li>
			</ol>
		</div><!--/.row-->

		<?php include("notification/notification.php"); ?>
		
		<div class="row">
			<div class="col-lg-12 text-center"><br><br><br><br><br><br><br><br>
				<img src="images/2.jpg" width="10%" height="10%" class="img-responsive" style="display: block; margin-left: auto; margin-right: auto;border-radius: 60%;" alt="">
			</div><!-- /.col-->

			<div class="col-sm-12"><br><br><br><br><br><br><br><br>
				<?php include("footer/footer.php"); ?>
			</div>
		</div><!-- /.row -->
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>