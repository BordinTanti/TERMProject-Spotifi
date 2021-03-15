<?php
	include("connection.php");

	$errorselect = "";
	$favsong = $_GET['favsong'];
	
	$id = $_SESSION['id'];

	error_reporting(0);
	
	$sql = "select t.songname, a.artistname, t.songembed, t.idsong, a.idartist from totalsong as t inner join artist as a on t.idartist = a.idartist";
	
	if($_SERVER["REQUEST_METHOD"] == "GET") {
		if($favsong == "fav_song") {
			$sql = "select t.songname, a.artistname, t.songembed, t.idsong, a.idartist from totalsong as t inner join artist as a on t.idartist = a.idartist inner join favsong as f on f.idsong = t.idsong where f.iduser = '$id'";
		}
	} else if(!empty($_POST['textSearch'])){
	    $text = $_POST['textSearch'];
	    $sql = "select t.songname, a.artistname, t.songembed, t.idsong, a.idartist from totalsong as t inner join artist as a on t.idartist = a.idartist where songname = '$text' or artistname = '$text'";
	} else {
		$sql = "select t.songname, a.artistname, t.songembed, t.idsong, a.idartist from totalsong as t inner join artist as a on t.idartist = a.idartist";
	}
	
	$result = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($result);

	if ($count > 0) {
		// output data of each row
		echo '<table align="center"><tr><td>Song :  </td><td>Artist :  </td><tr>';
		while($row = $result->fetch_array()) {
			echo '<tr><td>'. $row[0] . ' </td> ' .
				 '<td> '. $row[1] . ' </td>  ' .
				 '<td><a href=webplayer.php?songembed='.$row[2].'><button class="button" style="vertical-align:middle"><span>Play </span></button></a> ' . ' </td> ' .
				 '<td><a href=addfavsong.php?songid='.$row[3].'&artistid='.$row[4].'><button class="button" style="vertical-align: middle;hight: 20px;width: 230px;"><span>Add to favorite </span></button></a> ' . ' </td></tr> ' ;	
		}
		echo '</table>';
	} else {
		$errorselect = "Not Found";
	}
	mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
  <style>
    table, th, td {
		border: 1px #17a2b8;
		table-layout: auto;
        width: 80%;
		font-size: 24px;
		color: white;
    }
	.button {
	    border-radius: 15px;
		background-color: #17a2b8;
		border: none;
		color: #FFFFFF;
		text-align: center;
		font-size: 20px;
		padding: 20px;
		hight: 20px;
		width: 100px;
		transition: all 0.5s;
		cursor: pointer;
		margin: 5px;
	}

	.button span {
		cursor: pointer;
		display: inline-block;
		position: relative;
		transition: 0.5s;
	}

	.button span:after {
		content: '\00bb';
		position: absolute;
		opacity: 0;
		top: 0;
		right: -20px;
		transition: 0.5s;
	}

	.button:hover span {
		padding-right: 25px;
	}

	.button:hover span:after {
		opacity: 1;
		right: 0;
	}
  </style>
</html>
