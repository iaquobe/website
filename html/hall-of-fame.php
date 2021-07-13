<!DOCTYPE html>
<?php 
readfile("./header.html");
?>

<div id="content">
	<h3 style="padding-top: 5%">$cat hall-of-fame.txt</h3>
	<img src="gif/banner/phantom-hourglass.gif" alt="phantom hourglass" class="banner">

	<p>
	Here are a couple of games that I absolutly recomend to anyone;
	<div class=hall-of-fame>
		<img class=hall-of-fame-game src="./pictures/games/hollow-knight.png" alt="hollow knight">
		<img class=hall-of-fame-game src="./pictures/games/fallout-new-vegas.jpg" alt="fallout new vegas">
		<img class=hall-of-fame-game src="./pictures/games/breath-of-the-wild.jpg" alt="breath of the wild">
	</div>
	</p>
	<span class=bottom-banner>
		<img class=bottom-banner-left src=./gif/random/skeleton-animated.gif style="width:10%;">
		<h3 class=bottom-banner-mid>EOF</h3>
		<img class=bottom-banner-right src=./gif/random/skeleton-animated.gif style="width:10%;">
	</span>
</div>
<?php 
	readfile("./footer.html");
?>
