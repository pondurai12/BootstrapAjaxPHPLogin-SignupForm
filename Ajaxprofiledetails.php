<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<h1> Welcome your profile details </h1>
<?php

if (isset($_POST['submit'])) {
	
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_guviintern";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	
}
$stmt = $conn->prepare("SELECT id,name,age,contact,password FROM registered_user WHERE email=? AND password = ?");
$stmt->bind_param("ss", $_POST['email'], $_POST['password']);
$stmt->execute();
$data = $stmt->get_result()->fetch_all();

		
		
    while($row=mysqli_fetch_array(get_result()))
    {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['age'] . "</td>";
		 echo "<td>" . $row['email'] . "</td>";
		 echo "<td>" . $row['password'] . "</td>";
       
        echo "</tr>";
/* close connection */
$conn->close();
?>

	<body>	

		</html>
