<?php
session_start(); // Start the session

$connection = mysqli_connect("localhost", "root", "", "restaurant"); // Establish the database connection

if(isset($_POST['save_data'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $booking_date = $_POST['booking_date'];
    $booking_time = $_POST['booking_time'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];

    // Format the time to 12-hour AM/PM format
    $booking_time = date("h:i A", strtotime($booking_time));
    
    // Generate random booking number
    $bookingno = '10' . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
    
    $insert_query = "INSERT INTO text (bookingno, name, email, phone, booking_date, booking_time, adults, children, created_at) VALUES ('$bookingno', '$name', '$email', '$phone', '$booking_date', '$booking_time', '$adults', '$children', NOW())";
    $insert_query_run = mysqli_query($connection, $insert_query);
 
    if($insert_query_run) {
        echo "<script type='text/javascript'> alert('Your order sent successfully. Booking number is $bookingno');</script>";
        echo "<script type='text/javascript'> window.location = 'index.html';</script>";
        exit; // Prevent further execution
    } else {
        $_SESSION['status'] = "Insertion of data failed";
        header('location: welcome.php');
        exit; // Prevent further execution
    }
}
?>