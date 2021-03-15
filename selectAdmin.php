<?php
	include("connection.php");
	
	error_reporting(0);
	
	$sql = $_POST['queryselect'];
	$type = $_POST['type'];

	$result = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($result);

	if ($count > 0) {
		// output data of each row
		if($type == "user"){
			echo '<table align="center"><tr><td>IDUser:  </td><td>Name:  </td><td>Email:  </td><td>Password:  </td><td>Level:  </td><td>Picture:  </td><td>IDSub:  </td><tr>';
			while($row = $result->fetch_array()) {
				echo '<tr><td>'. $row[0]. ' </td> ' .
					'<td> '. $row[1]. ' </td>  ' .
					'<td> '. $row[2]. ' </td> ' .
					'<td> '. $row[3]. ' </td> ' .
					'<td> '. $row[4]. ' </td> ' .
					'<td> '. $row[5]. ' </td> ' .	
					'<td> '. $row[6]. ' </td></tr> ' ;
			}
			echo '</table>';
		} else if($type == "song"){
			echo '<table align="center"><tr><td>IDSong:  </td><td>SongName:  </td><td>SongEmbed:  </td><td>IDArtist:  </td><td>IDGenra:  </td><tr>';
			while($row = $result->fetch_array()) {
				echo '<tr><td>'. $row[0]. ' </td> ' .
					'<td> '. $row[1]. ' </td>  ' .
					'<td> '. $row[2]. ' </td> ' .
					'<td> '. $row[3]. ' </td> ' .
					'<td> '. $row[4]. ' </td></tr> ' ;
			}
			echo '</table>';
		} else if($type == "podcast"){
			echo '<table align="center"><tr><td>IDPodcast:  </td><td>PodcastName:  </td><td>IDCreator:  </td><td>IDPodcastGenra:  </td><tr>';
			while($row = $result->fetch_array()) {
				echo '<tr><td>'. $row[0]. ' </td> ' .
					'<td> '. $row[1]. ' </td>  ' .
					'<td> '. $row[2]. ' </td> ' .
					'<td> '. $row[3]. ' </td></tr> ' ;
			}
			echo '</table>';
		} else if($type == "artist"){
			echo '<table align="center"><tr><td>IDArtist:  </td><td>ArtistName:  </td><tr>';
			while($row = $result->fetch_array()) {
				echo '<tr><td>'. $row[0]. ' </td> ' .
					'<td> '. $row[1]. ' </td></tr> '  ;
			}
			echo '</table>';
		} else if($type == "creator"){
			echo '<table align="center"><tr><td>IDCreator:  </td><td>CreatorName:  </td><tr>';
			while($row = $result->fetch_array()) {
				echo '<tr><td>'. $row[0]. ' </td> ' .
					'<td> '. $row[1]. ' </td></tr> '  ;
			}
			echo '</table>';
		} else if($type == "songgenra"){
			echo '<table align="center"><tr><td>IDSongGenra:  </td><td>Genra:  </td><tr>';
			while($row = $result->fetch_array()) {
				echo '<tr><td>'. $row[0]. ' </td> ' .
					'<td> '. $row[1]. ' </td></tr> ' ;
			}
			echo '</table>';
		} else if($type == "podcastgenra"){
			echo '<table align="center"><tr><td>IDPodcastGenra:  </td><td>Genra:  </td><tr>';
			while($row = $result->fetch_array()) {
				echo '<tr><td>'. $row[0]. ' </td> ' .
					'<td> '. $row[1]. ' </td></tr> ' ;
			}
			echo '</table>';
		} else if($type == "sub"){
			echo '<table align="center"><tr><td>IDSub:  </td><td>SubName:  </td><td>Price:  </td><tr>';
			while($row = $result->fetch_array()) {
				echo '<tr><td>'. $row[0]. ' </td> ' .
					'<td> '. $row[1]. ' </td>  ' .
					'<td> '. $row[2]. ' </td></tr> ' ;
			}
			echo '</table>';
		} else if($type == "tran"){
			echo '<table align="center"><tr><td>IDTransaction:  </td><td>Card_Num:  </td><td>Email:  </td><td>IDUser:  </td><td>IDSub:  </td><tr>';
			while($row = $result->fetch_array()) {
				echo '<tr><td>'. $row[0]. ' </td> ' .
					'<td> '. $row[1]. ' </td>  ' .
					'<td> '. $row[2]. ' </td> ' .
					'<td> '. $row[3]. ' </td> ' .
					'<td> '. $row[4]. ' </td></tr> ' ;
			}
			echo '</table>';
		} else {
			//echo "0 results";
		}
	}
	mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

  <style>
    table, th, td {
		border: 1px solid black;
    }
  </style>
  
</html>



