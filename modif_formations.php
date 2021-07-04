
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SuccessWay</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="icon" type="image/png" sizes="40x40" href="images/Capture.PNG">

    <!-- 
	Workforce CSS Template
	https://templatemo.com/tm-461-workforce
    -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">		
	<link rel="stylesheet" href="css/templatemo-style.css">
	<link rel="stylesheet" href="css/contact.css">
	<link rel="stylesheet" href="css/sponsors.css">

    <!-- code php here -->


<?php

session_start();

/*$con= mysqli_connect('localhost','root','');
mysqli_select_db($con, 'dnm');*/

$login="";
$pass="";

if(isset($_SESSION['login']))
{
    $login=$_SESSION['login'];
}
if(isset($_SESSION['pass']))
{
    $pass=$_SESSION['pass'];
}


/*$str="select * from actualites  ORDER BY date DESC";
 $query=mysqli_query($con,$str);*/

?>

<style>
body
{
    background-color: white; 
    color: white; /* Le texte de la page sera blanc */
}
form {
   display: inline-block;
}
</style>

</head>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">


  
	<div class="preloader" >
		<div id="mdiv">
        	<div class="cdiv">
            	<div class="rot"></div>
            	<h1 class="lh">successway</h1>
        	</div>
    	</div>
	</div>
	<nav class="navbar navbar-fixed-top custom-navbar" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">SuccessWay</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php" class="smoothScroll">Accueil</a></li>
					<li><a href="presentation.php" class="smoothScroll">Présentation</a></li>
					<li><a href="formations_encours.php" class="smoothScroll">Formations en cours</a></li>
					<li><a href="#portfolio" class="smoothScroll">Services</a></li>
					<li><a href="#contact" class="smoothScroll">Réferences</a></li>
					<li><a href="formations_realisees.php" class="smoothScroll">Formations réalisées</a></li>
					<li><a href="choix.php" class="smoothScroll">contact</a></li>
					<li><a href="choix.php" class="smoothScroll">s'identifier</a></li>
					<div>
					
</div>
					
				</ul>
			</div>
		</div>
	</nav>
	<!-- start home -->
	
	<!-- end home -->

<!-- code php here -->

