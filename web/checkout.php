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
    <title>Checkout</title>
    <link type="text/css" rel="stylesheet" href="shoppingcart.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <h1 id="top">
            Checkout Form
        </h1>
    </header>
    <div class="navbar">
        <a href="shoppingindex.php">HOME</a>
        <a href="shoppingcart.php">ITEMS</a>
        <a href="cart.php">CART</a>
        <a href="checkout.php">CHECKOUT</a>
    </div>

    <form action="confirmation.php" id="checkout_form" method="post">
        <div class="form-group">
            <label for="firstname">First Name: </label>
            <input type="text" class="form-control" id="fname" placeholder="Enter First Name">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name: </label>
            <input type="text" class="form-control" id="lname" placeholder="Enter Last Name">
        </div>
        <div class="form-group">
            <label for="address">Address: </label>
            <input type="text" class="form-control" id="address" placeholder="Enter Address">
        </div>
        <div class="form-group">
            <label for="city">City: </label>
            <input type="text" class="form-control" id="city" placeholder="Enter City">
        </div>
        <div class="form-group">
            <label for="state">State: </label>
            <input type="text" class="form-control" id="state" placeholder="Enter State">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter Email">
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="number" class="form-control" id="phone" placeholder="Enter Phone">
        </div>

        <input type="reset" value="Reset form">
        <input type="submit" value="Submit">
        <br>
        <br>
        <br>
    </form>
</body>
</html>