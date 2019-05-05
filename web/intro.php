<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <title>Skyler's main page</title>
    <meta name="description" content="contents of page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Stylei.css" />
   <link href="https://fonts.googleapis.com/css?family=Wendy+One" rel="stylesheet">
</head>
    <body>
        <div class="container">
        <header>
            <h1>Skyler's Homepage</h1>
        </header>
            <div class="flex">
                <main>
                	<?php include ("nav.php"); ?>
                    <h2>Welcome</h2>
                    <?php
                        echo "You are visiting on: " . date('l j F  h:i:s A');
                        ?>
		</div>
                    <p>My name is Skyler Hildreth</p>
                    <img src="arch.jpg" alt="my wife and me" width="350" height="300">
					<p>I am a father of a wild 3 year old and a cute little 1 Year old man how time is flying by.</p>
					<p>Things are not always the easiest. I just landed a full time job as a software QA developer, a stepping stone</p> 
					<p>to where I want to be and a good way to atleast start a resume. I look forward to be able to become better.</p>
					<p>It is nice to meet you and look forward to completing this course!</p>
                </main>
            
           <?php include ("footer.php"); ?>
        </div>
    </body>

</html>