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

						echo "<h3>Thanks for signing up! We'll be in touch.</h3>";
					}
					else {
						?>
						<h2>BY SIGNING UP, YOU'LL BE THE FIRST TO KNOW <br/>WHEN OUR FIRST KITS ARE AVAILABLE. STAY TUNED!</h2>
					<form action="index.php#signup" method="post">
						<p><input name="first" type="text" placeholder="FIRST NAME:"></p>
						<p><input name="last" type="text" placeholder="LAST NAME:"></p>
						<p><input name="email" type="text" placeholder="EMAIL:"></p>
						<input type="submit" id="submit" value="REGISTER">
					</form>
				<?php
					}
				?>