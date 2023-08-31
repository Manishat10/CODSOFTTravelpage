<?php
if(isset($_POST['submit'])) 
{
    $NAME=$_POST['NAME'];
    $EMAIL=$_POST['EMAIL'];
    $Message=$_POST['Message'];

    $host="localhost";
    $username="root";
    $password="";
    $dbname="travel_website";
    $conn=mysqli_connect($host,$username,$password,$dbname);
    $sql="INSERT INTO contact(NAME,EMAIL,Message) values('$NAME','$EMAIL','$Message')";
    mysqli_query($conn,$sql);
} 
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css">
        <link rel="stylesheet" href="contactus.css">
    </head>

    <body>
        <h1 class="Contactus">Contact Us</h1>
        <h3>How Can We Help?</h3>
        <h4>Send Us a Message!</h4>
        <div class="content">
            <img src="contactus.jpg" alt="Image Loading" class="contact-image">
            <div class="form">
                <form action="#" method="POST">
                <input type="text" name="NAME" id="NAME" placeholder=" Enter Your Name">
                <input type="email" name="EMAIL" id="EMAIL" placeholder=" Enter Your Email">
                <textarea name="Message" id="Message" placeholder=" Enter Your Message" cols="30" rows="10"></textarea>
                <input type="submit" id="submit" name="submit" value="Submit">
                </form>
            </div>
        </div>
    </body>

</html>