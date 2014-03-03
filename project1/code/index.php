<!doctype html>
<html>
	<head>
		<title>Pair</title>

		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/tablet.css">
		<link rel="stylesheet" type="text/css" href="css/mobile.css">
		<link rel="icon" type="image/png" href="img/icon.png">
		<!-- META TAG THAT MAKES IT RESPONSIVE -->
        <meta name="viewport" content="width=device-width">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/JavaScript" src="js/jquery.scroll_to.js"></script>
  		<script type="text/JavaScript" src="js/jquery.snapscroll.min.js"></script>
  		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-45399441-4', 'getpaired.io');
		  ga('send', 'pageview');

		</script>
    	<script>
    	$(function() {
    		if (window.innerWidth > 568) {
			  $("#content").snapscroll();
			}
		});
    	</script>
	</head>
	<body>
		<div id="content">
			<section id="introduction" class="slide">
				<img src="img/pair_animated.gif">
				<h3>A REVOLUTIONARY NEW WAY <br/> TO FIND YOUR BETTER HALF.</h3>
			</section>
			<section id="video" class="slide">
				<h2>TAKE A LOOK INSIDE AND SEE HOW PAIR HELPS YOU DISCOVER YOUR SOULMATE.</h2>
				<article>
					<!--<iframe src="http://player.vimeo.com/video/69070659" width="850" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
					<img src="img/playbutton.png">
				</article>
			</section>
			<section id="steps" class="slide">
				<h2>GET STARTED IN THREE EASY STEPS.</h2>
				<div id="step-container">
					<article>
						<img src="img/collect.png">
						<h3>COLLECT</h3>
						<p>Collect a small sample of saliva and send it to our experts for analysis.</p>
					</article>
					<article>
						<img src="img/analyze.png">
						<h3>ANALYZE</h3>
						<p>Our state-of-the-art equipment will analyze your chromosomes and prepare the results.</p>
					</article>
					<article>
						<img src="img/connect.png">
						<h3>MATCH</h3>
						<p>Complex mapping algorithms will interpret your data and find the perfect match.</p>
					</article>
				</div>
			</section>
			<section id="signup" class="slide">
				<a name="signup"></a>

				<?php 
					require_once("signup.php");
					require_once("nav.html");
					require_once("footer.html");
				?>
			</section>
		</div>
	</body>
</html>