<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Scriptures Resources</h1>
    <?php
    try
    {
      $dbUrl = getenv('DATABASE_URL');
      $dbOpts = parse_url($dbUrl);
      $dbHost = $dbOpts["host"];
      $dbPort = $dbOpts["port"];
      $dbUser = $dbOpts["user"];
      $dbPassword = $dbOpts["pass"];
      $dbName = ltrim($dbOpts["path"],'/');
      $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $ex)
    {
      echo 'Error!: ' . $ex->getMessage();
      die();
    }
    $statement = $db->query('SELECT book, chapter, verse, content FROM public.scriptures');
    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
      echo ('Scripture: ' . $row['book'] . ' ' . $row['chapter'] . ':'
            . $row['verse'] . '</br>' . $row['content']);
    }
    ?>
  </body>
</html>