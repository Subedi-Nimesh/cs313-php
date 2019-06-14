<?php
  include'connectdatabase.php';
  
  $value = $_GET['Id'];
  $questionValue = $db->prepare("SELECT * FROM questions where id = :value");
  $questionValue->bindValue(':value', $value, PDO::PARAM_INT);
  $questionValue->execute();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Display Questions</title>
  <script>
    function confirmation()
    {
      return confirm('Are you sure?');
    }
  </script>
</head>
<body>
	<p><b>Edit Question:</b><br> 
	<form action="displayquestions.php" onsubmit='return confirmation()' method="POST">
  	<?php

    $result = $questionValue->fetch(PDO::FETCH_ASSOC);
    $result = $result['questions'];
      echo "Enter New Question:  <input type='text' name='editquestion' width='100' id='question' value='$result' required><br><br>";

      echo "Select Answer:      <select name='answerSelect' required>";
        echo "<option>Choose Answer</option>";
                foreach ($db->query('SELECT * FROM answers') as $row)
                {
                    echo "<option value=".$row['id'].">".$row['answer']."</option><br>";
            }
            echo "</select><br><br>";
            echo "<input type='hidden' name='editId' value='$value'>";
    ?>

    <button type='submit'>Submit</button>
  </form>
</body>
</html>