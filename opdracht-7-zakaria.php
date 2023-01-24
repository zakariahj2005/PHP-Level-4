<?php

class lamp{
    public $kleur = "geel";
    public $helderheid;
    private $isAan;

    public function setStatus($status){
        $this->isAan=$status;
        }
    

}


$woonkamerLamp = new lamp();
$woonkamerLamp->kleur = "rood";
$woonkamerLamp->helderheid = "zacht";
//$woonkamerLamp->isAan;
$woonkamerLamp->setStatus("aan");



$keukenLamp = new lamp();
$keukenLamp->kleur = "wit";
$keukenLamp->helderheid = "vel";
//$keukenLamp->isAan;
$keukenLamp->setStatus("uit");


$woonkamerLamp->setStatus("uit");
$keukenLamp->setStatus("aan");
?>