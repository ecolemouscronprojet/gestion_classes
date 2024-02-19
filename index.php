<?php
require_once('classes/professeur.php');
require_once('classes/eleve.php');


$samuel = new Professeur('Lassoie', 'Samuel');
$ahmed = new Professeur('Sbai', 'Ahmed');
$eleve1 = new Eleve('TOTO', 'ROGER');

$samuel->ajoutEleve($ahmed);
$samuel->ajoutEleve($eleve1);


echo '<pre>';
print_r($samuel);

echo $samuel->totalEleves() . ' élève(s)';
