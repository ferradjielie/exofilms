<?php

class Casting
{

    private Role $_role;
    private Film $_film;
    private Acteur $_acteur;

    

    public function __construct(Role $role, Film $film, Acteur $acteur)
    {
        $this->_role = $role;
        $this->_film = $film;
        $this->_acteur = $acteur;
        $this->_film->ajouterCasting($this);
        $this->_role->ajouterCasting($this);
        $this->_acteur->ajouterCasting($this);
       


    }

    public function getRole()
    {
        return $this->_role;
    }
    public function getFilm()
    {
        return $this->_film;
    }
    public function getActeur()
    {
        return $this->_acteur;
    }

    

    public function __toString()

    { 

    }
}

?>