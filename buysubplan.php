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
    <title>Spotifi - buysubplan</title>
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
        .imgAvatar {
				border-radius: 50%;
		}	   
	    .contact-form {
		    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 1000px;
            height: 600px;
            padding: 30px 40px;
            box-sizing: border-box;
			border-radius: 20px;
            background: rgba(26,82,118,.5);
        }
		.myButton {
			box-shadow:inset 0px 1px 0px 0px #ffffff;
			background:linear-gradient(to bottom, #ffffff 5%, #f6f6f6 100%);
			background-color:#ffffff;
			border-radius:6px;
			border:1px solid #dcdcdc;
			display:inline-block;
			cursor:pointer;
			color:#666666;
			font-family:Arial;
			font-size:15px;
			font-weight:bold;
			padding:6px 24px;
			text-decoration:none;
			text-shadow:0px 1px 0px #ffffff;
		}
		.myButton:hover {
			background:linear-gradient(to bottom, #f6f6f6 5%, #ffffff 100%);
			background-color:#f6f6f6;
		}
		.myButton:active {
			position:relative;
			top:1px;
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
	          <li class="nav-item"><a href="userhomescreen.php" class="nav-link">Home</a></li>
			  <li class="nav-item"><a href="podcastscreen.php" class="nav-link" style="margin-top: 1px;">Podcast</a></li>
	          <li class="nav-item active"><a href="buysubplan.php" class="nav-link">Buy Subscription Plan</a></li>
   			  <li class="nav-item"><a href="userprofile.php" class="nav-link"><?php echo $_SESSION['name']; ?></a></li>
			  <li class="nav-item"><a href="userprofile.php"><img src="<?php echo $_SESSION["picture"]; ?>" alt="avatarTest Picture" height="65" width="65" class="imgAvatar"></a></li>
			  <li class="nav-item"><a href="index.php" class="nav-link">Log Out</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/wallpaper.jpg');" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-start justify-content-start" data-scrollax-parent="true" style="height: 937px;padding-top: 180px;padding-bottom: 180px;text-align: center;">
          <div class="col-md-12 ftco-animate" style="margin-top: 290px">
		  <div class="contact-form">
          	 <h1 style="font-size: 220%;color: #fff"><b>Subscription Plan</b></h1>
			 <div Style="text-align: left;"><br>			 
			    
			  <p style="font-size: 150%">1. Premium - Price 129 Baht</p>
			  <p style="font-size: 150%"> &nbsp;&nbsp; - Premium subscription will give you higher quality of music, unlimit skip and no ad for 1 user.</p>
			  <form action="transactionpage.php" method="get">
				<button class="myButton" type="submit" name="plantype" value="premium" >Buy</button><p></p><br>
			  </form>
			  
			  <p style="font-size: 150%">2. Family Premium  - Price 199 Baht</p>
			  <p style="font-size: 150%"> &nbsp;&nbsp; - This plan will give you all the benefit of Premium plan but will give you to stream music up to 5 user at the same time.</p>
			  <form action="transactionpage.php" method="get">
				<button class="myButton" type="submit" name="plantype" value="fampremium" >Buy</button>
			  </form>
			 </div>
		  </div>
		  </div>
	    </div>
	  </div>
	</div>

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