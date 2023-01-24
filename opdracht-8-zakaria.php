<?php

class robot {
    public $naam;
    public $geluid;
    public $voortstuwing;

    public function setSound($i){
        $this -> naam = $i;
    }
    public function getSound(){
        return $this -> naam;
    }
    public function setSound_1($i){
        $this -> geluid = $i;
    }
    public function getSound_1(){
        return $this -> geluid;
    }
    public function setSound_2($i){
        $this -> voortstuwing = $i;
    }
    public function getSound_2(){
        return $this -> voortstuwing;
    }
}


$wally = new Robot();
$wally -> naam = "wally";
$wally -> geluid = "beep";
$wally -> voortstuwing = "lopend";

$wally -> setSound("boop");
echo $wally -> geluid;
echo $wally -> getSound();
echo "<br>";

$wolly = new Robot();
$wolly -> naam = "wolly";
$wolly -> geluid = "boop";
$wolly -> voortstuwing = "vliegend";

$wolly -> setSound("beep");
echo $wolly -> geluid;
echo $wolly -> getSound();
echo "<br>";


?>