<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ülesane 405</title>
    <style>
        table,td{
            border:solid 2px black;
            padding:20px;
            text-align:center;
        }
    </style>
</head>
<body>
<h1>Ülesane 405 - Korrutustabel 2 tsükliga</h1>
<?php
    echo "<table>";
    for($i=1;$i<=10;$i++){
        echo "<tr>";
        for($l=1;$l<=10;$l++) {
            $val = $i * $l;
            echo "<td>".$val."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>
<a href="../TEST.php">Tagasi.. Ülesanne</a>

</body>
</html>
