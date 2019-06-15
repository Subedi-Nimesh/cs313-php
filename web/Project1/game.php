<?php
    include'connectdatabase.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="edit.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game</title>
</head>
<body>
    <?php
        $displayQues = $db->query("SELECT * FROM questions WHERE ID NOT IN ($_SESSION['Prev']) ORDER BY RANDOM() LIMIT 1");
        $result = $displayQues->fetch(PDO::FETCH_ASSOC);
        $result = $result['questions'];
        echo "$result";
    ?>
    
</body>
</html>