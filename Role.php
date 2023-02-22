<?php
class Role
{
    private string $_role;
    private array $_castings;

    public function __construct(string $role)
    {
        $this->_role = $role;
        $this->_castings = [];
    }

    public function ajouterCasting(Casting $casting){
       ( $this->_castings []= $casting)  ;}
    
    
       public function getRole()
    {
        return $this->_role;
    }
    public function afficherActeur()
    {
        echo "Acteurs ayant incarnés le rôle ".$this->_role . ":<br>"; 
        foreach ($this->_castings as $casting) {
            echo $casting->getActeur()."<br>";
        }
    }

    public function __toString()
    {
        return $this->_role;
    }
    // afficher acteur fonction 
}
