
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
	<link rel="stylesheet" href="css/formation.css">
	<link rel="stylesheet" href="css/contact.css">
	<link rel="stylesheet" href="css/sponsors.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- code php here -->


    <?php

    session_start();

    $connection = mysqli_connect('localhost','root', '');
    mysqli_select_db($connection,'successway');

    $title1=$_GET['title'];
	$title = str_replace("'", "\'", $title1);

    $query = "select * from actualites where titre='$title'";
    $exec_query = mysqli_query($connection,$query);
    ?>
    
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
	<nav class="navbar navbar-fixed-top custom-navbar " role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">SuccessWay</a>
			</div>
			<div class="collapse navbar-collapse ">
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

	 <!--First section-->
     <br><br><br><br><br>
	<div class="fleximg">
		<ul class="background">
    		<img src="images/formations/successway_formations.jpg">
		</ul>
	</div>
    
    <br><br>
    <h3><B><span>Actualités</span></B></h3>
    <div class="row">
        <div class="col-md-12 text-center wow bounceIn">
            <a href="index.php" ><span><font size=+0><font color="#1A4280">successway</font></font></span></a> 
			<a href="index.php#actualite" ><span><font size=+0><font color="#1A4280">> Actualités</font></font></span></a>
            <span><font size=+0><font color="#1A4280">> <?php echo $title1 ?></font></font></span>        </div>
    </div>
	<br><br><br><br><br>
	<!--end section-->

    <!-- Activités récentes Section --> 
    

    <section class="section-wrapper" id="works">
	<!-- Main Content start-->
    <div class="container">
			<div class="wrapper-news">	
				<div class="row">
				<br>
				<div class="col-md-12 text-center wow bounceIn">
				<?php	
					while($row=mysqli_fetch_array($exec_query)){
				?>
					<div class="col-lg-10 col-md-9 col-sm-8 col-xs-12">	
						<div class="news-content wow fadeInLeft" data-wow-duration="1s" data-wow-delay="300ms">	
							<div class="entry-header">	
								<div class="blog-image">
									<?php
									echo "<img src=\"backend/img_actualites.php?id=".$row['id']."\"class=\"img-responsive\"align=left height='2000' width='2000' >";
									?>
									<!--<img alt="" src="images/blog/post1.jpg" class="img-responsive">-->
								</div>				
                                								
							</div>
                            <br><br>
							<div class="entry-content">	
								<h2 class="entry-title">
                                <font size=+3><font color="#D8242F"><B>
									<?php
									echo $row['titre'];
									?>
                                </B></font></font>
									<!--<a href="blog.html">Adipisicing elit, sed do eiusmod tempor</a>-->
								</h2>
                                                                
								<br>
								<h2><font size=+1>
									<?php
									echo nl2br($row['description']);
									?>
                                    </font>
								</h2>								
							</div>
						</div>
						</div>
					</div>
				<?php	
					}
				?>

				</div>
                
</section>

<!-- End Works Section -->



	
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