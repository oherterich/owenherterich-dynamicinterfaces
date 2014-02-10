<?php
	if ( isset( $_POST['name'] ) && isset( $_POST['message'] ) ) {
		$name = $_POST['name'];
		$message = $_POST['message'];
		$date = date('d-m-Y H:i:s');

		$mysql = mysql_connect('127.0.0.1', 'root', 'root');
		
		mysql_select_db('ninetyeight', $mysql);

		//First, let's post the most recent post into our guestbook.
		$sql = "INSERT INTO Guestbook (name, message, date) VALUES ( '$name', '$message', '$date' )";
		$query = mysql_query($sql);


		//Next, let's get all of the past posts in the guestbook.
		$sql = "SELECT * FROM Guestbook";
		$query = mysql_query($sql);

		echo "<table>";
		while ( $data = mysql_fetch_assoc($query) ) {
			echo "<tr>";
			echo "<td>" . $data['name'] . "</td>";
			echo "<td>" . $data['message'] . "</td>";
			echo "<td>" . $data['date'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";

		//echo $message . " " . $name;
	}
?>