<?php

class Personne {
    protected string $_prenom;
    protected string $_nom;
    protected string $_sexe;
    protected string $_datedenaissance;

    public function __construct (string $prenom, string $nom, string $sexe, string $datedenaissance) {
        $this-> _prenom = $prenom;
        $this-> _nom = $nom;
        $this -> _sexe= $sexe;
        $this -> _datedenaissance= $datedenaissance;

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
/*class Realisateur extends Personne {
   
    private Film $films;
public function __construct (string $prenom, string $nom, string $sexe, string $datedenaissance, Film $films) {

    parent::__construct (string $prenom, string $nom, string $sexe, string $datedenaissance)
    $this ->  films= $films;
}

}



defintions


classe

objet

principe d'encapsulation 


chainage 






















}


*/























?>