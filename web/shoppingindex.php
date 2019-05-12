<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h2>03 Prove : Assignment - PHP Shopping Cart</h2>
    <hr>
    <h3>Overview</h3>
    <p>Create a simple PHP application to simulate a shopping cart.</p><br>

    <h3>Guidelines</h3>
    <p>The following guidelines are the minimum standard for this assignment (to earn 93%). To earn 100%, you should find a way to go beyond this standard to show your creativity and personality. Have fun and make it your own!</p>
    <p>Your assignment is to create a series of pages that simulate a shopping cart for an online store. The <em>kinds</em> of items you can put in your cart and purchase are totally up to you. But you should have at least the following components:</p>
    <ol>
        <li>
            <p>Browse Items</p>
            <p>On the browse items page, the user sees a list of items they can add to their cart and purchase. Again, the kind of items and the formatting of this page is up to you.</p>
            <p>You should provide a button or link to add an item to the cart. Doing so should store that item in some way to the session, and then keep the user on the browse page.</p>
        </li>
        <li>
            <p>View Cart</p>
            <p>Your browse page should contain a link to view the cart. On the view cart page, the user can see all the items that are in their cart. Provide a way to remove individual items from the cart.</p>
            <p>The view cart page should have a link to return to the browse page for more shopping and a link to continue to the checkout page.</p>
        </li>
        <li>
            <p>Checkout</p>
            <p>The checkout page should ask the user for the different components of their address.</p>
            <p>It should have the option to complete the purchase or return to the cart.</p>
        </li>
        <li>
            <p>Confirmation page</p>
            <p>After completing the purchase from the checkout page, the user is shown a confirmation page. It should display all the items they have just purchased as well as the address it will be shipped too.</p>
            <p>Make sure to check for malicious injection, especially from free-entry fields like the address.</p>
        </li>
    </ol>
    <p>No login functionality or databases are required for this assignment.</p>
    <div class="navbar">
                <a href="shoppingindex.php">HOME</a>
                <a href="shoppingcart.php">ITEMS</a>
                <a href="cart.php">CART</a>
                <a href="checkout.php">CHECKOUT</a>
            </div>

</body>
</html>