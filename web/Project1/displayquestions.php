<?php
  include'connectdatabase.php';
  
  if (isset($_POST['newAnswer'])) {
    $answer = $_POST['newAnswer'];
    $answer_type = $_POST['typeSelect'];
    $db->query("INSERT INTO answers (answer, answer_type) VALUES ('".$answer."', ".$answer_type.")");
  } else if (isset($_POST['newQuestion'])) {
    $question = $_POST['newQuestion'];
    $answer_id = $_POST['answerSelect'];
    $db->query("INSERT INTO questions (questions, answers_id) VALUES ('".$question."', ".$answer_id.")");
  } else if (isset($_POST['editquestion'])) {
    $question = $_POST['editquestion'];
    $answer_id = $_POST['answerSelect'];
    $id = $_POST['editId'];
    $db->query("UPDATE questions SET questions = '$question', answers_id = $answer_id WHERE id = $id");
  // } else if (isset($_POST['editAnswer'])) {
  //   $answer = $_POST['editAnswer'];
  //   $answer_type = $_POST['typeSelect'];
  //   $db->query("UPDATE answers SET answer='$answer', answers_type=$answer_type WHERE id=id");
  } else if (isset($_GET['Id'])) {
    $id = $_GET['Id'];
    $db->query("DELETE FROM questions WHERE id=$id;");
  } else if (isset($_POST['deleteAnswer'])) {
    $answer = $_POST['deleteAnswer'];
    $answer_type = $_POST['typeSelect'];
    $id = $_POST['deleteAid'];
    $db->query("DELETE FROM answers WHERE id=$id;DELETE FROM questions WHERE answer_id=$id;");
  }

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="edit.css">
	<title>Display Questions</title>
  <script>
    function confirmation(id) {
    var answer = confirm("Are you sure you want to delete it?")
if (answer)
window.location="displayquestions.php?Id="+id;
}
</script>
</head>
<body>

	<p><h1><b>All Questions:</b></h1><br> 
		<?php
    $number = 1;
    echo "<div class='indent'>";
    foreach ($db->query('SELECT * FROM questions') as $row)
			{
        echo "$number. ";
          echo "<a href=\"javascript:confirmation(".$row['id'].");\">". $row['questions']. "</a>";
          echo "<button><a href='editquestion.php?Id=".$row['id']."'><span style='font-family:Wingdings;'>?</span></a></button><br>";
          $number += 1;
        }
        echo "</div>";
		?>

    <button><a href="addquestion.php">Add Question</a></button>
    <button><a href="addanswer.php">Add Answer</a></button>
  </p>
  </body>
</html>