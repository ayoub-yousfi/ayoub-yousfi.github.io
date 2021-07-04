<!DOCTYPE html>
<html lang="en">
<head>
	<title>s'identifier</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link rel="icon" type="image/png" sizes="40x40" href="images/Capture.PNG">

</head>
<body>
	<div id="frm">
		<form action="inscrit.php" method="POST" >
			<div class="limiter">
				<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
					<div class="wrap-login100">
						<form class="login100-form validate-form">
							<span class="login100-form-logo">
								<i class="zmdi zmdi-landscape"></i>
							</span>
							<span class="login100-form-title p-b-34 p-t-27">
								Sign up
							</span>
							<div class="wrap-input100 validate-input" data-validate = "nom">
								<input class="input100" type="text"  id="nom" name="nom" placeholder="Nom">
								<span class="focus-input100" data-placeholder="&#xf207;"></span>
							</div>
							<div class="wrap-input100 validate-input" data-validate="prenom">
								<input class="input100" type="text" id="prenom" name="prenom" placeholder="Prenom">
								<span class="focus-input100" data-placeholder="&#xf191;"></span>
							</div>
							<div class="wrap-input100 validate-input" data-validate = "email">
								<input class="input100" type="text"  id="email" name="email" placeholder="Email">
								<span class="focus-input100" data-placeholder="&#xf207;"></span>
							</div>
							<div class="wrap-input100 validate-input" data-validate = "password">
								<input class="input100" type="password"  id="password" name="password" placeholder="Password">
								<span class="focus-input100" data-placeholder="&#xf207;"></span>
							</div>
							<div class="wrap-input100 validate-input" data-validate = "confirmpassword">
								<input class="input100" type="password"  id="confirmpassword" name="confirmpassword" placeholder="Confirme password">
								<span class="focus-input100" data-placeholder="&#xf207;"></span>
							</div>
							
							<div class="wrap-input100 validate-input" data-validate = "telephone">
								<input class="input100" type="text"  id="telephone" name="telephone" placeholder="N° Téléphone">
								<span class="focus-input100" data-placeholder="&#xf207;"></span>
							</div>
							
							
							<div class="container-login100-form-btn">
								<button class="login100-form-btn" type="submit" id="submit">
									Login
								</button>
							</div>
							
							
						</form>
					</div>
				</div>
			</div>
		</form>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="js/inscrit.js"></script>


</body>
</html>