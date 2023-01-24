<?php
class scooter{
    public $kleur;
    public $merk;
    public $inhoudtank;

    public function checkinhoudtank(){
        if($this -> inhoudtank >0){
            echo "de tank is vol";
        }
        else{
            echo "de tank is leeg";
        }   
    }
}

$piago = new scooter();
$piago -> kleur="rood";
$piago -> merk="piago";
$piago -> inhoudtank="6";
$piago -> checkinhoudtank();

$peugeot = new scooter();
$peugeot -> kleur="zwart";
$peugeot -> merk="peugeot";
$peugeot -> inhoudtank="7";
$peugeot -> checkinhoudtank();

?>