<?php include 'header.php'; 
$db = getDb();
$bandname = str_replace("'", "''", $_POST['band-name']);
$genre = $_POST['genre'];
$date = $_POST['show-date'];
$time = $_POST['show-time'];

$sql = "INSERT INTO event (name, date, time, type, accepted)values('$bandname', '$date', '$time', '$genre',FALSE)";
$db->prepare($sql)->execute(); 
$lastId= $db->lastInsertId();
$sql = "INSERT INTO request (event_id) VALUES ($lastId)";
$db->prepare($sql)->execute(); 
echo '<h1>Thank you for submitting a request to play at the Rusty Blue!</h1>
      <p>We will review your request shortly</p>'
;


 include 'footer.php'; ?>