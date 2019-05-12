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
        <title>Fruits Market</title>
        <link type="text/css" rel="stylesheet" href="shoppingcart.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <header>
        <h1 id="top"><u>Welcome to Fruit Market</u></h1>
        </header>
            <div class="navbar">
                <a href="shoppingindex.php">HOME</a>
                <a href="shoppingcart.php">ITEMS</a>
                <a href="cart.php">CART</a>
                <a href="checkout.php">CHECKOUT</a>
            </div>
        <h1>Fruit Shopping: </h1>
            <form method ="post" action="cart.php">
                <div class="options">
                    <h2>Apple</h2>
                    <img src="apple.jpg" alt="Apple" width="300" height="300"><br>
                    <input type="Button" name="fruits[]" value="Apple" onclick="selectfruit('Apple')"> I want Apple <br> 
                </div>

                <div class="options">
                    <h2>Banana</h2>
                    <img src="banana.jpg" alt="Banana" width="300" height="300"><br>
                    <input type="checkbox" name="fruits[]" value="Banana" onchange="selectfruit('Banana')"> I want Banana <br>
                </div>

                <div class="options">
                    <h2>Mango</h2>
                    <img src="mango.jpg" alt="Mango" width="300" height="300"><br>
                    <input type="checkbox" name="fruits[]" value="Mango" onclick="selectfruit('Mango')"> I want Mango <br>
                </div>

                <div class="options">
                    <h2>Strawberry</h2>
                    <img src="strawberry.jpg" alt="Strawberry" width="400" height="300"><br>
                    <input type="checkbox" name="fruits[]" value="Strawberry" onclick="selectfruit('Straberry')"> I want Strawberry <br>
                </div>
           <input type="submit"  name="submit" class="submitbtn" value="Proceed Cart">
        </form>
        <?php 
        function selectfruit($val) {
            $fruit = $val;
            switch ($fruit) {
                case "Apple":
                    $_SESSION['Apple'] = 'Apple';
                    break;
                case "Banana":
                    $_SESSION['Banana'] = 'Banana';
                    break;
                case "Mango":
                    $_SESSION['Mango'] = 'Mango';
                    break;
                case "Strawberry":
                    $_SESSION['Strawberry'] = 'Strawberry';
                    break;
            }
        }
        ?>
    </body>
</html>