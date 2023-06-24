<?php
$userEmail = $_POST['email'];
$password = $_POST['password'];

$servername = "localhost";
$username = "root";
$password = "Chansmysql";
$dbname = "myguvidb";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn ->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users WHERE email = '$userEmail'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
	$row = $result->fetch_assoc();
	$storedPassword = $row['password'];

	if (password_verify($password, $storedPassword)) {
	echo "login Successful!";
}
else {
	echo "Incorrect Password!";;
}
}
else {
	echo "User Not Found!";
}

$conn->close();

?>