<?php
if(!(($login=="admin") && ($pass=="successway")))
{
	if (isset($_POST['submit'] )) {
    	$login = $_POST['username'];
    	$pass = $_POST['password'];
    	$_SESSION['login']=$login;
   		$_SESSION['pass']=$pass;
   		echo "<script>location.href='modif_formations.php'</script>";
    }

?>
<br><br><br><br>
<div class="container" style="padding-top: 50px;">
		
			
		<br>
			<div class="row">
				
				<div class="col-md-12 text-center wow bounceIn">
                <form action="" method="post">

                    <div style="color:#1A4280 ;font-size:45px";>
                        <p><B>Se connecter</B></p>
                    </div>
                    
				    <div style="color:#1A4280; font-size:20px">
						<label for="username">Nom d'utilisateur:  </label>
						<input class="form-control input-lg" type="text" name="username" placeholder="Entrer le nom d'utilisateur" style="display: inline-block; border-width:2px;font-size: 20px; color: black;border-color:#D8242F ;margin-left:70px;border-radius:10px;width: 350px;height:50px">
					</div>
					<br><br>
					<div style=" color:#1A4280 ; font-size:20px">
					<label for="password">Mot de passe: </label>
					<input class="form-control input-lg" type="password"  name="password" placeholder="Entrer le mot de passe" style="display: inline-block; border-width:2px;font-size: 20px; color: black;border-color:#D8242F ;margin-left:110px;border-radius:10px; width: 350px;height:50px">
					</div>
                    <br>
                    <div>
			            <input type="submit" name="submit" value="Connecter" style="text-align:center; font-size: 23px; background-color: #1A4280 ; color: #FFFFFF; border: none;margin-left:0px; margin-top:30px; height:50px;width:250px;border-radius:10px; ">
						<br><br><br>
		            </div>
					</form>
				</div>
								
			</div>
		
		
</div>

<?php
}
if (($login=="admin") && ($pass=="successway") && !(isset($_POST['formations_realisees'] )) && !(isset($_POST['formations_encours'] )) && !(isset($_POST['add_formations_realisees'] )) && !(isset($_POST['delete_formations_realisees'] )) && !(isset($_POST['add_formations_encours'] )) && !(isset($_POST['delete_formations_encours'] )))
{
	?>
	
	<div class="container" style="padding-top: 50px;">
		<div class="row">
			<div class="col-md-12 text-center wow bounceIn">
				<form action="" method="post">
					<br><br><br><br><br><br><br><br>
					<div><input type="submit" name="formations_realisees" value="Modifier formations réalisées" style="text-align:center; font-size: 20px; background-color: #1A4280; color: #FFFFFF; border: none;margin-left:0px; margin-top:30px; height:50px;width:550px;border-radius:10px; "></div>
					
					<div><input type="submit" name="formations_encours" value="Modifier formations en cours" style="text-align:center; font-size: 20px; background-color: #1A4280; color: #FFFFFF; border: none;margin-left:0px; margin-top:30px; height:50px;width:550px;border-radius:10px; "></div>
					
						<div><a href="backend/logout_formations.php" style="text-decoration:none;text-align:center; font-size: 20px; background-color: #1A4280; color: #FFFFFF; border: none;margin-left:0px; margin-top:30px; height:50px;width:550px;border-radius:10px;display:inline-block;line-height:50px;">Déconnecter</a><br><br><br><br><br><br><br></div>

				</form>
			</div>
		</div>
	
	</div>

<?php
}
if (($login=="admin") && ($pass=="successway") && (isset($_POST['formations_realisees'] )) )
{
	?>
	<div class="container" style="padding-top: 50px;">
		<div class="row">
			<div class="col-md-12 text-center wow bounceIn">        
				<form action="" method="post">
					<br><br><br><br><br><br><br><br>
					<div><input type="submit" name="add_formations_realisees" value="Ajouter une formation réalisée" style="text-align:center; font-size: 20px; background-color: #1A4280; color: #FFFFFF; border: none;margin-left:0px; margin-top:30px; height:50px;width:550px;border-radius:10px; "></div>
					<div><input type="submit" name="delete_formations_realisees" value="Retirer une formation réalisée" style="text-align:center; font-size: 20px; background-color: #1A4280; color: #FFFFFF; border: none;margin-left:0px; margin-top:30px; height:50px;width:550px;border-radius:10px; "></div>
					<div><a href="backend/logout_formations.php" style=" text-decoration:none;text-align:center; font-size: 20px; background-color: #1A4280; color: #FFFFFF; border: none;margin-left:0px; margin-top:30px; height:50px;width:850px;border-radius:10px;width:550px;display:inline-block;line-height:50px;">Déconnecter</a><br><br><br><br><br><br><br></div>

				</form>
			</div>
		</div>
	
	</div>

  <?php
}
if (($login=="admin") && ($pass=="successway") && (isset($_POST['formations_encours'] )) )
{
	?>
	<div class="container" style="padding-top: 50px;">
		<div class="row">
			<div class="col-md-12 text-center wow bounceIn">         
				<form action="" method="post">
					<br><br><br><br><br><br><br><br>
					<div><input type="submit" name="add_formations_encours" value="Ajouter une formation en cours" style="text-align:center; font-size: 20px; background-color: #1A4280; color: #FFFFFF; border: none;margin-left:0px; margin-top:30px; height:50px;width:550px;border-radius:10px; "></div>
					<div><input type="submit" name="delete_formations_encours" value="Retirer une formation en cours" style="text-align:center; font-size: 20px; background-color: #1A4280; color: #FFFFFF; border: none;margin-left:0px; margin-top:30px; height:50px;width:550px;border-radius:10px; "></div>
					<div><a href="backend/logout_formations.php" style="text-decoration:none;text-align:center; font-size: 20px; background-color: #1A4280; color: #FFFFFF; border: none;margin-left:0px; margin-top:30px; height:50px;width:850px;border-radius:10px;width:550px;display:inline-block;line-height:50px;">Déconnecter</a><br><br><br><br><br><br><br></div>

				</form>
			</div>
		</div>
	
	</div>

<?php
}

