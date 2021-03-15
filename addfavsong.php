<?php 
	// Initialize the session
	session_start();
	
	include("connection.php");
	
	error_reporting(0);
	
	$erroradd = "";
	$id = $_SESSION['id'];
	$artistid = $_GET['artistid'];
	$songid= $_GET['songid'];
	
	//check duplicate favsong
	$sql = "SELECT iduser, idartist, idsong FROM favsong WHERE iduser = '$id' AND idsong = '$songid'";
	$result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);  
    $count = mysqli_num_rows($result);
	
	if($count == 0){
		$sqlinsert = "INSERT INTO favsong (idartist,idsong,iduser) VALUES ('$artistid', '$songid', '$id')";
		mysqli_query($conn,$sqlinsert);
		header("location: userhomescreen.php");
	} else {
		$erroradd = "*This song already add to favorite";
		header("location: userhomescreen.php");
	}
?>