<?php
	include'connectdatabase.php';
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
	<p><b>Add new Questions:</b><br> 
	<form action="displayquestions.php" onsubmit='return confirmation()' method="POST">
  	<?php
        echo "Enter New Question:  <input type='text' name='newQuestion' required><br>";

        echo "Select Answer:      <select name='answerSelect' required>";
        echo "<option>Choose Answer</option>";
                foreach ($db->query('SELECT * FROM answers') as $row)
                {
                    echo "<option value=".$row['id'].">".$row['answer']."</option><br>";
            }
            echo "</select><br><br>";
		?>

    <button type='submit'>Submit</button>
  </form>
</body>
</html>