if (($login=="admin") && ($pass=="successway") && isset($_POST['add_formations_realisees'] ))
{
	
	?>
	<div class="container" style="padding-top: 50px;">
			<div class="row">
				<div class="col-md-12 text-center wow bounceIn">  

					<form action="backend/upload_formations_realisees.php" method="post" enctype="multipart/form-data">
					<br><br><br><br>
					<div>
							<div style="color:#1A4280";>
								<h3><B><font size=+3>Ajouter une formation réalisée</font></B></h3>
							</div>
						<br><br><br>
						<div style="display:flex;">
						<div style="color:#1A4280";><strong><font size=+1>Nom de la formation:</font></strong></div>
						<div> <input class="form-control input-lg" type="text" name="titre" placeholder="Entrer le nom de la formation" required style="border-width:2px; font-size: 20px; color: black;border-color:#D8242F ;margin-left:95px;border-radius:10px;"></div>
						<div><input type="file" id="image" hidden name="image" required accept="image/*"  style="font-size: 20px; color: #D8242F; border-color:#1A4280 ;margin-left:120px; "></div>
						
						</div>
						<br><br>

						<div style="display:flex;">
						<div style="color:#1A4280";><strong><font size=+1>Date debut de la formation:</font></strong></div> 
						<div><input class="form-control input-lg" type="date"  name="date_debut" style="border-width:2px;font-size: 20px; color: black;border-color:#D8242F ;margin-left:38px;border-radius:10px;"></div>        
						</div>
						<br><br>

						<div style="display:flex;">
						<div style="color:#1A4280";><strong><font size=+1>Date fin de la formation:</font></strong></div>
						<div> <input class="form-control input-lg" type="date" name="date_fin" style="border-width:2px;font-size: 20px; color: black;border-color:#D8242F ;margin-left:67px;border-radius:10px;"></div>        
						</div>
						<br><br>

						<div style="display:flex;">
						<div style="color:#1A4280";><strong><font size=+1>Durée de la formation:</font></strong></div>
						<div> <input class="form-control input-lg" type="text" name="duree"  placeholder="Entrer la durée de la formation" style="border-width:2px;font-size: 20px; color: black;border-color:#D8242F ;margin-left:85px;border-radius:10px;"></div>        
						</div>
						<br><br>

						<div style="display:flex;">
						<strong><font color="#1A4280"><font size=+1>Description de la formation:</font></font></strong>
						<div style="color:#1A4280";>
							<textarea class="form-control input-lg" rows="5" cols="80" name="description" placeholder="Entrer la description de la formation  "style="font-size: 20px;border-width:2px;border-radius:10px; margin-left:35px; color: black;border-color:#D8242F ;"></textarea>
						</div></div>
						<br><br>
						
						<!--<div><strong>catégorie de l'activité:</strong> <input type="text" name="categorie" required style="font-size: 20px; color: black; border-color:#00cfef ;margin-left:50px;border-radius:10px;"></div><br><br>-->
						<div><input type="submit" name="upload" value="Ajouter" style="text-align:center; font-size: 23px; background-color: #1A4280; color: #FFFFFF; border: none;margin-left:0px; margin-top:30px; height:50px;width:550px;border-radius:10px; "></div>
						</div>
						<div><a href="backend/logout_formations.php" style="text-decoration:none;text-align:center; font-size: 23px; background-color: #1A4280; color: #FFFFFF; border: none;margin-left:0px; margin-top:30px; height:50px;width:550px;border-radius:10px;display:inline-block;line-height:50px;">Déconnecter</a><br><br><br><br><br><br><br></div>
					</form>
				</div>
			</div>
	
	</div>



  <?php
}

