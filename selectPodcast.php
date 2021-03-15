<?php
	include("connection.php");

	$errorselect = "";
	$favpodcast = $_GET['favpodcast'];
	
	$id = $_SESSION['id'];

	error_reporting(0);
	
	$sql = "select t.podcastname, c.creatorname, t.idpodcast, c.idcreator from totalpodcast as t inner join creator as c on t.idcreator = c.idcreator";
	
	if($_SERVER["REQUEST_METHOD"] == "GET") {
		if($favpodcast == "fav_podcast") {
			$sql = "select t.podcastname, c.creatorname, t.idpodcast, c.idcreator from totalpodcast as t inner join creator as c on t.idcreator = c.idcreator inner join favpodcast as f on f.idpodcast = t.idpodcast where f.iduser = '$id'";
		}
	} else if(!empty($_POST['textSearch'])){
	    $text = $_POST['textSearch'];
	    $sql = "select t.podcastname, c.creatorname, t.idpodcast, c.idcreator from totalpodcast as t inner join creator as c on t.idcreator = c.idcreator where podcastname = '$text' or creatorname = '$text'";
	} else {
		$sql = "select t.podcastname, c.creatorname, t.idpodcast, c.idcreator from totalpodcast as t inner join creator as c on t.idcreator = c.idcreator";
	}
	
	$result = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($result);

	if ($count > 0) {
		// output data of each row
		echo '<table align="center"><tr><td>Podcast :  </td><td>Creator :  </td><tr>';
		while($row = $result->fetch_array()) {
			echo '<tr><td>'. $row[0] . ' </td> ' .
				 '<td> '. $row[1] . ' </td>  ' .
				 '<td><a><button class="button" style="vertical-align:middle"><span>Play </span></button></a> ' . ' </td> ' .
				 '<td><a href=addfavpodcast.php?podcastid='.$row[2].'&creatorid='.$row[3].'><button class="button" style="vertical-align: middle;hight: 20px;width: 230px;"><span>Add to favorite </span></button></a> ' . ' </td></tr> ' ;	
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
