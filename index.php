<!DOCTYPE html>
<html lang="en-us">
	<head>
		<title>Neue-American Cuisine Specializr</title>
	</head>
	<body>
		<p><strong>Update 3/14/16:</strong> The restaurant that I was using as a punching bag for this joke <a href="http://www.post-gazette.com/business/career-workplace/2016/03/12/North-Shores-bZ-Craft-Bar-Twisted-Eatery-sudden-closing-protested-Workers-say-they-are-owed-pay/stories/201603120012">closed unexpectedly</a>. The owners owe their former employees something to the tune of $44,000. Thankfully, the glory of the lunch menu will live on forever through this webpage.</a></p>
		<p>On special today at your new local bar and grille serving "twisted" American classics and craft cocktails:</p>
		<h1><?php
			$adjective = array(
				"Hawaiian",
				"Lemongrass",
				"Spanish",
				"Greek",
				"Traditional",
				"Local",
				"Hungarian",
				"Italian",
				"Thai",
				"Foraged",
				"Pan-Asian",
				"Latin Fusion style",
				"Our Famous",
				"Pittsburgh style",
				"Lebanese",
				"Tangy",
				"Low Country",
				"Louisiana style",
				"Belgian",
				"Kurdish",
				"Alaskan",
				"Chilean",
				"Texas style",
				"Heirloom",
				"Artisinal",
				"Tony's",
				"Home-style",
				"Strip District style",
				"Nouevau",
				"Country-style",
				"Border Town",
				"",
				"",
				"",
				"",
				"",
				""
				);
			$cooking_method = array(
				"Braised",
				"Roasted",
				"Fried",
				"Smoked",
				"Broiled",
				"Dry-rubbed",
				"Candied",
				"Carmelized",
				"Char-broiled",
				"Air-cured",
				"Sous-vide",
				"Blanched",
				"Barbecued",
				"Baked",
				"Blackened",
				"Seared",
				"Pan-seared",
				"Infused",
				"Beer-battered",
				"Boiled",
				"Gently Fried",
				"Juiced",
				"Marinated",
				"Jellied",
				"Pan-fried",
				"Pickled",
				"Rendered",
				"Seared",
				"Cured",
				"Stewed",
				"3D-Printed",
				"Tenderized",
				"Buffalo",
				"Chicken Fried",
				"Simmered",
				"Raw",
				"Frosted",
				"Glazed",
				"Applewood Smoked"
				);
			$main_ingredient = array(
				"Duck",
				"Beef",
				"Pork",
				"Pork Flank",
				"Pork Cheek",
				"Flank Steak",
				"Lobster",
				"Clam",
				"Shrimp",
				"Veal",
				"Chicken Breast",
				"Venison",
				"Ostrich",
				"Shank",
				"Sweetbreads",
				"Bear Tenderloin",
				"Spare Rib",
				"Oyster",
				"Tortilla",
				"Tripe",
				"Tofu",
				"Seitan",
				"Mutton",
				"Bacon"
				);
			$dish_type = array(
				"Soup",
				"Coq-au-vin",
				"Tacos",
				"Sandwich",
				"Frankfurters",
				"Wrap",
				"Gazpacho",
				"Carpaccio",
				"Bisque",
				"Burrito",
				"Porridge",
				"Wings",
				"Enchiladas",
				"Burger",
				"Pot Stickers",
				"Halushki",
				"Pieroghis",
				"Flatbread",
				"Pizza",
				"Wingdings",
				"Po-boy",
				"Poppers",
				"Sliders",
				"Mini-burgers",
				"Rings",
				"Salad",
				"Confit",
				"Chowder",
				"BLT"
				);

			$rand_adjective = array_rand($adjective, 1);
			$rand_cooking_method = array_rand($cooking_method, 1);
			$rand_main_ingredient = array_rand($main_ingredient, 1);
			$rand_dish_type = array_rand($dish_type, 1);

			echo $adjective[$rand_adjective] . " ";
			echo $cooking_method[$rand_cooking_method] . " ";
			echo $main_ingredient[$rand_main_ingredient] . " ";
			echo $dish_type[$rand_dish_type];
		?>, Fries, and Soft Drink: $<?php echo rand(10,19); ?></h1>
		<button onclick="window.location.reload();">See Tomorrow's Special</button>
	</body>
</html>
