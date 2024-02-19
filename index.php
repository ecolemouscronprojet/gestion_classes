<?php
require_once('classes/professeur.php');


$samuel = new Professeur('Lassoie', 'Samuel');
$ahmed = new Professeur('Sbai', 'Ahmed');


echo '<pre>';
print_r($samuel);
print_r($ahmed);


// echo 'HELLLO';