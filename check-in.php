<?php

// Connect to the database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$rooms = $_POST['rooms'];

// Insert the data into the database
$sql = "INSERT INTO reservations (name, email, phone, checkin, checkout, rooms)
VALUES ('$name', '$email', '$phone', '$checkin', '$checkout', '$rooms')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
