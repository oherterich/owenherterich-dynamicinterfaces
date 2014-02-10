<!DOCTYPE html>
<html>
	<head>
		<title>HI, MY NAME IS OWEN!!!</title>

		<link rel="stylesheet" href="css/style.css">

		<script src="js/script.js"></script>
	</head>
	<body>
		<section id="content">
			<header>
				<h1>HI, MY NAME IS OWEN!!!</h1>
				<p><img src="img/me.gif"></p>
			</header>
			<article id="intro">
				<marquee direction="left">THANKS FOR STOPPING BY!</marquee>
				<p>CHECK OUT MY LINKS BELOW, SOME OF THEM ARE PRETTY INTERESTING HAHA</p>
				<p><img src="img/spinningearth.gif"></img></p>
			</article>
			<?php
				require("nav.html");
				require("hit-counter.php");
				$counter = get_hit_counter();
			?>
			<article id="hitcounter">
				<p> 
					<span id="num">
					<?php
						echo $counter;
					?>
					</span>
					VISITORS
				</p>
			</article>
			<?php
				require("footer.html");
			?>
		</section>
	</body>
</html>