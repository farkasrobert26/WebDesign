<?php

$link = mysqli_connect("localhost","root","","hotel_booking");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$rooms = $_POST['rooms'];

$query = "INSERT INTO bookings (name, email, phone, checkin, checkout, rooms) VALUES ('$name', '$email', '$phone', '$checkin', '$checkout', '$rooms')";
mysqli_query($link, $query);

mysqli_close($link);

$link = mysqli_connect("localhost","root","","hotel_booking");
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$result = mysqli_query($link,"SELECT * FROM bookings");
while($row = mysqli_fetch_array($result))
  {
  echo $row['name'] . " " . $row['email'];
  echo "<br>";
  }
?>