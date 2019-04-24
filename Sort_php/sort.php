<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My Little Gradebook</title>
</head>
<body>
	<?php

		//Array:
	$grades = [
		'Ricard' => 95,
		'Sherwood' => 82,
		'Toni' => 98,
		'Franz' => 87,
		'Melissa' => 75,
		'Roddy' => 85
	];

	//OG array:
	print '<p>Originally the array looks like this: <br>';
	foreach ($grades as $student => $grade) {
		print "$student: $grade<br>\n";
	}
	print '</p>';

	//Sorted by value
	arsort($grades);
	print '<p>After sorting the array by value using arsort(), the array looks like this: <br>';
	foreach ($grades as $student => $grade) {
		print "$student: $grade<br>\n";
	}
	print '</p>';

	//Sorted by $key aka $student:
	ksort($grades);
	print '<p>After sorting the array by key using ksort(), the array looks like this: <br>';
	foreach ($grades as $student => $grade) {
		print "$student: $grade<br>\n";
	}
	print '</p>';


	?>
</body>
</html>