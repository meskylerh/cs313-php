<? php
try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = "ec2-107-20-167-11.compute-1.amazonaws.com";
  $dbPort = "5432";
  $dbUser = "eeoypxkfqceele";
  $dbPassword = "8a8e822c95e1d6a4a2215c88ac4b20bc89f84ae1cc7480ce7212d82d1ba707e0";
  $dbName = "df3hvlpt6i3j3h";

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  catch (PDOException $ex)
  {
    echo 'Error!: ' . $ex->getMessage();
    die();
  }

?>

<html>
<body>
<head>
   <title>Scripture study</title>
</head>

<h>Scripture Resources<h>
<?php

	while ($row = $statement->fetch(PDO::FETCH_ASSOC))

	{

		echo '<p>';

		echo '<strong>' . $row['book'] . ' ' . $row['chapter'] . ':';

		echo $row['verse'] . '</strong>' . ' - ' . $row['content'];

		echo '<br />';

		echo 'Topics: ';
  
  
?>
</body>
</html>