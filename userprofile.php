<?php
// Include config file
include("connection.php");

// Initialize the session
session_start();

 $str = "";
 $length = strlen($_SESSION['password']);
 $i = 0;
 while($i != $length){
	 $i = $i + 1;
	 $str .= "*";
 }
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Spotifi - userprofile</title>
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
		<style>
			.picBox {
				display: flex;
			}

			.imgAvatar {
				border-radius: 50%;
			}     
			.contact-form {
				font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
				position: absolute;
				top: 55%;
				left: 50%;
				transform: translate(-50%,-50%);
				width: 1100px;
				height: 500px;
				padding: 30px 40px;
				box-sizing: border-box;
				border-radius: 20px;
				background: rgba(26,82,118,.5);
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
										<li class="nav-item"><a href="userhomescreen.php" class="nav-link" style="margin-top: 1px">Home</a></li>
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
		<div class="container">
			<div class="row slider-text justify-content-left">			
				<p style="font-size: 36px;margin-top: 150px;margin-left: 15px;"><b>Personol information</b></p>
				<div class="contact-form">
				 <div class="row">
					<div class="column">
						<img  class="imgAvatar" style="margin: 20px 0px 0px 50px;" src="<?php echo $_SESSION["picture"]; ?>" alt="avatarTest Picture" height="200" width="200">
					</div>
					<div class="column" style="margin-left: 120px;margin-top: 20px;">
						<p style="color: white;font-size: 24px;">Name : <?php echo $_SESSION['name']; ?></p>
						<p style="color: white;font-size: 24px;">Email : <?php echo $_SESSION['email']; ?></p>
						<p style="color: white;font-size: 24px;">Password : <?php echo $str ?></p>
						<p style="color: white;font-size: 24px;">Subscription Plan : <?php echo $_SESSION['subplan']; ?></p>
						<p style="color: white;font-size: 24px;">Change Profile Picture :<p style="font-size: 12px"> support only .jpg and file size limit at 500KB.</p></p>
						<form action="" method="post" enctype="multipart/form-data">				
							<input type="file" name="fileToUpload" id="fileToUpload" style="color: white;"><br><br>
							<input type="submit" name="submit" value="Upload Image">
						</form>
						<?php include("upload.php"); ?>
						<p></p>
						<p style="color: white;font-size: 12px;"><?php echo $errorstr;?></p><p style="color: white;font-size: 12px;"><?php echo $confrimstr;?></p>
					</div>
					<div class="column" style="margin-left: 270px;">
						<a href="editprofile.php" style="color: white;font-size: 18px;">Edit</a>
					</div>
				 </div>
				</div>			
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