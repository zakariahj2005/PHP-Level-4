<?php


  class weg{
      public $lengte;
      public $vertraging;

      public function setWeg($lengte, $vertraging){
            $this->lengte = $lengte;
            $this->vertraging = $vertraging;
      }
  }

 class voertuig extends weg{
     public $type;
     public $snelheid;
     public $bandenspanning;

     public function setVoertuig($snelheid, $bandenspanning, $type){
        $this->snelheid = $snelheid;
        $this->bandenspanning = $bandenspanning;
        $this->type = $type;
     }

     public function getWeg(){
        $weg['lengte']= $this->lengte;
        $weg['vertraging']= $this->vertraging;

        return $weg;
     }

     public function berekenEchteSnelheid(){
        $percentageBandenspanning = $this->bandenspanning / 100;
        $echteSnelheid = $percentageBandenspanning * $this->snelheid;

        return $echteSnelheid;
     }

     public function berekenTijd(){
        $echteSnelheid = $this -> berekenEchteSnelheid();
        if($this->type == 'fiets'){
        $tijd = (60 / $echteSnelheid * $this -> lengte);
        }else
        $tijd = (60 / $echteSnelheid * $this -> lengte) + $this -> vertraging;

        return $tijd;

     }
 }

if (isset($_POST['Submit'])){
$fiets = new voertuig();
$fiets->setWeg($_POST['lengte'], $_POST['vertraging'],);
$fiets->setVoertuig($_POST['soort_fiets'], $_POST['bandenspaning_fiets'] , 'fiets');
$tijdFiets = $fiets->berekenTijd();

$scooter = new voertuig();
$scooter->setWeg($_POST['lengte'], $_POST['vertraging']);
$scooter->setVoertuig($_POST['scooter_soort'], $_POST['bandenspaning_scooter'] , 'scooter');
$tijdscooter = $scooter->berekenTijd();

//als fiets sneller is dan scooter
if($tijdFiets < $tijdscooter){
    $message = 'fiets is sneller';
}else{
    $message = 'scooter is sneller';
}
}




?>