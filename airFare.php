<!DOCTYPE html>
<!--Author:	 Susan Nagy
	Date:	 11/21/14
	File:	 airFare.php
	Purpose: Chapter 13 Exercise


-->


<html>
<head>
	<title>AIR FARE</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>

	<h1>AIR FARE CALCULATOR</h1>

	<?php

		$destination = $_POST['destination'];
 		/* Included the file with php functions. Class gets a new variable name $air_class to call  objects from that are used when you call the function from the incTravel.php file instead of just calling the variable alone. */
		include("incTravel.php");

		$air_class = new air();

		print("<p>Destination: $destination<br>");
		print("The air fare is $".number_format($air_class->getAirfare($destination), 2)." on ".$air_class->getAirline($destination)."</p>");
	?>

</body>
</html>