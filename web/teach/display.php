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
    if(isset($_POST['continent'])) {
      $continents = $_POST['continent'];  

    foreach ($continents as $contValue){
   echo $contValue."<br />";
  }}
  
  
  
?>
</body>
</html>