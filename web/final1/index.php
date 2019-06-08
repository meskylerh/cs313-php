<?php include 'header.php'; 
$db = getDb();
$statement = $db->prepare("SELECT name, type, date, time FROM event WHERE accepted = TRUE");
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
   $name = htmlentities($row['name']);
	$type = $row['type'];
	$date = $row['date'];
	$time = $row['time'];
   
   echo '<div class="event">
            <div class="bandname">
               $name 
            </div>
            <div class="type"> 
              $type 
            </div>
            <div class="date"> 
               $date $time
               </div>
            </div>
            ';
}    
include 'footer.php';
?> 