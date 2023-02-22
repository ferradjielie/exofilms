<?php
require_once('Personne.php');


class Realisateur extends Personne
{

    private array  $_films;

    public function __construct(string $prenom, string $nom, string $sexe, string $datedenaissance)
    {

        parent::__construct($prenom,  $nom,  $sexe,  $datedenaissance);
        $this->_films = [];
    }

    public function ajoutFilm(Film $films)
    {
        $this->_films[] = $films;
    }

    public function afficherFilm () {
        foreach ($this->_films as $film){
            echo $film;
        }
    }


    
    
     public function __toString()
    {
        return parent::__toString() . " " ;
    }
}
