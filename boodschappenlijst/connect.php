<?php
	$firstName = $_POST['firstName'];
	
	//database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		die('Connection Failed: '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into registration(firstName)values(?)");
		$stmt->bind_param('s',$firstName);
		$stmt->execute();
		echo"registration Successfully...";
		$stmt->close();
		$conn->close();
	}
?>