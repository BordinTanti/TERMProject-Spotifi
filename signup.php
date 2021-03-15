<?php
// Include config file
include("connection.php");

$Passerror = "";
	  
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    $myusername = mysqli_real_escape_string($conn,$_POST['userid']);
    $mypassword = mysqli_real_escape_string($conn,$_POST['password1']);
	$myemail = mysqli_real_escape_string($conn,$_POST['email']);
	
    $password1 = $_POST['password1']; 
    $password2 = $_POST['password2']; 
	
	//check duplicate name
	$sqlName = "SELECT name FROM user WHERE name = '$myusername'";
	$resultName = mysqli_query($conn,$sqlName);
    $rowName = mysqli_fetch_array($resultName);  
    $countName = mysqli_num_rows($resultName);
	
	//check duplicate email
	$sqlEmail = "SELECT email FROM user WHERE email = '$myemail'";
	$resultEmail = mysqli_query($conn,$sqlEmail);
    $rowEmail = mysqli_fetch_array($resultEmail);  
    $countEmail = mysqli_num_rows($resultEmail);

    if($password1 != $password2) {
		$Passerror = "* Password didn't match";
    } else if($countName > 0) {
		$Passerror = "* This ID already exist";
	} else if($countEmail > 0){
		$Passerror = "* This Email already exist";
 	} else {
		$sql = "INSERT INTO user(Name,Email,Password) VALUES ('$myusername','$myemail','$mypassword')";
        if(mysqli_query($conn,$sql)){ 
		    header("location: login.php");
	    }
	}
	mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Spotifi - signup</title>
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
        body {
            margin: 0;
            padding: 0;
        }
        body:before {
            content: '';
            position: fixed;
            width: 100vw;
            height: 100vh;
            background-image: url("images/wallpaper.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            -webkit-filter: blur(10px);
            -moz-filter: blur(10px);
            -o-filter: blur(10px);
            -ms-filter: blur(10px);
            filter: blur(10px);
        }
        .contact-form {
		    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400px;
            height: 550px;
            padding: 30px 40px;
            box-sizing: border-box;
			border-radius: 20px;
            background: rgba(26,82,118,.5);
        }
        .avatar {
            position: absolute;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            top: calc(-80px/2);
            left: calc(50% - 40px);
        }
        .contact-form h2 {
            margin: 0;
            padding: 0 0 20px;
            color: #fff;
            text-align: center;
            text-transform: uppercase;
        }
        .contact-form p {
            margin: 0;
            padding: 0;
            color: #fff;
        }
        .contact-form input {
            width: 100%;
            margin-bottom: 20px;
        }
        .contact-form input[type="text"],
        .contact-form input[type="password"] {
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
			margin-bottom: 5px;
        }
        .contact-form input[type="submit"] {
            height: 50px;
			width: 150px;
            color: #fff;
            font-size: 15px;
            background: rgba(26,82,118,.5);
            cursor: pointer;
            border-radius: 25px;
            border: none;
            outline: none;
			font-weight: bold;
			margin-top: 20px;
        }
        .contact-form a {
            color: #fff;
            font-size: 12px;
            text-decoration: none;
			text-align: right;
        }
        input[type="checkbox"] {
		    margin-top: 15px;
			margin-right: 7px;
			height: 13px;
            width: 13px;
        }
		.navbar-brand a {
			color: white;
			display: inline-block;
			padding-left: 470px;
			padding-top: 60px;
			padding-bottom: 0.3125rem;
			margin-right: 1rem;
			font-size: 70px;
			line-height: inherit;
			white-space: nowrap; 
		}
    </style>
	
  </head>
  <body>
    
	  <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	       <div class="navbar-brand"> 
	        <a href="index.php">Spotifi</a>
		  </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
	<div class="container" style="padding-top: 470px;">
	 <div class="ftco-animate col-auto">
      <div class="contact-form">
        <h2><b>Sign Up</b></h2>
        <form action="" method="post">
            <p>ID</p>
            <input type="text" name="userid" placeholder="Enter your Id" required>
			<p>Email</p>
            <input type="text" name="email" placeholder="Enter your Email" required>
            <p>Password</p>
            <input type="password" name="password1" placeholder="Enter your Password" required>
			<p>Confirm Password</p>
            <input type="password" name="password2" placeholder="Confirm your Password" required>
			<div style="text-align: center;">
			 <p style="margin-top: 5px;color: red;"><?php echo $Passerror;?></p>
             <input type="submit" value="Sign Up"> 
			 <p>Already have account? <a href="login.php" style="color: blue;font-size: 16px;"> Login here</a></p>
		    </div>
        </form>
      </div>
	 </div>
	</div>

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