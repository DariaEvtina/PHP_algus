<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ülesanne 402</title>
</head>
<body>
<h1>Ülesanne 402</h1>
<h2>1.20 Checkbox tsükliga</h2>
<?php
    $i=1;
    while($i<=20){
        echo "<input type='checkbox' id='$i' name='box[]' value='$i'>";
        echo "<label for='$i'>box ".$i."</label>"."<br>";
        $i++;
    }
?>
<h2>2. 20 Tekstkasti sükliga</h2>
<?php
$a=1;
$i1=21;
while($i1<=40){
    echo "<input type='text' id='$i1' name='text[]' >";
    echo "<label for='$i1'>tekstkast ".$a."</label>"."<br>";
    $a++;
    $i1++;
}
?>
<h2>2. 20 Radionupud sükliga</h2>
<?php
$b=1;
$i2=41;
while($i2<=60){
    echo "<input type='radio' id='$i2' name='radio[]' value='$b'>";
    echo "<label for='$i2'>radionup ".$b."</label>"."<br>";
    $b++;
    $i2++;
}
?>
<a href="../TEST.php">Tagasi.. Ülesanne</a>

</body>
</html>