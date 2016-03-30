<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>SeeScotland</title>
	<link href="public/grid.css" type="text/css" rel="stylesheet"/>
	<link href="public/style.css" type="text/css" rel="stylesheet"/>
	<link href='http://fonts.googleapis.com/css?family=Old+Standard+TT%7COpen+Sans' rel='stylesheet' type='text/css' />
	
	<style type="text/css">
	#attr_nav {
		border-bottom: 3px solid #760000;
	}
	</style>
</head>

<body>
	<?php
		error_reporting(0);
		$con = mysql_connect("hawk.csd.abdn.ac.uk","wtstudent","DyNEDurA");
		mysql_select_db("webtech", $con);
		$result = mysql_query("SELECT * FROM attractions");
	?>
	<div  class="container_12">
		<?php include("header.php"); ?>
		<h1>Attractions</h1>
		<ul>
		<?php
			while($row = mysql_fetch_array($result))
			{
				echo "<li><h2>".$row['name']."</h2><br/><img class='attr_image' alt='attractions image' src='". $row['imageURL']."'/><p><u>Proprietor:</u> ".$row['proprietor']."</p><p><u>Entry fee:</u> ".$row['entry']."</p>";
				echo $row['description']."</li>";
			}
		?>
		</ul>
	</div>
	
	<?php
		mysql_close($con);
	?> 
	
	<div class="container_12">
		<?php include 'footer.php' ?>
	</div>
</body>

</html>