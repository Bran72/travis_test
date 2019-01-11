<?php
require_once 'vendor/autoload.php';

//use Facture;
require 'src/Facture.php';

$facture = new Facture\Facture();
$ligne1 = $facture->setLigneFacturation('iPhone', 1200);
$ligne2 = $facture->setLigneFacturation('MacBook Pro', 2800);
$ligne3 = $facture->setLigneFacturation('iMac', 2500);

echo '<h1>FACTURE</h1>';

foreach ($facture->getLigneFacturation() as $ligne){
    echo $ligne['description'].': '.$ligne['valeur'].'<br>';
}

echo '<br>';

echo 'Total de la Facture: '.$facture->valeurTotale();
