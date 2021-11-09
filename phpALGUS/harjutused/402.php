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
$i1=1;
while($i1<=20){
    echo "<input type='text' id=t'$i1' name='text[]' >";
    echo "<label for='$i1'>cell ".$i1."</label>"."<br>";
    $i1++;
}
?>
<h2>2. 20 Radionupud sükliga</h2>
<?php
$i2=1;
while($i2<=20){
    echo "<input type='radio' id=r'$i2' name='radio[]' value='$i2'>";
    echo "<label for='$i2'>radio ".$i2."</label>"."<br>";
    $i2++;
}
?>
<a href="../TEST.php">Tagasi.. Ülesanne</a>

</body>
</html>
