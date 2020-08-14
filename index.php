<!DOCTYPE html>
<?php 
echo "test"
?>

<div id="content">
	<h3 style="padding-top: 5%">$cat README.md</h3>
	<img src="gif/banner/miami-ride.gif" alt="retro ride" class="banner">
	<p>
	hey I'm glad you made it to this corner of the web;<br> 
	This is my website I'll be using it to showcase some projects and write about <em>linux</em>;<br>
	Additionally I'll maybe post some <strong>bullshit</strong> I find on the Internet;
	</p>
	<p>
	I also have all my social media links at the <u>bottom</u>;<br>
	Just click the flashing gifs in the footer;
	</p>
	<h3>$whoami</h3>
	<p>
	I'm a CS student at <u>TUM</u> living in Munich;<br>
	Before that I lived in Jena and before that I lived in Canada;<br>
	I spend most of my time doing nothing and the slither thats left I spend in the <em>terminal</em>;<br>
	</p>

	<h3>$neofetch</h3>
	<p style="text-align: center">
	<img src="gif/linux/arch.gif" alt="I use arch btw">
	</p>
</div>
<?php 
	readfile("./footer.html");
?>
