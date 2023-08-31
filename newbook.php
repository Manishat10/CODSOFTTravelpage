<?php
if(isset($_POST['submit']))
{ 
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $location = isset($_POST['location']) ? $_POST['location'] : '';
    $people = isset($_POST['people']) ? $_POST['people'] : '';
    $Arrival = isset($_POST['Arrival']) ? $_POST['Arrival'] : '';
    $leaving = isset($_POST['leaving']) ? $_POST['leaving'] : '';

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "travel_website";
    $conn = mysqli_connect($host, $username, $password, $dbname);
    $sql = "INSERT INTO booking(name, email, address, location, people,Arrival,leaving) VALUES('$name', '$email', '$address', '$location', '$people','$Arrival','$leaving')";
    mysqli_query($conn, $sql);
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking </title>
    <link rel="stylesheet" href="book.css">
</head>
<body>
    <h1>BOOK YOUR TRIP!</h1>
    <div class="content">
        <img src="booking.jpg" alt="Loading image" class="booking-image" style="max-width: 50%;">
        <div class="form" style="float: right;">
            <form action="#" method="POST">
            <br><input type="text" name="name" id="name" placeholder="Enter Your Name">
            <br><input type="email" name="email" id="email" placeholder="Enter Your email">
            <br><input type="text" name="address" id="Address" placeholder="Enter Your Address">
            <br><input type="text" name="location" id="location" placeholder="location You want to visit">
            <br><input type="number" name="people" id="people" placeholder="Number of People">
            <div id="Arrival"><br>Date of Arrival:<input type="date" name="Arrival" id="Arr"></div>
            <div id="leaving"><br>Date of leaving:<input type="date" name="leaving" id="leave"></div>
            <input type="submit" id="submit" name="submit" value="Submit">
        </form>
        </div>
    </div>
</body>
</html>

