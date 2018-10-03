<html>
<body>
<?php
echo "username:" . "<br>" .   $_POST["Name"] . "<br><br>";
echo "Email:" . "<br>" .   $_POST["Email"] . "<br><br>";
echo "Major:" . "<br>" . $_POST["Major"] . "<br><br>";
echo "Comments:" . "<br>"  . $_POST["comments"] . "<br><br>";

echo "Continents Vistited:";
foreach ( $_POST['continents'] as $value ) {
    echo $value;
}
?>
</body>
</html>