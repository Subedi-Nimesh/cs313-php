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
  } else if (isset($_POST['deleteQuestion'])) {
    $question = $_POST['deleteQuestion'];
    $id = $_POST['deleteQid'];
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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Display Questions</title>
</head>
<body>
<!-- <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <img src="/w3images/avatar_smoke.jpg" style="width:100%">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>PHOTOS</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
</nav> -->

	<p><b>All Questions:</b><br> 
		<?php
			foreach ($db->query('SELECT * FROM questions') as $row)
			{
			  	echo "<a href=\"editquestion.php?Id=".$row['id']."\">". $row['questions']. "</a><button><a href='editquestion.php?Id=".$row['id']."'>Edit Question</a></button><br>";
      }
      
		?>

    <button><a href="addquestion.php">Add Question</a></button>
    <button><a href="addanswer.php">Add Answer</a></button>
    </body>
</html>