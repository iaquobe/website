<!DOCTYPE html>
<?php 
readfile("./header.html");
?>

<div id="content">
	<h3 style="padding-top: 5%">$cat README.md</h3>
	<img src="gif/banner/shika.gif" class="banner">
	<p>
		here's whats on this site:<br>
		My linux <a href="linux.php">.files</a><br>
		Some <a href="projects.php">projects</a> I made/make<br>
		<!--  <a href="gallery.php">gallery</a><br>-->
	</p>

	<span class=bottom-banner>
		<img class=bottom-banner-left src=./gif/random/statue4.gif style="width:10%;">
		<h3 class=bottom-banner-mid>EOF</h3>
		<img class=bottom-banner-right src=./gif/random/statue4.gif style="width:10%;">
	</span>
</div>
<?php 
	readfile("./footer.html");
?>
