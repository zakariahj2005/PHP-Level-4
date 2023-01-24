<?php
include 'resultaat-formulier-zakaria.php';
?>

<!DOCTYPE html>
<html>
<head>
<style>

* {
  box-sizing: border-box;
}

body {
  background-color: (210, 210, 210) ;
}

.welkom_text{
  color: black;
}

.antwoord{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  background-color: #787878
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  color: black; 
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: rgb(120, 120, 120);
}

.container {
  border-radius: 5px;
  background-color: rgb(210, 210, 210);
  padding: 20px;
}

.col-25 {
  float: left;
  width: 80%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2 class="welkom_text">reisadvies</h2>
<p class="welkom_text">Vul al jouw gevens in en ondek hoe lang jij moet reizen!</p>

<div class="antwoord">
<?php
if (isset($_POST['Submit'])){
echo $message;
}
?>
  <br>
  rijzen met de scooter duurt:
  <?php
  if (isset($_POST['Submit'])){
  echo $tijdscooter;
  }
  ?>
  min lang!
  <br><br>
  rijden met de fiets duurt:
  <?php
  if (isset($_POST['Submit'])){
  echo $tijdFiets;
  }
  ?>
  min lang!
  
</div>
<?php
?>
<div class="container">
<form method="POST">
  <div class="row">
    <div class="col-25">
      <label for="a">lengte in km</label>
    </div>
    <div class="col-75">
      <input type="text" id="a" name="lengte" placeholder="voer het aantal km">
      <label for="a">vertraging door file (in minuten)</label>
      <input type="text" id="a" name="vertraging" placeholder="aantal min vertraging door file">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="b">fiets</label>
    </div>
    <div class="col-75">
      <input type="text" id="b" name="bandenspaning_fiets" placeholder="Bandenspanning Fiets">
      <input type="radio" id="b" name="soort_fiets" value="15">Niet Elektrische (fietssnelheid = 15km/u) 
      <br>
      <input type="radio" id="b" name="soort_fiets" value="25"> Elektrische (fietssnelheid = 25km/u)
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="scooter">Scooter</label>
    </div>
    <div class="col-75">
    <label for="c">bandenspanning (in%):</label>
    <input type="text" id="c" name="bandenspaning_scooter" placeholder="bandenspanning Scooter">
    <br>
    <label for="c">snelheid:</label>
      <select id="scooter soort" name="scooter_soort">
        <option value="25">25 KM/u (snorscooter)</option>
        <option value="45">45 KM/u (bromscooter)</option>
      </select>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit" name='Submit'>
  </div>
  </form>
</div>



</body>
</html>


