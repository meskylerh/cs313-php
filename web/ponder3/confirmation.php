<html>
<body>
<h1>Thank you</h1>
<?php
echo "Name:" . "<br>" .   $_POST["Name"] . "<br><br>";
echo "Your order will be sent to:";
echo $_POST["street"] . " " . $_POST["city"] . "<br>" . $_POST["state"]. "  " . $_POST["zip"];

echo "Your order:";

				$silver = $_SESSION["cart"];
				foreach($silver as $silvera){
				echo "<strong>" .$silvera."</Strong>"."<br />";}
				
echo "enjoy the rest of your day!";
				?>
</body>
</html>