
<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "sundarban";

$conn = new mysqli($server, $username, $password, $dbname);

if($conn -> connect_error){
	die("failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM sales_data";
$result = $conn->query($sql);

$revene = 0;

if($result-> num_rows > 0){
	while($row = $result->fetch_assoc()){
		$revene += $row['Revenue'];
	}
}


echo "Total revenue = " . $revene;
?>