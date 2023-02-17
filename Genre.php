<?php


class Genre{
    private string $_nomgenre;
    private array  $_films; 

    public function __construct (string $nomgenre) {
        
        $this-> _nomgenre= $nomgenre;
        $this-> _films= []; 
    }
    public function getNomgenre () {
        return $this-> _nomgenre;
    }
    public function getFilms () {
        return $this -> _films;
    }
    public function ajouterFilm (Film $films) {
        $this-> _films []= $films;
        foreach ($this->_films as $film);


    }
    public function __toString()
    {
        return $this-> _nomgenre. $this-> _films= [];
        
    }

}