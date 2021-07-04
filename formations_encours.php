
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

    <!-- code php here -->


    <?php

session_start();

$connection = mysqli_connect('localhost','root', '');
mysqli_select_db($connection,'successway');

$query = "select * from formations_encours ORDER BY date_debut DESC";
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
    <h3><B><span>Formations En Cours</font></B></h3>
    <div class="row">
        <div class="col-md-12 text-center wow bounceIn">
            <a href="index.php" ><span><font size=+0><font color="#1A4280">successway</font></font></span></a> 
            <span><font size=+0><font color="#1A4280">> Formations en cours</font></font></span>
        </div>
    </div>
	<br><br><br><br><br>
	<!--end section-->

    <!-- Activités récentes Section --> 
    

<section class="section-wrapper" id="works">
		<div class="container">
			<div class="wrapper-news">	
				
				<?php
					$cpt=0;
					while($row=mysqli_fetch_array($exec_query)){
				?>
					<div class="col-lg-6 col-sm-6"  >	
						<div class="news-content wow fadeInLeft" data-wow-duration="1s" data-wow-delay="300ms">	
							
                            <div class="entry-header" >	
								<div class="blog-image"  >							
								<a href="description_formation_encours.php?title=<?php echo $row['titre']; ?>"  >
									<?php 
									echo "<img src=\"backend/img_formations_encours.php?id=".$row['id']."\"class=\"img-responsive\" height='1000' width='1000'>";
									?>
								</a>
									<!--<img alt="" src="images/blog/post1.jpg" class="img-responsive">-->
								</div>															
							</div>
                            <br>
							<div class="entry-content"  >	
                                <a href="description_formation_encours.php?title=<?php echo $row['titre']; ?>"  >
                                    <h3 class="entry-title">
                                    <font size=+2><B>
                                        <?php
                                        echo $row['titre'];
                                        ?>
                                    </B></font>
                                        <!--<a href="blog.html">Adipisicing elit, sed do eiusmod tempor</a>-->
                                    </h3>			
                                </a>				
							</div>
                            <br>
						</div>
					</div>
				<?php
					$cpt++;
					if ($cpt>=2)
						{
							echo"</div><div class=\"row\">";
							 $cpt=0;
						}
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