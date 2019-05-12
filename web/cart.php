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
    <title>Cart</title>
    <link type="text/css" rel="stylesheet" href="shoppingcart.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <h1 id="top">
            Shopping Cart
        </h1>
    </header>
    <div class="navbar">
        <a href="shoppingindex.php">HOME</a>
        <a href="shoppingcart.php">ITEMS</a>
        <a href="cart.php">CART</a>
        <a href="checkout.php">CHECKOUT</a>
    </div>
    <form method="post" action="checkout.php">
    <?php      
        echo "<b>Fruits in the cart: </b><br>";
        echo "You Selected " . $_SESSION["Apple"] . ".<br>";
        echo "You Selected " . $_SESSION["Banana"] . ".<br>";
        echo "You Selected " . $_SESSION["Mango"] . ".<br>";
        echo "You Selected " . $_SESSION["Strawberry"] . ".";
    ?><br>

<input type="submit"  name="submit" class="submitbtn" value="Proceed to Checkout">
</form>
</body>
</html>