<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_guviintern";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
	

//prepare and bind
$stmt = $conn->prepare("INSERT INTO registered_user (name, age,contact, email,password) VALUES (?, ?, ?,?,?)");
$stmt->bind_param("sssss", $name,$age,$contact,$email,$password);

// set parameters and execute
$name = $_POST['name'];
$age = $_POST['age'];
$contact = $_POST['contact'];
$email = $_POST['email'];
    $password =$_POST['password'] ;
$stmt->execute();

echo "New records created successfully";
}
$stmt->close();
$conn->close();

?>


