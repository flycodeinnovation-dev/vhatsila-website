<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pickupLocation = $_POST['pickupLocation'];
    $destination = $_POST['destination'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $passengers = $_POST['passengers'];

    // Example: Save to a database or send an email
    // Connect to database and insert data (pseudo-code)
    // $db = new mysqli('host', 'username', 'password', 'database');
    // $query = "INSERT INTO bookings (fullName, email, phone, pickupLocation, destination, date, time, passengers)
    //           VALUES ('$fullName', '$email', '$phone', '$pickupLocation', '$destination', '$date', '$time', '$passengers')";
    // $db->query($query);

    echo "Thank you, $fullName! Your booking has been received.";
}
?>
