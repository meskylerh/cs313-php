<html>
<body>
<head>
   <title>Display selections</title>
</head>

<?php
echo "username:" . "<br>" .   $_POST["Name"] . "<br><br>";
echo "Email:" . "<br>" . "<a href= 'mailto:'" .  $_POST["Email"] . ">" . $_POST["Email"] . "</a><br><br>";
echo "Major:" . "<br>" . $_POST["Major"] . "<br><br>";
echo "Comments:" . "<br>"  . $_POST["comments"] . "<br><br>";

echo "Continents Vistited:" . "<br>";
    if(isset($_POST['abrev'])) {
      $continents = $_POST['abrev'];  
      $states = array("NA"=>"North America", "SA"=>"South America", "EU"=>"Europe", "AS" =>"Asia", "AU"=>"Australia", "AF"=>"Africa", "AN"=>"Antartica"); 
    foreach ($continents as $contValue){
       $fullstate = $states[$continents]
   echo $fullstate "<br />";
  }}
  
  
  
?>
</body>
</html>