<?php include 'header.php'; 
$db = getDb();
$statement = $db->prepare("SELECT name, type, date, time FROM event WHERE accepted = TRUE");
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
   $name = htmlentities($row['name']);
	$type = $row['type'];
	$date = date_format($row['date'], 'l jS F Y');
	$time = date_format($row['time'], 'g:i A');
   
   echo "<div class='event'>
            <div class='bandname'>
               $name 
            </div>
            <div class='type'> 
              $type 
            </div>
            <div class='date'> 
               $date $time
               </div>
            </div>
            ";
}    
include 'footer.php';
?> 