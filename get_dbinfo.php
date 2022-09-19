<?php
#conn = new mysqli('localhost','root','',test')

if ($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT firstName from Registration";
$result = $conn->query($sql);

if ($result->num_rows > 0){
	while($row = $result->fetc_assoc()) {
	echo "- Name: " . $row["firstName"] <br>";
}else{
echo "0 results";
}
$conn-?close();
?>