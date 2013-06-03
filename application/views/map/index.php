<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<base href="<?php echo base_url();?>" />
		<title>My first Google Map</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link type="text/css" href="css/map_style.css" rel="stylesheet" media="all"/>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=en"></script>
		<script type="text/javascript" src="js/map.js"></script>
	</head>
<body>
	<h1>My first map</h1>
	<form id="addressForm">
		<div>
			<label for="address">Address:</label>
			<input type="text" name="address" id="address"/>
			<input type="submit" name="addressButton" id="addressButton" value="Get Corordinates"/>
		</div>
	</form>
	<div id="map"></div>
</body>
</html>
