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
	<p><b>Add new Answers:</b><br> 
	<form action="displayquestions.php" onsubmit='return confirmation()' method="POST">
  	<?php
    echo "Select Type:      <select name='typeSelect' required>";
    echo "<option>Choose Types</option>";
			foreach ($db->query('SELECT * FROM types') as $row)
			{
			  	echo "<option value=".$row['id'].">".$row['type']."</option><br>";
      }
      echo "</select><br>";

      echo "Enter New Answer:  <input type='text' name='newAnswer' required><br><br>";

		?>

    <button type='submit'>Submit</button>
  </form>
</body>
</html>