<?php
class computer{
    public $merk;
    public $hdd_capacity;
    public $memory;
    public $cpu;
    public $gpu;
    public $color;
}

$msi = new computer();
$msi -> merk="msi";
$msi -> hdd_capacity="10";
$msi -> memory="10";
$msi -> cpu ="amd ryzen 9";
$msi -> gpu="3090 ti";
$msi -> color="zwart";

echo $msi -> merk;
echo "<br>";
echo $msi -> hdd_capacity;
echo "<br>";
echo $msi -> memory;
echo "<br>";
echo $msi -> cpu;
echo "<br>";
echo $msi -> gpu;
echo "<br>";
echo $msi -> color;
echo "<br>";
?>