<html>
<head>
<title>Boodschappenlijst</title>
</head>
<body>
<h1>Boodschappenlijst Erik & Rianne</h1>

<form action="connect_insert.php" method="post">
		Weeknummer: <input type="text" id="Weeknummer" name="Weeknummer" />
		Boodschappen te halen: <input type="text" id="inhoud" name="inhoud" />
		<input type="submit">
</form>
<h1>Database deletion</h1>
<form action="del_row.php" method="post">
	Voer weeknummer in die verwijderd mag worden <input type="text" id="del_row" name="del_row">
	<input type="submit">
</form>
		
<?php
	function database_viewer($statement,$db){
		echo "Database connection section: <br>";
		$conn = new mysqli("localhost","root","",$db);

		if ($conn->connect_error){
			die("Connection failed: " . $conn->connect_error);
		}
		$sql=$statement;
		$result = $conn->query($sql);
		if ($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				
				echo "week ".$row['Weeknummer']." - ".$row['inhoud']."<br>";
			}
		}	
		else {
			echo "0 results";
		}
		$conn->close();
	}
	
	database_viewer("SELECT * from lijsten", "boodschappenlijst");
?>
</body>
</html>