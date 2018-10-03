<html>
<body>
<?php
echo "username:" . "<br>" .   $_POST["Name"] . "<br><br>";
echo "Email:" . "<br>" .   $_POST["Email"] . "<br><br>";
echo "Major:" . "<br>" . $_POST["Major"] . "<br><br>";
echo "Comments:" . "<br>"  . $_POST["comments"] . "<br><br>";

echo "Continents Vistited:";
    if(isset($_POST['continent'])) {
      $continents = $_POST['continent'];  

    foreach ($continents as $contValue){
   echo $contValue."<br />";
  }}
?>
</body>
</html>