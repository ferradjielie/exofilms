<?php

class Personne {
    private string $_prenom;
    private string $_nom;
    private string $_sexe;
    private string $_datedenaissance;

    public function __construct (string $prenom, string $nom, string $sexe, $datedenaissance) {
        $this-> $prenom -> _prenom;
        $this-> $nom -> _nom;
        $this -> $sexe-> _nom;
        $this -> $datedenaissance-> _datedenaissance;

    }

    public function getPrenom () {
      return $this-> _prenom;

    }
    public function getNom () {
        return $this-> _nom;
    }
    public function getSexe () {
        return $this-> _sexe;
    }
    public function getDatedenaissance () {
        return $this-> _datedenaissance;
    }

    public function __toString () {
        return $this -> _prenom. " ". $this-> _nom. " ". $this-> _sexe. " ". $this-> _datedenaissance;
    }
}


























?>