<?php
class auto{
    public $merk;
    public $kleur;
    public $type;
    public $uitvoering;
    public $brandstof;
}

$volkswagen = new auto();
$volkswagen -> merk="Volkswagen";
$volkswagen -> kleur="grijs";
$volkswagen -> type="gti";
$volkswagen -> uitvoering="station";
$volkswagen -> brandstof="bezine";

echo $volkswagen->merk;
echo "<br>";
echo $volkswagen->kleur;
echo "<br>";
echo $volkswagen->type;
echo "<br>";
echo $volkswagen->uitvoering;
echo "<br>";
echo $volkswagen->brandstof;
echo "<br>";
?>