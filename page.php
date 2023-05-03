<?php
$servername = "localhost";
$username = "root";
$password = "";
$name = $_POST['Name'];
$email = $_POST['Email'];
$motdepass = $_POST['password'];

// Create connection
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select the database
$conn->query('use Client');

// Create the table
$sql = "CREATE TABLE IF NOT EXISTS client (
    nom VARCHAR(20) NOT NULL,
    email VARCHAR(20) NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL
)";
$conn->query($sql);

// Insert the data
$sql = "INSERT INTO client(nom,email,mot_de_passe) VALUES ('$name','$email','$motdepass')";
$conn->query($sql);

// Display the welcome message
$message = "<h1> Welcome In Your Account </h1>";
$message .= "<p> Your Name : $name </p>";
$message .= "<p> Your email : $email </p>";
echo $message;

$conn->close();
?>
