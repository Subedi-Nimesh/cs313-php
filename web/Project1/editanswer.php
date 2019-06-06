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
        function onLoad() {
            document.getElementById('answer').value = 'apple';
        }
    function confirmation()
    {
      return confirm('Are you sure?');
    }
  </script>
</head>
<body onload="onLoad()">
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

	<p><b>Edit Answer:</b><br> 
	<form action="displayquestions.php" onsubmit='return confirmation()' method="POST">
  	<?php
    echo "Select Type:      <select name='typeSelect' required>";
    echo "<option>Choose Types</option>";
			foreach ($db->query('SELECT * FROM types') as $row)
			{
			  	echo "<option value=".$row['id'].">".$row['type']."</option><br>";
      }
      echo "</select><br>";

      echo "Enter New Answer:  <input type='text' name='editAnswer' id='answer' required><br><br>";

		?>

    <button type='submit'>Submit</button>
  </form>
</body>
</html>