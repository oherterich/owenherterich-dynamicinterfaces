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
				<h1>MY DIARY</h1>
			</header>
			<article id="diary">
				<p>
					<img src="img/construction-tape.gif">
					<img src="img/construction.gif">
					<img src="img/construction-tape.gif">
				</p>
			</article>

			<article id="guestbook-form">
				<form action="diary.php" method="post">
					Name: <input type="text" name="name"> <br/>
					Message: <textarea rows="4" cols="50" name="message"></textarea>
					<input type="submit">
				</form>
			</article>
			<article id="guestbook">
			<?php
				$mysql = mysql_connect('127.0.0.1', 'root', 'root');	
				mysql_select_db('ninetyeight', $mysql);
				
				if ( isset( $_POST['name'] ) && isset( $_POST['message'] ) ) {
					$name = $_POST['name'];
					$message = $_POST['message'];
					$date = date('d-m-Y H:i:s');

					//First, let's post the most recent post into our guestbook.
					$sql = "INSERT INTO Guestbook (name, message, date) VALUES ( '$name', '$message', '$date' )";
					$query = mysql_query($sql);
				}

				//Next, let's get all of the past posts in the guestbook.
				$sql = "SELECT * FROM Guestbook";
				$query = mysql_query($sql);

				while ( $data = mysql_fetch_assoc($query) ) {
					echo "<h2>" . $data['name'] . "</h2>";
					echo "<h3>" . $data['message'] . "</h3>";
					echo "<h4>" . $data['date'] . "</h4>";
				}

				require("nav.html");
				require("footer.html");
			?>
		</article>
		</section>
	</body>
</html>