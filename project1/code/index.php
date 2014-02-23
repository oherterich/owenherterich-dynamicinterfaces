<!doctype html>
<html>
	<head>
		<title>Pair</title>

		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="icon" type="image/png" href="img/icon.png">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/JavaScript" src="js/jquery.scroll_to.js"></script>
  		<script type="text/JavaScript" src="js/jquery.snapscroll.min.js"></script>
    	<script>
    	$(function() {
			  $("#content").snapscroll();
			});
    	</script>
	</head>
	<body>
		<div id="content">
			<section id="introduction" class="slide">
				<img src="img/pair.png">
				<h3>a revolutionary new way to find your better half.</h3>
			</section>
			<section id="video" class="slide">
				<article>
					<iframe src="http://player.vimeo.com/video/69070659" width="850" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</article>
			</section>
			<section id="steps" class="slide">
				<div id="step-container">
					<article>
						<img src="img/collect.png">
						<h3>Collect</h3>
						<p>Collect a small sample of saliva and send it to our experts for analysis.</p>
					</article>
					<article>
						<img src="img/analyze.png">
						<h3>Analyze</h3>
						<p>Our state-of-the-art equipment will analyze your chromosomes and prepare the results in minutes.</p>
					</article>
					<article>
						<img src="img/connect.png">
						<h3>Match</h3>
						<p>Complex mapping algorithms will interpret your data and find the perfect match.</p>
					</article>
				</div>
			</section>
			<section id="signup" class="slide">
				<a name="signup"></a>


				<?php
					//Initialize variables
					if (isset($_POST['first'])) {
						$firstname = $_POST['first'];

						if ($firstname == "") {
							echo "<p>Please enter your first name.</p>";
						}
					}

					if (isset($_POST['last'])) {
						$lastname = $_POST['last'];

						if ($lastname == "") {
							echo "<p>Please enter your last name.</p>";
						}
					}

					if (isset($_POST['email'])) {
						$email = $_POST['email'];

						if ($email == "") {
							echo "<p>Please enter your email.</p>";
						}
					}

					$userid = uniqid();

					//Connect to MySQL
					if ($firstname && $lastname && $email) {
						$mysql = mysql_connect('127.0.0.1', 'root', 'root');
						mysql_select_db('Pair', $mysql);

						$sql = "INSERT INTO info (userid, firstname, lastname, email) VALUES ('$userid', '$firstname', '$lastname', '$email')";
						mysql_query($sql);

						//Send confirmation email
						$subject = 'Welcome to Pair!';
						$message = '<h3>Thanks for taking part!</h3>';
						$message .= '<p>Get ready to experience a revolutionary new way to find your better half. By signing up, you will be the first to know when our first kits are available. Stay tuned!</p>';
						$message .= "<p><3 Pair</p>";
						$headers = "MIME-Version: 1.0\r\n";
						$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
						mail($email, $subject, $message, $headers);

						echo "<h3>Thanks for signing up! We'll be in touch.</p>";
					}
					else {
						?>
						<h3>Sign up to be the first to find your Pair</h3>
					<form action="index.php#signup" method="post">
						First Name: <input name="first" type="text">
						Last Name: <input name="last" type="text">
						Email: <input name="email" type="text">
						<input type="submit">
					</form>
				<?php
					}
				?>
			</section>
		</div>
	</body>
</html>