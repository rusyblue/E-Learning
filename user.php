<?php
session_start();
 include_once './functions/database.php';
  $bbd = bbd();
//
if (isset($_SESSION['iduser'])) {
          
    ?>
<!DOCTYPE html>
<html>
<head>
	<title> Utilisateur </title>
   <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" >
 
  <link href="bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" >
  <link rel="css/user.css" rel="stylesheet">
</head>

<body>

	<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
		
				<div class="profile-userpic">
					<img src="php/profils/2.jpg" class="img-responsive" alt="">
                   
				</div>
				
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?php echo $_SESSION['user']; ?>
					</div>
					<div class="profile-usertitle-job">
						Developer
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="glyphicon glyphicon-ok"></i>
							Tasks </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
        
            <a  class="navbar-brand" href="php/logout.php">
            <i class="fa fa-power-off" style="font-size:24px"></i> Se déconnecter</a>

        
            <div class="profile-content">
			  Les cours disponibles 
        <?php




$req= $bbd->prepare(" SELECT * FROM course,categories WHERE categories.idcat=course.idcat  ORDER BY
 idcourse ASC ");

$req->execute();


while($resultat=$req->fetch()) {

  ?>






  <div class="container"> 
  <h3><?php echo $resultat['name_cat'];?> </h3>
  <h2></h2>
  <div class="card" style="width:200px">
    <img class="card-img-top" src="courses/<?php echo $resultat['avatar'];?> " alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title"><?php echo $resultat['price'];?> </h4>
      <p class="card-text"><?php echo $resultat['description_d'];?> </p>
      <a href="#" class="btn btn-primary">  <i class="fa fa-cloud-download" style="font-size:24px"></i> Obtenez</a>
    </div>
    <h3> 
  
   

    </h3>
  </div>
  <br>

</div>
<?php }?>    





            </div>
            

          
  


		</div>
	</div>
</div>
<center>
<strong>Powered by <a href="" target="_blank">DavysLab</a></strong>
</center>
<br>
<br>

</body>
</html>

  <script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>


    <?php

}else {
?>


<?php
              }

              ?>
<style >



body {
    background: #F1F3FA;
  }
  
  /* Profile container */
  .profile {
    margin: 20px 0;
  }
  
  /* Profile sidebar */
  .profile-sidebar {
    padding: 20px 0 10px 0;
    background: #fff;
  }
  
  .profile-userpic img {
    float: none;
    margin: 0 auto;
    width: 50%;
    height: 50%;
    -webkit-border-radius: 50% !important;
    -moz-border-radius: 50% !important;
    border-radius: 50% !important;
  }
  
  .profile-usertitle {
    text-align: center;
    margin-top: 20px;
  }
  
  .profile-usertitle-name {
    color: #5a7391;
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 7px;
  }
  
  .profile-usertitle-job {
    text-transform: uppercase;
    color: #5b9bd1;
    font-size: 12px;
    font-weight: 600;
    margin-bottom: 15px;
  }
  
  .profile-userbuttons {
    text-align: center;
    margin-top: 10px;
  }
  
  .profile-userbuttons .btn {
    text-transform: uppercase;
    font-size: 11px;
    font-weight: 600;
    padding: 6px 15px;
    margin-right: 5px;
  }
  
  .profile-userbuttons .btn:last-child {
    margin-right: 0px;
  }
      
  .profile-usermenu {
    margin-top: 30px;
  }
  
  .profile-usermenu ul li {
    border-bottom: 1px solid #f0f4f7;
  }
  
  .profile-usermenu ul li:last-child {
    border-bottom: none;
  }
  
  .profile-usermenu ul li a {
    color: #93a3b5;
    font-size: 14px;
    font-weight: 400;
  }
  
  .profile-usermenu ul li a i {
    margin-right: 8px;
    font-size: 14px;
  }
  
  .profile-usermenu ul li a:hover {
    background-color: #fafcfd;
    color: #5b9bd1;
  }
  
  .profile-usermenu ul li.active {
    border-bottom: none;
  }
  
  .profile-usermenu ul li.active a {
    color: #5b9bd1;
    background-color: #f6f9fb;
    border-left: 2px solid #5b9bd1;
    margin-left: -2px;
  }
  
  /* Profile Content */
  .profile-content {
    padding: 20px;
    background: #fff;
    min-height: 460px;
  }
  













</style>



