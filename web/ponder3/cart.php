<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Your Cart</title>
    <meta name="description" content="contents of page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css" />
	</head>	
    <body>
        <div class="container">
        <header>
            <h1>Skyler's Silver</h1>
        </header>
            <div class="flex">
                <main>
                    <h2>Hope you enjoyed shopping</h2>
					<?php include ("nav.php"); ?>
					
					
					<h1>Here are the products that you have selected</h1>
					<?php 
				$silver = $_SESSION["cart"];
				foreach($silver as $silvera){
				echo "<strong>" .$silvera."</Strong>"."<br />";
			}
					?>
			<form action="checkout.php" method="post">
			<input type="submit" value="Checkout!">
		</form>
		</div>
		      <footer>
            <p>created By Skyler Hildreth enjoy</p>
        </footer>
        </div>
    </body>

</html>