if (($login=="admin") && ($pass=="successway") && isset($_POST['delete_formations_realisees'] ))
{
	
	?>
	<div class="container" style="padding-top: 50px;">
		<div class="row">
				<div class="col-md-12 text-center wow bounceIn">  
					<form action="backend/delete_formations_realisees.php" method="post" enctype="multipart/form-data">
					<br><br><br><br><br><br><br><br>
					<div>
							<div style="color:#1A4280";>
								<h3><B><font size=+3>Retirer une formation Réalisée</font></B></h3>
							</div>
						<br><br><br>

						
							<div class="row">
								
								<div class="col-sm">
									<div style="color:#1A4280";>
										<label for="username"><font size=+1>Nom de la formation: </font></label>
										<input class="form-control input-lg" type="text" name="titre" placeholder="Entrer le nom de la formation" required style="display: inline-block;border-width:2px; font-size: 20px; color: black;border-color:#D8242F ;margin-left:50px;border-radius:10px;width: 500px;">
									</div>
								</div>
												
							</div>
						<br>
						<!--<div><strong>catégorie de l'activité:</strong> <input type="text" name="categorie" required style="font-size: 20px; color: black; border-color:#00cfef ;margin-left:50px;border-radius:10px;"></div><br><br>-->
						<div><input type="submit" name="delete" value="Retirer" style="text-align:center; font-size: 20px; background-color: #1A4280; color: #FFFFFF; border: none;margin-left:0px; margin-top:30px; height:50px;width:550px;border-radius:10px; "></div>
						</div>
						<div><a href="backend/logout_formations.php" style="text-decoration:none;text-align:center; font-size: 20px; background-color: #1A4280; color: #FFFFFF; border: none;margin-left:0px; margin-top:30px; height:50px;width:550px;border-radius:10px;width:550px;display:inline-block;line-height:50px;">Déconnecter</a><br><br><br><br><br><br><br></div>
					</form>
				</div>
		</div>
  
    </div>

  <?php
}

if (($login=="admin") && ($pass=="successway") && isset($_POST['add_formations_encours'] ))
{
	
	?>
	<div class="container" style="padding-top: 50px;">
		<div class="row">
			<div class="col-md-12 text-center wow bounceIn">  
				<form action="backend/upload_formations_encours.php" method="post" enctype="multipart/form-data">
				<br><br><br><br><br><br><br><br>
				<div>
						<div style="color:#1A4280";>
							<h3><B><font size=+3>Ajouter une formation en cours</font></B></h3>
						</div>
					<br><br><br>
					<div style="display:flex;">
					<div style="color:#1A4280";><strong><font size=+1>Nom de la formation:</font></strong></div>
					<div> <input class="form-control input-lg" type="text" name="titre" placeholder="Entrer le nom de la formation" required style="border-width:2px; font-size: 20px; color: black;border-color:#D8242F ;margin-left:95px;border-radius:10px;"></div>
					<div><input type="file" id="image" hidden name="image" required accept="image/*"  style="font-size: 20px; color: #D8242F; border-color:#1A4280 ;margin-left:120px; "></div>
					
					</div>
					<br><br>

					<div style="display:flex;">
					<div style="color:#1A4280";><strong><font size=+1>Date debut de la formation:</font></strong></div> 
					<div><input class="form-control input-lg" type="date"  name="date_debut" style="border-width:2px;font-size: 20px; color: black;border-color:#D8242F ;margin-left:38px;border-radius:10px;"></div>        
					</div>
					<br><br>

					<div style="display:flex;">
					<div style="color:#1A4280";><strong><font size=+1>Date fin de la formation:</font></strong></div>
					<div> <input class="form-control input-lg" type="date" name="date_fin" style="border-width:2px;font-size: 20px; color: black;border-color:#D8242F ;margin-left:67px;border-radius:10px;"></div>        
					</div>
					<br><br>

					<div style="display:flex;">
					<div style="color:#1A4280";><strong><font size=+1>Durée de la formation:</font></strong></div>
					<div> <input class="form-control input-lg" type="text" name="duree"  placeholder="Entrer la durée de la formation" style="border-width:2px;font-size: 20px; color: black;border-color:#D8242F ;margin-left:85px;border-radius:10px;"></div>        
					</div>
					<br><br>

					<div style="display:flex;">
					<strong><font color="#1A4280"><font size=+1>Description de la formation:</font></font></strong>
					<div style="color:#1A4280";>
						<textarea class="form-control input-lg" rows="5" cols="80"  name="description" placeholder="Entrer la description de la formation  "style="font-size: 20px;border-width:2px;border-radius:10px; margin-left:35px; color: black;border-color:#D8242F ;"></textarea>
					</div></div>
					<br><br>
					
					<!--<div><strong>catégorie de l'activité:</strong> <input type="text" name="categorie" required style="font-size: 20px; color: black; border-color:#00cfef ;margin-left:50px;border-radius:10px;"></div><br><br>-->
					<div><input type="submit" name="upload" value="Ajouter" style="text-align:center; font-size: 20px; background-color: #1A4280; color: #FFFFFF; border: none;margin-left:0px; margin-top:30px; height:50px;width:550px;border-radius:10px; "></div>
					</div>
					<div><a href="backend/logout_formations.php" style="text-decoration:none;text-align:center; font-size: 20px; background-color: #1A4280; color: #FFFFFF; border: none;margin-left:0px; margin-top:30px; height:50px;width:550px;border-radius:10px;width:550px;display:inline-block;line-height:50px;">Déconnecter</a><br><br><br><br><br><br><br></div>
				</form>
			</div>
		</div>
	
	</div>

  <?php
}

