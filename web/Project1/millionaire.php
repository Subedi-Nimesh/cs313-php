<?php
    include'connectdatabase.php';
    session_start();
    $_SESSION['Answer_id'] = -1;
    $_SESSION['Score'] = 0;
    // $_SESSION['Prev'] = array(-1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-image:url('cover.jpg'); height=100%;
		background-position: center; background-repeat: no-repeat;
		background-size: cover;">
    <button style ="margin-left:700px"><a href="game.php">Start Game</a></Button>
    <button style ="margin-top:700px"><a href="displayquestion.php">Edit Questions</a></Button>
</body>
</html>