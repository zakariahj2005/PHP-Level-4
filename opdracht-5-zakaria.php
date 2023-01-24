<?php
class mens{
    public $groote;
    public $kleur;
    public $naam;
    public $gewicht;
}

class hond extends mens{

    public $soort;
    public $leeftijd;
}

$duitse_herder = new hond();
$duitse_herder -> groote="70mc";
$duitse_herder -> kleur="zwart";
$duitse_herder -> naam="max";
$duitse_herder -> gewicht="40kg";
$duitse_herder -> soort="duiste herder";
$duitse_herder -> leeftijd="1 jaar";

class auto extends mens{

    public $merk;
    public $pk;
}

$mercedes = new auto();
$mercedes -> groote="1m";
$mercedes -> kleur="grijs";
$mercedes -> naam="mercedes";
$mercedes -> gewicht="200kg";
$mercedes -> soort="gle";
$mercedes -> pk="200pk";

print_r($duitse_herder);
echo "<br>";
echo "<br>";
print_r($mercedes);
?>