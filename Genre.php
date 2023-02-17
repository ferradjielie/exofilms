<?php




class Genre {
    private string $_genre;
    private string $_titre;
    private string $_datedesortie;
    private int $_duree;
    private string $_realisateur;
    private string $_synopsis;

    public function __construct (string $genre, string $titre, string $datedesortie, int $duree, string $realisateur, string $synopsis) 
     
    {
    

        $this-> _genre = $genre;
        $this-> _titre= $titre;
        $this-> _datedesortie= $datedesortie;
        $this-> _duree= $duree;
        $this->_realisateur= $realisateur;
        $this->_synopsis = $synopsis;

    }
    public function getGenre (){
        return $this-> _genre;

    }
public function getTitre () {
    return $this-> _titre ;

}
public function getDatedesortie () {
    return $this-> _datedesortie;
}
public function getDuree () {
    return $this-> _duree;

} 
public function getRealisateur () {
    return $this-> _realisateur;
}
public function getSynopsis () {
    return $this -> _synopsis;
}



}



















































?>