if (($login=="admin") && ($pass=="successway") && isset($_POST['delete_formations_encours'] ))
{
	
	?>
	<div class="container" style="padding-top: 50px;">
		<div class="row">
			<div class="col-md-12 text-center wow bounceIn"> 
				<form action="backend/delete_formations_encours.php" method="post" enctype="multipart/form-data">
				<br><br><br><br><br><br><br><br>
				<div>
						<div style="color:#1A4280";>
							<h3><B><font size=+3>Retirer une formation en cours</font></B></h3>
						</div>
					<br><br><br>
					<div class="row">
							
							<div class="col-sm">
								<div style="color:#1A4280";>
									<label for="username"><font size=+1>Nom de la formation: </font></label>
									<input class="form-control input-lg" type="text" name="titre" placeholder="Entrer le nom de la formation" required style="display: inline-block;border-width:2px; font-size: 20px; color: black;border-color:#D8242F ;margin-left:50px;border-radius:10px;width: 500px;">
								</div>
							</div>
											
						</div>
					<br>
					
					<!--<div><strong>catégorie de l'activité:</strong> <input type="text" name="categorie" required style="font-size: 20px; color: black; border-color:#00cfef ;margin-left:50px;border-radius:10px;"></div><br><br>-->
					<div><input type="submit" name="delete" value="Retirer" style="text-align:center; font-size: 20px; background-color: #1A4280; color: #FFFFFF; border: none;margin-left:0px; margin-top:30px; height:50px;width:550px;border-radius:10px; "></div>
					</div>
					<div><a href="backend/logout_formations.php" style="text-decoration:none;text-align:center; font-size: 20px; background-color: #1A4280; color: #FFFFFF; border: none;margin-left:0px; margin-top:30px; height:50px;width:550px;border-radius:10px;width:all;display:inline-block;line-height:50px;">Déconnecter</a><br><br><br><br><br><br><br></div>
				</form>
			</div>
		</div>
	
	</div>
	<?php
}


  ?>


	
	<footer style="src:\xampp\htdocs\success\dreamsnmotion_final_version\template\templatemo_461_workforce\images\slider;">
		<div class="container1">
			<div class="row">
				<div class="col-md-12">
					<ul class="social-icon wow fadeIn" data-wow-delay="0.3s">
						<li><a href="#" class="fa fa-facebook"></a></li>
						<li><a href="#" class="fa fa-twitter"></a></li>
						<li><a href="#" class="fa fa-instagram"></a></li>
					</ul>
					<p class="wow bounceIn">Copyright &copy; 2021 <span>Successway</span> created by 
                     <a rel="nofollow noopener" href="https://enetcomje.com/"><span>Enet'com junior entreprise</span></a></p>
				</div>
			</div>
		</div>
	</footer>
						
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/isotope.js"></script>
	<script src="js/imagesloaded.min.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/sponsors.js"></script>
	<script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
	
</body>
</html>