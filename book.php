<?php
include "connect.php";

$name = $_POST['name'];
$source = $_POST['source'];
$destination = $_POST['destination'];
$movie = $_POST['movie'];
$seats = $_POST['seats'];

$sql = "INSERT INTO bookings (name, source, destination, movie_name, seats)
        VALUES ('$name', '$source', '$destination', '$movie', '$seats')";

if (mysqli_query($conn, $sql)) {
    echo "<h2>🎟️ Ticket Booked Successfully!</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Movie: $movie</p>";
    echo "<p>Route: $source → $destination</p>";
    echo "<p>Seats: $seats</p>";
} else {
    echo "Error booking ticket";
}
?>
