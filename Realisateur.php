<?php

class Realisateur {
    
    private Film $_films;
    

    public function __construct (string $prenom, string $nom, string $sexe, string $datedenaissance, Film $films) {

        $this-> _prenom = $prenom;
        $this -> _nom = $nom;
        $this-> _sexe = $sexe;
        $this -> _datedenaissance= $datedenaissance;
        $this-> _films = $films; }


       public function ajoutFilm (Film $films) {
        $this-> _films []= $films;
        foreach ($this->_films as $film);

    }
    public function getPrenom () {
        return $this -> _prenom;

    }
    public function getNom () {
        return $this-> _nom;
    }
    public function getSexe () {
        return $this-> _sexe;
    }
    public function getDatedenaissance () {
        return $this -> _datedenaissance;
    }
    public function __toString()
    {
        return $this-> _prenom. " ". $this-> _nom. " ". $this-> _sexe. " ". $this->_datedenaissance. $this-> _films;

    }

}



















?>