<?php
    include'connectdatabase.php';
    session_start();
    $_SESSION['Answer_id'] = -1;
    $_SESSION['Score'] = 0;
    $_SESSION['Prev'] = array(-1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="game.php">Start Game</a>
</body>
</html>