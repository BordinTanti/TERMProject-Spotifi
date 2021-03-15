<?php
// Include config file
include("connection.php");

// Initialize the session
session_start();

error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Spotifi - userhomescreen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="images\icon.png">
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<style>
			.picBox {
				display: flex;
			}

			.imgAvatar {
				border-radius: 50%;
			}     
			.arrow{
				position: absolute;
				top: 70%;
				left: 50%;
				transform: translate(-50%,-50%);
			}
			.arrow span{
				display: block;
				width: 30px;
				height: 30px;
				border-bottom: 5px solid white;
				border-right: 5px solid white;
				transform: rotate(45deg);
				margin: 5px;
				animation: animate 2s infinite;
			}
			.arrow span:nth-child(2){
				animation-delay: -0.2s;
			}
			.arrow span:nth-child(3){
				animation-delay: -0.4s;
			}
			@keyframes animate {
				0%{
					opacity: 0;
					transform: rotate(45deg) translate(-20px,-20px);
				}
				50%{
					opacity: 1;
				}
				100%{
					opacity: 0;
					transform: rotate(45deg) translate(20px,20px);
				}
			}
			.hvr-bounce-in {
				display: inline-block;
				vertical-align: middle;
				-webkit-transform: perspective(1px) translateZ(0);
				transform: perspective(1px) translateZ(0);
				box-shadow: 0 0 1px rgba(0, 0, 0, 0);
				-webkit-transition-duration: 0.5s;
				transition-duration: 0.5s;
			}
			.hvr-bounce-in:hover, .hvr-bounce-in:focus, .hvr-bounce-in:active {
				-webkit-transform: scale(1.2);
				transform: scale(1.2);
				-webkit-transition-timing-function: cubic-bezier(0.47, 2.02, 0.31, -0.36);
				transition-timing-function: cubic-bezier(0.47, 2.02, 0.31, -0.36);
			}
			.column {
				float: left;
				width: 20%;
				padding: 5px;
			}
			/* Clearfix (clear floats) */
			.row::after {
				content: "";
				clear: both;
				display: table;
			}
		</style>
	</head>
  
	<body>   
		<nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container">
				<a class="navbar-brand" href="userhomescreen.php">Spotifi</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="oi oi-menu"></span> Menu
							</button>
								<div class="collapse navbar-collapse" id="ftco-nav">
									<ul class="navbar-nav ml-auto">		
										<li class="nav-item active"><a href="userhomescreen.php" class="nav-link" style="margin-top: 1px;">Home</a></li>
										<li class="nav-item"><a href="podcastscreen.php" class="nav-link" style="margin-top: 1px;">Podcast</a></li>
										<li class="nav-item"><a href="buysubplan.php" class="nav-link" style="margin-top: 1px">Buy Subscription Plan</a></li>
										<li class="nav-item"><a href="userprofile.php" class="nav-link" style="margin-top: 0.3px;"><?php echo $_SESSION['name']; ?></a></li>
										<li class="nav-item"><a href="userprofile.php"><img src="<?php echo $_SESSION["picture"]; ?>" alt="avatarTest Picture" height="65" width="65" class="imgAvatar"></a></li>
										<li class="nav-item"><a href="index.php" class="nav-link">Log Out</a></li>
									</ul>
								</div>
			</div>
		</nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/wallpaper.jpg');" data-stellar-background-ratio="0.5">
		<div class="container" style="align-items: center;">
			<div class="row no-gutters slider-text js-fullheight justify-content-center">
				<h1 style="font-size: 120px;margin-top: 350px;">Hi <?php echo $_SESSION['name']; ?>.</h1>
				<div class="arrow">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
    </section>
    <section class="ftco-section contact-section" style="background-color: #07506e;">
			<div style="text-align: left;padding: 10px 5px 5px 150px;background-color: #149db5;">
				<h1>Newly added Song</h1>
			</div>
			<div class="container" style="height: auto;width: 1200px;margin-bottom: 65px">			
			<div class="row" style="margin: 20px 30px 20px 30px;">
				<!-- -->
			    <div class="column">
			    <a href="webplayer.php?songembed=https://www.youtube.com/embed/tvTRZJ-4EyI" class="hvr-bounce-in">
					<img style="hight: 150px;width: 150px;margin-left: 30px;" src="images/KDL_cover.jpg"/>
				</a>
				<h2 style="margin-top: 20px;font-size: 16px;">Humble - Kendrick Lamar</h2>
				</div>
				
				<!-- -->
				<div class="column">	
				<a href="webplayer.php?songembed=https://www.youtube.com/embed/JGwWNGJdvx8" class="hvr-bounce-in">
					<img style="hight: 150px;width: 150px;margin-left: 30px;" src="images/edcover.jpg"/>
				</a>
				<h2 style="margin-top: 20px;font-size: 16px;">Shape of you - Ed sheeran</h2>
				</div>
				
				<!-- -->
				<div class="column">	
				<a href="webplayer.php?songembed=https://www.youtube.com/embed/r_0JjYUe5jo" class="hvr-bounce-in">
					<img style="hight: 150px;width: 150px;margin-left: 30px;" src="images/eminemcover.jpg"/>
				</a>
				<h2 style="margin-top: 20px;margin-left: 32px;font-size: 16px;">Godzilla - Eminem</h2>
				</div>
				
				<!-- -->
				<div class="column">	
				<a href="webplayer.php?songembed=https://www.youtube.com/embed/x3bfa3DZ8JM" class="hvr-bounce-in">
					<img style="hight: 150px;width: 150px;margin-left: 30px;" src="images/khalid.jpg"/>
				</a>
				<h2 style="margin-top: 20px;margin-left: 45px;font-size: 16px;">Better - Khalid</h2>
				</div>
				<!-- -->
				<div class="column">	
				<a href="webplayer.php?songembed=https://www.youtube.com/embed/Pkh8UtuejGw" class="hvr-bounce-in">
					<img style="hight: 150px;width: 150px;margin-left: 30px;" src="images/shawn_cover.jpg"/>
				</a>
				<h2 style="margin-top: 20px;margin-left: 4px;font-size: 16px;">Señorita - Shawn Mendes</h2>
				</div>
			</div>
			<div style="text-align: right;margin-top: 45px;">
				<form action="" method="post">					        
					<input type="text" name="textSearch" placeholder="Insert song name or artist name" style="width: 300px;text-align: center;">
	                <input type="submit" style="margin-right: 3px;" value="Search"><input type="submit" value="All Song"><br>					
				</form>
				<form action="" method="get">
					<button style="margin: 10px 1px" type="submit" name="favsong" value="fav_song">My Favorite Song</button>
				</form>			
			</div>	
			<div style="padding-top: 50px;">
			    <?php include('selectSong.php'); ?> 
				<?php include('addfavsong.php'); ?> 
				<p style="color: white;text-align: center"><?php echo $erroradd; ?></p>
				<p style="color: white;text-align: center"><?php echo $errorselect; ?></p>			 
			</div> 
		</div>
    </section>
   
    <footer class="ftco-footer ftco-bg-dark ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="logo"><a href="index.html">Spotifi</a></h2>
						<p>Spotify Project.<br>For Education propose only<br> Subject Data-Base</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
		  
		  
			<div class="col-md">
				<div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2">latest News</h2>
					<div class="block-21 mb-4 d-flex">
						<a class="img mr-4 rounded" style="background-image: url(images/KDL_cover.jpg);"></a>
						<div class="text">
							<h3 class="heading"><a href="#">Newly added song Kendrick Lamar!</a></h3>
							<div class="meta">
								<div><a href="#"></span> Mar. 7, 2020</a></div>
								<div><a href="#"></span> Admin</a></div>
							</div>
						</div>
					</div>
					<div class="block-21 mb-4 d-flex">
					<a class="img mr-4 rounded" style="background-image: url(images/shawn_cover.jpg);"></a>
						<div class="text">
							<h3 class="heading"><a href="#">Newly added song Shawn Mendes!</a></h3>
							<div class="meta">
								<div><a href="#"></span> Mar. 7, 2020</a></div>
								<div><a href="#"></span> Admin</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		  
		  
			<div class="col-md">
				<div class="ftco-footer-widget mb-4 ml-md-5">
				<h2 class="ftco-heading-2">Information</h2>
				<ul class="list-unstyled">
					<li><a href="userhomescreen.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Home</a></li>
					<li><a href="buysubplan.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Buy Subscription Plan</a></li>
				</ul>
				</div>
			</div>
			<div class="col-md">
				<div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text">Silpakorn University, Nakhon Pathom, Thailand, 73000</span></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text">+66 0812345678</span></a></li>
								<li><a href="#"><span class="icon icon-envelope"></span><span class="text">Spotifi@silpakorn.com</span></a></li>
							</ul>
						</div>
				</div>
			</div>
        </div>
		
		
        <div class="row">
			<div class="col-md-12 text-center">
				<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a></p>
			</div>
        </div>
		</div>
    </footer>
    
  <!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>  
	</body>
</html>