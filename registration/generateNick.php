<?php 
// <Ляна>
	$foodAdjectives = array("Warm", "Bitter", "Disgusting",
		"Awesome", "Bittersweet", "Frosty", "Grilled",
		"Scrambled", "Sweet");

	$foodNames = array ("Pasta", "Fries", "Ice Cream" ,
		"Bread", "Rice", "Pancakes", "Burger", "Pizza",
		"Pumpkin", "Pie", "Chicken", "Banana", "Apple", 
		"Bagel", "Muffins", "Sauce", "Peanut", "Cake",
		"Cheesecake", "Cheese",  "Bread");

	$todayDate = getdate();
	$nick = $foodAdjectives[rand(0, count($foodAdjectives))] . $foodNames[rand(0, count($foodNames))] . $todayDate['seconds'];
	echo $nick;
// </Ляна>
?>