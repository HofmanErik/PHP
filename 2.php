<html>
<head>
<title>Hello World</title>
</head>
<body>
Hello World!

<form action="process.php" method="post">
	Enter your name: <input name="name" type="text">
	<input type="submit">
</form>

<form action="connect_insert.php" method="post">
		Enter your first name: <input type="text" id="firstName" name="firstName" />
		<input type="submit">
</form>

<form action="del_row.php" method="post">
	Enter which rule you want deleted: <input type="text" id="del_row" name="del_row">
	<input type="submit">
</form>
		
<?php
	$people = array('Alice','Bob', 'Manfred');
	echo "<br> This is an array from a foreach loop : ";
	foreach ($people as $person){
		echo $person . ' ';
	}

	$day=cal_days_in_month(CAL_GREGORIAN,10,2022);
	echo "<br> There are $day days in October 2022<br><br>";
	
	
	function database_add($arg1){
		echo "Database connection section: <br>";
		$conn = new mysqli("localhost","root","","test");

		if ($conn->connect_error){
			die("Connection failed: " . $conn->connect_error);
		}
		$sql=$arg1;
		$result = $conn->query($sql);
	
		if ($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				echo " - Name: " . $row['firstName'] . "<br>";
			}
		}	
		else {
			echo "0 results";
		}
		$conn->close();
	}
	
	database_add("SELECT * from Registration");
?>
</body>
</html>