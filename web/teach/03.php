<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <title>Teach 03</title>
    
    <meta name="description" content="contents of page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <body>
	
        <div class="container">
<form action="display.php" method="post">
	
	<strong>Name:</strong><br>
	<input type="text" name="Name"><br><br>
	<strong>Email:</strong><br>
	<input type="text" name="Email"><br><br>
	<strong>Major:</strong><br>
    <input type="radio" name="Major" value="Computer Science" checked> Computer Science<br>
    <input type="radio" name="Major" value="Web Design and development"> Web Design and development<br>
    <input type="radio" name="Major" value="Computer information and technology"> Computer information and technology<br> 
    <input type="radio" name="Major" value="Computer engineering"> "Computer engineering<br>
   <Strong>Continents Visited</strong><br>
  <input type="checkbox" name="abrev[]" value="NA" checked="checked">North America<br>
  <input type="checkbox" name="abrev[]" value="SA"> South America<br>
  <input type="checkbox" name="abrev[]" value="EU"> Europe<br>
  <input type="checkbox" name="abrev[]" value="AS"> Asia<br>
  <input type="checkbox" name="abrev[]" value="AU"> Australia<br>
  <input type="checkbox" name="abrev[]" value="AF"> Africa<br>
  <input type="checkbox" name="abrev[]" value="AN"> Antartica<br>
   
   <strong>Comments:</strong><br>
   <textarea name="comments" rows="20" cols="50"></textarea>
   <input type="submit" value="submit">
   
</form>
        </div>
    </body>

</html>