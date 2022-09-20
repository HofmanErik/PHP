<?php
	$Weeknummer = $_POST['Weeknummer'];
	$inhoud = $_POST['inhoud'];
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "boodschappenlijst";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}else {
		$stmt = $conn->prepare("insert into lijsten(Weeknummer, inhoud) values(?,?)");
		$stmt->bind_param("sss", $Weeknummer, $inhoud);
		$stmt->execute();
		echo "Boodschappen succesvol toegevoegd...";
		$stmt->close();
		$conn->close();
	}
	$conn->close();
?>