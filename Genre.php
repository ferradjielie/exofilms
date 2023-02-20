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
    public function ajoutFilm (Film $films) {
        $this-> _films []= $films;
        foreach ($this->_films as $film);


    }
    public function __toString()
    {
        return $this-> _nomGenre. $this-> _films= [];
        
    }

}