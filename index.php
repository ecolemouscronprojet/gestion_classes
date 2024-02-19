<?php
require_once('classes/professeur.php');


$professeur1 = new Professeur();
$professeur1->id = 1;
$professeur1->nom = "Lassoie";
$professeur1->prenom = "Samuel";
$professeur1->date_de_naissance = new DateTime();

echo '<pre>';
print_r($professeur1);


echo 'HELLLO';