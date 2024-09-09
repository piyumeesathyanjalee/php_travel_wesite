<?php
$connection = mysqli_connect('localhost', 'root', '123', 'book_db');

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];
    $price_per_person = $_POST['price']; // Assuming 'price' is passed from book.php

    // Calculate total_price based on guests and price_per_person
    $total_price = $guests * $price_per_person;

    // Insert into database with total_price
    $request = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving, price, total_price) 
                VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving', '$price_per_person', '$total_price')";

    mysqli_query($connection, $request);

    header('location: display.php'); // Redirect to display page after successful insertion

} else {
    echo 'Something went wrong, please try again.';
}
?>
