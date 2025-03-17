<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destination = htmlspecialchars($_POST['destination']);
    $checkin = htmlspecialchars($_POST['checkin']);
    $checkout = htmlspecialchars($_POST['checkout']);
    $rooms = htmlspecialchars($_POST['rooms']);
    $adults = htmlspecialchars($_POST['adults']);
    $children = htmlspecialchars($_POST['children']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);

    $to = "sameerahmedbsce@gmail.com";
    $subject = "New Booking Reservation";
    $message = "
        <html>
        <head>
            <title>New Booking Reservation</title>
        </head>
        <body>
            <h2>Booking Details</h2>
            <p><strong>Destination:</strong> $destination</p>
            <p><strong>Check In:</strong> $checkin</p>
            <p><strong>Check Out:</strong> $checkout</p>
            <p><strong>Rooms:</strong> $rooms</p>
            <p><strong>Adults:</strong> $adults</p>
            <p><strong>Children:</strong> $children</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
        </body>
        </html>
    ";

    // Set content-type headers for HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: <$email>" . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Your booking request has been sent successfully.";
    } else {
        echo "Failed to send the booking request. Please try again.";
    }
}
?>
