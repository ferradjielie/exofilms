<?php

class Acteur extends Personne {
    public function __construct (string $prenom, string $nom, string $sexe, string $datedenaissance) {

        parent::__construct ( $prenom,  $nom,  $sexe,  $datedenaissance);
        
    }

      

        public function __toString () {
            return parent ::__toString();

        }



}




?>