<?php
class product{
    public $merk;
    public $prijs;
    public $type;
    public $kleur;
}

$dewie = new product();
$dewie -> merk="hema" ;
$dewie -> prijs=10;
$dewie -> type="lang" ;
$dewie -> kleur="rood";

$stofzuiger = new product();
$stofzuiger -> merk="aegon";
$stofzuiger -> prijs=50;
$stofzuiger -> type="gfs505";
$stofzuiger -> kleur="grijs";
?>
<h5>dewie</h5>
<?php
echo $dewie -> merk;
echo "<br>";
echo $dewie -> prijs;
echo "<br>";
echo $dewie -> type;
echo "<br>";
echo $dewie -> kleur;
echo "<br>";
echo "<br>";
?>


<h5>stofzuiger</h5>


<?php
echo $stofzuiger -> merk;
echo "<br>";
echo $stofzuiger -> prijs;
echo "<br>";
echo $stofzuiger -> type;
echo "<br>";
echo $stofzuiger -> kleur;
echo "<br>";
?>