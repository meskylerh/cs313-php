<?php include 'header.php'; 
$db = getDb();
$acceptid = $_POST['event_id'];
if (isset($acceptid))
{
   $sql= "Update event set accepted = TRUE where event_id = $acceptid";
$db->prepare($sql)->execute();   
}

$statement = $db->prepare("SELECT event_id, name, type, date, time FROM event WHERE accepted = false");
$statement->execute();
?>
<form action='./admin.php' method='POST'>
<?php
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
   $id = $row['event_id'];
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
               <input type='submit' class='button' name='event_id' value='$id' />
            </div>
            ";
}    
?>
</form>
<?php
 include 'footer.php'; ?>