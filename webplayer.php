<?php
 $songembed = $_GET['songembed'];
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Spotifi - webplayer</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
			<link rel="icon" href="images\icon.png">
				<style>
				.centered-thing {
					position: absolute;
					margin: auto;
					top: 50%;
					left: 50%;
					transform: translate(-50%, -50%);
				}
				</style>
	</head>
	<body style="background: black;">
		<div style="text-align: right;margin-top: 20px;margin-right: 20px"><a href="userhomescreen.php"><img style="hight:45px;width:45px;" src="images\xicon.png"/></a></div>
		<div class="centered-thing">
			<iframe width="1600" height="900" src= "<?php echo $songembed; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</body>
</html>