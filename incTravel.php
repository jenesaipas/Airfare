<!--Author:	 Susan Nagy
	Date:	 11/21/14
	File:	 incTravel.php
	Purpose: Chapter 13 Exercise


-->

<?php

		/* I set the class and variables, deleted the following functions that didn't pertain to the assignment: getHotelRate, getTicketCost, getHotelCost. The html file doesn't ask for the number of travelers, just the airfare cost and airline. Argument is destination in getAirfare. For each city, it returns the cost of airfare using else if going down the line. Each airline returns the string of airline name and it gets returned when called from the main php file. */
		class air {
			var $airline;
			var $airfare;



		function getAirfare($destination)
		{
			if ($destination == "Barcelona") {
				$airfare = 875.00;
			} else if ($destination == "Cairo") {
				$airfare = 950.00;
			} else if ($destination == "Rome") {
				$airfare = 875.00;
			} else if ($destination == "Santiago") {
				$airfare = 820.00;
			} else if ($destination == "Tokyo") {
				$airfare = 1375.00;
			}
			
			return round($airfare, 2);


		}

		function getAirline($destination)
		{
			if ($destination == "Barcelona") {
				$airline = "Web Airlines";
			} else if ($destination == "Cairo") { 
				$airline = "PHP Air";
			} else if ($destination == "Rome") {
				$airline = "Air Java";
			} else if ($destination == "Santiago") {
				$airline = "SQL Air";
			} else if ($destination == "Tokyo") {
				$airline = "Object-Oriented Airlines";
			}
			
			return $airline;
		}	
				


	}
?>
