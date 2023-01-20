<?php


$name = $_POST['nameId'];
$mysqli = new mysqli("localhost", "root", "", "test");
$query = "INSERT INTO reservations (name, email, phone, checkin, checkout, rooms) VALUES ('$name', '$email', '$phone', '$checkin', '$checkout', '$rooms')";
$mysqli->query($query);
echo "Registration Successfully";
$mysqli->close();

?>
