<?php
$del_row = $_POST['del_row'];

$conn = new mysqli("localhost","root","","test");
if ($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM registration WHERE firstName="."'".$del_row."'";
if ($conn->query($sql) === TRUE){
	echo "Record deleted successfully";
} else {
	echo "Error deleting record: ". $conn->error;
}
$conn->close();
?>