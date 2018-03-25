<?php

require 'voiture.php';

$audi = new voiture("Audi", "TT", "rouge", "550000", "100", "1 POJ 751", "Belgique", "France", "Allemagne", "2009");
$audi->nom ='Audi';
//echo $audi->nom;
$audi->nom();
$audi->modele();
$audi->kilometre();
$audi->poid();
$audi->immatriculation();
$audi->datecirculation();
// $audi->paysbe();
// $audi->paysfr();
// $audi->paysde();
// $audi->couleur();
echo "<br>-------------<br>";

//$mercedes = new voiture("vw", "golf", "champagne", "350 000", "1 Tonne 8");
//$mercedes->nom = 'Vw';
//echo $mercedes->nom;

// var_dump($audi, $mercedes);

?>