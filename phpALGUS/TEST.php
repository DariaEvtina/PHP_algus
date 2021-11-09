<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>PHP algus</title>
</head>
<body>
<?php
echo "<h1>Tere hommikust!</h1>";
$texts="Täna on esimene PHP tund";
echo $texts;
echo "<br>";
echo "<h2>Matemaatika tehed - Mõistatus</h2>";
echo"<h3>Arva ära kaks arvu!</h3>";
$arv1=3;
$arv2=15;
//kahe arvude liitmine"+"
echo "Kui liidame kokku, vastus on ".($arv1+$arv2);
//jagamine "/"
echo "<br>";
echo "Kui esimene avr jagame teise arvuga, siis vastus on ". ($arv2/$arv1);
?>
</body>
<footer>
    <?php
    echo "Täname kuupäev on ".date("d.m.Y");
    echo "<br>";
    echo "Kell on ".date("H: i: s");
    ?>
</footer>
</html>