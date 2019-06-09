<?php include 'header.php';
$weekday = $_GET["menu-day"];
if (!isset($weekday) || !($weekday == "Monday" || $weekday == "Tuesday" || $weekday == "Wednesday" || 
$weekday == "Thursday" || $weekday == "Friday")) 
{ $weekday = "Monday"; 
}
?> 

<form name="tabs-days" id="tabs-days" action="./menu.php" method="GET">
	<div class="tabs">
		<input type="radio" name="menu-day" onchange="submit()" value="Monday" id="days-monday"></input>
		<label for="days-monday">Monday</label>
		<input type="radio" name="menu-day" onchange="submit()" value="Tuesday" id="days-tuesday"></input>
		<label for="days-tuesday">Tuesday</label>
		<input type="radio" name="menu-day" onchange="submit()" value="Wednesday" id="days-wednesday"></input>
		<label for="days-wednesday">Wednesday</label>
		<input type="radio" name="menu-day" onchange="submit()" value="Thursday" id="days-thursday"></input>
		<label for="days-thursday">Thursday</label>
		<input type="radio" name="menu-day" onchange="submit()" value="Friday" id="days-friday"></input>
		<label for="days-friday">Friday</label>
	</div>
	<script>
		var tabs = document.forms['tabs-days']['menu-day'];
		if (!tabs.value){
			tabs.value = "<?php echo $weekday?>";
		}
		function submit(){document.forms['days'].submit();}
	</script>
</form>
<?php
$db = getDb();
$statement = $db->prepare("SELECT name, price, day FROM menu where day = '$weekday'");
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