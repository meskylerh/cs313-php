<?php include 'header.php'; 
$db = getDb();
$bandname = str_replace("'", "''", $_POST['band-name']);
$genre = $_POST['genre'];
$date = $_POST['show-date'];
$time = $_POST['show-time'];

$sql = "INSERT INTO eventinsert into event(name, date, time, type, accepted)values('$bandname', '$date', '$time', '$genre',FALSE)";
$db->prepare($sql)->execute(); 
echo '<h1>Thank You For Submitting a Request to play at the Rusty Blue</h1>';


 include 'footer.php'; ?>