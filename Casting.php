<?php 

class Casting {

    private Role $_role;
    private Realisateur $_realisateur;
    private Acteur $_acteur;

    public function __construct (Role $role, Realisateur $realisateur, Acteur $acteur) {
        $this-> _role = $role;
        $this-> _realisateur= $role;
        $this-> _acteur = $acteur; }

        public function getRole () {
            return $this-> _role;
        }
        public function getRealisateur () {
            return $this -> _realisateur;
        }
        public function getActeur () {
            return $this -> _acteur;
        }

        public function __toString () {
            return $this-> _role. " ". $this -> _realisateur. " ". $this-> _acteur;
        }
}

?>