<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ülesanne 403</title>
</head>
<body>
<h1>Ülesanne 403</h1>
<?php
$varved=array('DarkGoldenRod','DarkSlateGray','GoldenRod','GreenYellow','Ivory','Indigo','LightGreen','Maroon','Olive','Navy','OrangeRed','PaleVioletRed','RoyalBlue','RosyBrown','DarkViolet');
for($i =0;$i<15;$i++){
    echo "<span style='color: $varved[$i]'> $varved[$i] </span>";
}
?>
<a href="../TEST.php">Tagasi.. Ülesanne</a>

</body>
</html>
