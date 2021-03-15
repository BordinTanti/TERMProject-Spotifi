<?php 
	// Initialize the session
	session_start();
	
	include("connection.php");
	
	error_reporting(0);
	
	$erroradd = "";
	$id = $_SESSION['id'];
	$creatorid = $_GET['creatorid'];
	$podcastid= $_GET['podcastid'];
	
	//check duplicate favpodcast
	$sql = "SELECT iduser, idcreator, idpodcast FROM favpodcast WHERE iduser = '$id' AND idpodcast = '$podcastid'";
	$result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);  
    $count = mysqli_num_rows($result);
	
	if($count == 0){
		$sqlinsert = "INSERT INTO favpodcast (idcreator,idpodcast,iduser) VALUES ('$creatorid', '$podcastid', '$id')";
		mysqli_query($conn,$sqlinsert);
		header("location: podcastscreen.php");
	} else {
		$erroradd = "*This song already add to favorite";
		header("location: podcastscreen.php");
	}
?>