<?php
$username = $_POST['username'];
$userEmail = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

$hashedPassword =password_hash($password, PASSWORD_DEFAULT);

$servername = "localhost";
$username = "root";
$password = "Chansmysql";
$dbname = "myguvidb";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users WHERE email = '$userEmail'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "Your Account already exists. ";
}
else {
	$inserSql = "INSERT INTO users (username,email,password,confirmPassword) VALUES ('$username','$userEmail','$hashedPassword','$confirmPassword')";    
	if ($conn->query($inserSql) === TRUE) {
	echo "Sign up successful!";
}
else {
	echo "Error: " .$inserSql ."<br>". $conn->error;
}
}
$conn->close();
?>

