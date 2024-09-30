<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input data
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $phone = htmlspecialchars(trim($_POST["phone"]));
    $student_id = htmlspecialchars(trim($_POST["student_id"]));
    $location = htmlspecialchars(trim($_POST["location"]));
    $room_type = htmlspecialchars(trim($_POST["room_type"]));
    $move_in_date = htmlspecialchars(trim($_POST["move_in_date"]));
    $amount = htmlspecialchars(trim($_POST["amount"]));
    $payment_method = htmlspecialchars(trim($_POST["payment_method"]));

    // Here you can add code to save this data to a database or send it via email
    // For demonstration purposes, we'll just print it
    echo "<h1>Booking Confirmed</h1>";
    echo "<p>Thank you, $name. Your booking has been confirmed with the following details:</p>";
    echo "<ul>";
    echo "<li>Email: $email</li>";
    echo "<li>Phone: $phone</li>";
    echo "<li>Student ID: $student_id</li>";
    echo "<li>Preferred Location: $location</li>";
    echo "<li>Room Type: $room_type</li>";
    echo "<li>Move-In Date: $move_in_date</li>";
    echo "<li>Amount Paid: $amount</li>";
    echo "<li>Payment Method: $payment_method</li>";
    echo "</ul>";
} else {
    echo "Invalid request.";
}
?>
