<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Your Feedback</title>
</head>
<body>
	<!-- it will receive title,name email response,comments,and submit -->
	<?php

	$title = $_POST['title'];
	$name = $_POST['name'];
	$response = $_POST['response'];
	$comments = $_POST['comments'];

	print "<p>Thank you, $title, $name, for your comments.</p> <p>You
		stated that you found this example to be '$response' and added:<br>$comments</p>";
		
		?>

</body>
</html>