<?php

class Professeur {
    private int $id;
    private string $nom;
    private string $prenom;
    private string $telephone;
    private DateTime $date_de_naissance;
    
    public function __construct($nom, $prenom) {
      $this->nom = $nom;
      $this->prenom = $prenom;
    }


    public function getId(): int {
        return $this->id;
    }

}