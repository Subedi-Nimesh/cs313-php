<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmation</title>
</head>
<body>
    <?php
        echo "<h2>Order Submitted Successfully!!!</h2>";
        echo "<p>Your order has been confirmed.</p>";
        echo "<p>It will take upto 1 day to deliver.</p>";
        echo "<p>Enjoy your fruits.</p>";
        // remove all session variables
        session_unset(); 

        // destroy the session 
        session_destroy();
    ?>
    
    <br />
    <br /> <a href="shoppingcart.php">BACK TO HOME</a> </div>
</body>
</html>