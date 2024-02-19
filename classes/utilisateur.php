<?php

abstract class Utilisateur {
    private int $id;
    private string $nom;
    private string $prenom;
    private string $telephone;
    private DateTime $date_de_naissance;
    
    public function __construct($nom, $prenom) {
      $this->nom = $nom;
      $this->prenom = $prenom;
    }

    public function __toString() {
        return $this->nom . ' ' . $this->prenom;
    }


    public function getId(): int {
        return $this->id;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }

    public function getNom(): string {
        return $this->nom;
    }

}