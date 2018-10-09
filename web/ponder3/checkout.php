<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
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
                    <h2>CheckOut</h2>
			<?php include ("nav.php"); ?>
					
			<h2>Please Fill in the information</h2>
			<form action="confirmation.php" method="post">
	
			<strong>Full Name:</strong><br>
			<input type="text" name="name" placeholder="Skyler Hildreth"><br><br>
			<strong>Street name:</strong><br>
			<input type="text" name="street" placeholder="5701 coaldale ct"><br><br>
			<strong>City:</strong><br>
			<input type="text" name="city" placeholder="Elk Grove"><br><br>
			<strong>State</strong><br>
			<input type="text" name="state" placeholder="CA"><br><br>
			<strong>Zip Code</strong><br>
			<input type="text" name="zip" placeholder="95758"><br><br>
			<input type="submit" value="place Order">
			</div>
		      <footer>
            <p>created By Skyler Hildreth enjoy</p>
        </footer>
        </div>
    </body>

</html>