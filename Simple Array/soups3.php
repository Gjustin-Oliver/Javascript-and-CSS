<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>No Soup for You!</title>
</head>
<body>
	<h1>Mmm.....soups</h1>
	<?php
	
	//Create the array:
	$soups = [
	'Monday' => 'Clam Chowder',
	'Tuesday' => 'White Chicken Chilli',
	'Wednesday' => 'Vegetarian',
	'Thursday' => 'Chicken noodle',
	'Friday' => 'Tomato',
	'Saturday' => 'Cream of Broccoli'
	];
	
	//Print each key and value
	foreach ($soups as $day => $soup) {
		print "<p>$day: $soup</p>\n";
	}
?>
</body>
</html>