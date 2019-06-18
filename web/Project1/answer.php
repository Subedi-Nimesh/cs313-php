<?php
    include'connectdatabase.php';
    session_start();
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
    <?php
    $selectedAns = $_POST['selected'];
    $correctAns = $_SESSION['Answer_id'];
    if($selectedAns == $correctAns)
    {
        $_SESSION['Score'] += 1;
        echo "Congrats. It was correct. Your total score is ". $_SESSION['Score'];
        echo "<button><a href = 'game.php'>Next Question</a></button>";
    } else {
        echo "Boo. It was incorrect. Your final score is ". $_SESSION['Score'];
        echo "<button><a href = 'millionaire.php'>Start Over</a></button>";
    }
    ?>
</body>
</html>