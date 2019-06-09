<?php include 'header.php'; 
$db = getDb();
$statement = $db->prepare("SELECT name, type, date, time FROM event WHERE accepted = TRUE ORDER BY date ASC");
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
   $name = htmlentities($row['name']);
	$type = $row['type'];
	$date = date_format(date_create($row['date']), 'l F jS Y');
	$time = date_format(date_create($row['time']), 'g:i A');
   
   echo "<div class='event'>
            <div class='bandname'>
               $name 
            </div>
            <div class='type'> 
              $type 
            </div>
            <div class='date'> 
               $date at $time
               </div>
            </div>
            ";
}    
include 'footer.php';
?> 