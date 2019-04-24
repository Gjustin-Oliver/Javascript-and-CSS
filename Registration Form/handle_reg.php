<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<style type="text/css" media="screen">.error {
	color: red; }
</style>
</head>
<body>
	<h1>Registration Results</h1>
	<?php

	//Flag var to track success:
	$okay = true;

	//Validate the email address:
	if (empty($_POST['email'])) {
		print '<p class="error">Please enter your email address.</p>';
		$okay = false;
	}

	//Validate the passord:
	if (empty($_POST['password'])) {
		print '<p class="error">Please enter your password.</p>';
		$okay = false;
		# code...
	}

	//Validate the year:

	if (is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4) ){

		# code...

	//Check that they were born before 2016:
	if ($_POST['year'] < 2016) {
		$age = 2016 - $_POST['year'];
		# code...
	}
	//Calculate age this year:
	else {
		print '<p class= "error">Either you entered your birth year wrong or you come from
		the <em>future!</em></p>';
		$okay = false;
	}
	} else {
		print '<p class="error">Please enter the year you were born as four digits.</p>';
		$okay = false;
	}
	//Validate the terms:
	if ( !isset($_POST['terms'])) {
		print '<p class="error">You must accept the terms.</p>';
		$okay = false;
	}

	//Validate the colors:
	// if ($_POST['color'] == 'red') {
	// 	$color_type = 'primary';
	// } elseif ($_POST['color'] == 'yellow') {
	// $color_type = 'primary';
	// } elseif ($_POST['color'] == 'green') {
	// 	$color_type = 'secondary';
	// } elseif ($_POST['color'] == 'blue') {
	// 	$color_type = 'primary';
	// } else {
	// 	print '<p class="error">Please select your favorite color.</p>';
	// 	$okay = false;
	// }

	switch ($_POST['color']) {
		case 'red':
		$color_type = 'primary';
			break;
		case 'yellow':
		$color_type = 'primary';
			break;
		case 'green':
		$color_type = 'secondary';
			break;
		case 'blue':
		$color_type = 'primary';
			break;
		default:
		print '<p class="error">Please select your favorite color.</p>';
		$okay = false;
			break;
	}
	
	//Print success message:
	if ($okay) {
		print '<p>You have been successfully Registered (but not really).</p>';
		print "<p>You wil turn $age this year.</p>";
		print "<p>Your favorite color is a $color_type color.</p>";
	}
	?>
</body>
</html>