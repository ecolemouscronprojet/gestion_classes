<?php
require_once('classes/professeur.php');
require_once('classes/eleve.php');


$samuel = new Professeur('Lassoie', 'Samuel');
$eleve1 = new Eleve('TOTO', 'ROGER');


echo $samuel->totalEleves() . ' élève(s)';
