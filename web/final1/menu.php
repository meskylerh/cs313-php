<?php include 'header.php'; 
$db = getDb();
$statement = $db->prepare("SELECT name, price, day FROM menu");
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
   $name = htmlentities($row['name']);
	$price = $row['price'];
   $day = $row['day'];

   
   echo "<div class='menu'>
            <div class='foodname'>
               $name 
            </div>
            <div class='price'> 
              $price 
            </div>
            <div class='day'> 
               $day
               </div>
            </div>
            ";
}    

 include 'footer.php'; ?>