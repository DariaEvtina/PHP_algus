<?php
// andmed massiivis
$data=[
    "nimi" => "Daria Evtina",
    "aadress"=>"Ümera 95-9, Tallinn",
    "pilt"=>"LOGO-PILT-RUUDUS.png",
    "koduleht" => "https://evtina20.thkit.ee"
];
?>
<h1>Ülesanne 401/var 1</h1>
<p><b>
        <?=$data["nimi"]?>
    </b></p>
<p>
    <i>
        <?=$data["aadress"]?>
    </i>
</p>
<img src="<?=$data["pilt"]?>" alt="pilt">
<br>
<a href="<?=$data["koduleht"]?>" target="_blank">Daria Evtina koduleht</a>
//massiive array funktsioniga
<h1>Ülesanne 401/var 2</h1>
<?php
$array=array("Daria Evtina","Ümera 95-9, Tallinn","LOGO-PILT-RUUDUS.png","evtina20.thkit.ee");
echo "<b>Nimi: ".$array[0]."</b><br>";
echo "<i> Aadreess: ".$array[1]."</i><br>";
echo "<img src='$array[2]' alt='pilt'>";
echo "<a href='https://$array[3]'> Koduleht Daria Evtina</a>";
?>
<br>
<a href="../TEST.php">Tagasi.. Ülesanne</a>
