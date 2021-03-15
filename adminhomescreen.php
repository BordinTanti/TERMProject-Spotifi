<?php
// Include config file
include("connection.php");

// Initialize the session
session_start();

$error = $finish = "";
	  
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$strSQL = "";

	if(!empty($_POST['queryselect'])){
		$strSQL = $_POST['queryselect'];
	}else if (!empty($_POST['queryinsert'])) {
		$strSQL = $_POST['queryinsert'];
	} else if (!empty($_POST['queryupdate'])) {
		$strSQL = $_POST['queryupdate'];
	} else if (!empty($_POST['querydelete'])) {
		$strSQL = $_POST['querydelete'];
	}
	
    if(mysqli_query($conn,$strSQL)) {
		$finish = "* Complete";
	} else {
		$error = "* Incomplete - Error - your SQL syntax";
	}
	mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Spotifi - adminhomescreen</title>
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
  </head>
  <body>
  
	<nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="adminhomescreen.php">Spotifi - Admin Editor</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
			  <li class="nav-item"><a href="#select" class="nav-link">Select</a></li>
	          <li class="nav-item"><a href="#insert" class="nav-link">Insert</a></li>
	          <li class="nav-item"><a href="#update" class="nav-link">Update</a></li>
	          <li class="nav-item"><a href="#delete" class="nav-link">Delete</a></li>
	          <li class="nav-item"><a href="index.php" class="nav-link">Log Out </a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
	
	<div class="hero-wrap js-fullheight" style="background: white;" data-stellar-background-ratio="0.5">
	  <div class="container" style="padding-top: 50px;height: auto;">	
		<form style="text-align: center" method="post">
		
		    <p style="text-align: left">Hi admin - <?php echo $_SESSION["name"]; ?>.</p>
			
			<p style="margin-top: 5px;color: red;text-align: left"> **SET STATUS USE CAPITALIZATION ON FIRST LETTER (Admin,User)</p>
			
		    <p style="margin-top: 5px;color: red;text-align: left"><?php echo $finish;?></p>
			<p style="margin-top: 5px;color: red;text-align: left"><?php echo $error;?></p>
			
		    <a name="select"></a>
			<p style="font-size: 32px;text-align: left;">Select :</p>
			<div style="text-align: left;">
				<label for="table">Choose Tables</label>
				<select name="type" id="table">
					<option value="nochoose">No Choose</option>
					<option value="user">User</option>
					<option value="song">totalsong</option>
					<option value="podcast">totalpodcsat</option>
					<option value="artist">Artist</option>
					<option value="creator">Creator</option>
					<option value="songgenra">SongGenra</option>
					<option value="podcastgenra">PodcsatGenra</option>
					<option value="sub">Subscription plan</option>	
					<option value="tran">Transaction</option>	
				</select>
			</div>
			<p style="text-align: left;"> Syntax = SELECT column1, column2, ... FROM table_name;</p>
			<textarea class="text" name="queryselect" style="width: 1000px;height: 100px;"></textarea><br><br>	
			<input type="submit" value="Submit">
			<p> </p>
			<?php include("selectAdmin.php");?>
			<p> </p>
		    
			<a name="insert"></a>
			<p style="font-size: 32px;text-align: left;">Insert :</p>  
			<p style="text-align: left;"> Syntax = INSERT INTO table_name (column1, column2, column3, ...) VALUES (value1, value2, value3, ...);</p>
			<textarea class="text" name="queryinsert" style="width: 1000px;height: 100px;"></textarea><br><br>	
			<input type="submit" value="Submit">
			<p> </p>
			
			<a name="update"></a>
			<p style="font-size: 32px;text-align: left;">Update :</p>  
			<p style="text-align: left;">Syntax = UPDATE table_name SET column1 = value1, column2 = value2, ... WHERE condition;</p>
			<textarea  class="text" name="queryupdate" style="width: 1000px;height: 100px;"></textarea><br><br>	
			<input type="submit" value="Submit">
			<p> </p> 
			
			<a name="delete"></a>
			<p style="font-size: 32px;text-align: left;">Delete :</p>  
			<p style="text-align: left;">Syntax = DELETE FROM table_name WHERE condition;</p>
			<textarea class="text" name="querydelete" style="width: 1000px;height: 100px;"></textarea><br><br>	
			<input type="submit" value="Submit">
			<p> </p>
			
			<br><br><br>
		</form>
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