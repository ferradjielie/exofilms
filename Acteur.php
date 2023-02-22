<?php

class Acteur extends Personne {
    private array $_castings;

    public function __construct (string $prenom, string $nom, string $sexe, string $datedenaissance) {
        $this->_castings = [];
        parent::__construct ( $prenom,  $nom,  $sexe,  $datedenaissance);
        
    }

      
    public function ajouterCasting(Casting $casting){
        $this->_castings []= $casting;

    }
    

    public function afficherFilmographie () {
        foreach ($this->_castings as $casting) {
            echo "<br>"; echo $casting->getFilm();
        }
    }
        
    public function __toString () {
            return parent ::__toString();

        }



}




?>