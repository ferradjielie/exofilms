<?php


class Genre{
    private string $_nomGenre;
    private array  $_films; 

    public function __construct (string $nomGenre) {
        
        $this-> _nomGenre= $nomGenre;
        $this-> _films= []; 
    }
    public function getNomGenre () {
        return $this-> _nomGenre;
    }
    public function getFilms () {
        return $this -> _films;
    }
    public function ajoutFilm (Film $film) {
        $this-> _films []= $film;
        
    }

    public function afficherFilm(){
        foreach ($this->_films as $film) {
              echo $film;
        }
    }
    public function __toString()
    {
        return $this-> _nomGenre. " ". $this->afficherFilm ();
        
    }

}