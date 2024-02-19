<?php
require_once('utilisateur.php');
require_once('eleve.php');

class Professeur extends Utilisateur
{
    private array $eleves = [];

    public function totalEleves()
    {
        return count($this->eleves);
    }
}
