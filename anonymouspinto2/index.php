<?php
require_once("php/login.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Connexion </title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<!-- Favicons -->
    <link href="images/d.png" rel="icon">
	<link href="images/d.png" rel="apple-touch-icon">
	
</head>
<body>
	<div class="row">
		<div class="col-lg-12 text-center">
			<img src="images/d.png" width="10%" height="10%" class="img-responsive" style="display: block; margin-left: auto; margin-right: auto; border-radius: 50%;" alt="" >
		</div><!-- /.col-->
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4"><br>
			<div class="login-panel panel panel-default shad">
				<!-- <div class="panel-heading"><em class="fa fa-bus">&nbsp;</em> SE CONNECTER</div> -->
				<div class="panel-body">
					<form method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder=" Pseudo " name="user" type="text" maxlength="8" autocomplete="off">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder=" Mot de passe " name="pwd" type="password" maxlength="30" autocomplete="off">
							</div><br>
							<button type="submit" name="btn_connexion" class="btn btn-primary">CONTINUER</button>
							<button type="reset" class="btn btn-default">ANNULER</button>
						</fieldset><br>
					</form>
					<div>
						<?php
							if(isset($erreur1)) {
								echo'<br>'.'<span class="alert bg-teal" role="alert" style="background-color: #f9243f;">'.'<font color="white">'.$erreur1.'</font>'.'</span>'.'<br><br>';
							} else {
								if(isset($erreur2)) {
									echo'<br>'.'<span class="alert bg-teal" role="alert" style="background-color: #f9243f;">'.'<font color="white">'.$erreur2.'</font>'.'</span>'.'<br><br>';
								}
							}
						?>
					</div>
				</div>
			</div><br>
			<?php include("footer/footer.php"); ?>
		</div><!-- /.col-->
		<!--<div class="col-sm-12">
			<p class="back-link"><a href="" target="_blank" style="color: #777; text-decoration: none;">&copy;</a>
				<script>
					document.write(new Date().getFullYear())
				</script> <a href="">SOTRAL SA</a>
			</p>
		</div>-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
