<?php
	session_start();
	?>
<html>
<body>
<h1>Thank you</h1>
<?php
echo $_POST["name"] . "<br><br>";
echo "Your order will be sent to:" . "<br><br>";
echo $_POST["street"] . " " . $_POST["city"] . "<br>" . $_POST["state"]. "  " . $_POST["zip"]. "<br><br>";

echo "Your order:" . "<br><br>;

				$silver = $_SESSION["cart"];
				foreach($silver as $silvera){
				echo "<strong>" .$silvera."</Strong>"."<br />";}
				
echo "enjoy the rest of your day!";
				?>
</body>
</html>