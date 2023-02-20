<?php




class Film {
    private Genre $_genre;
    private string $_titre;
    private DateTime $_dateDeSortie;
    private int $_duree;
    private Realisateur $_realisateur;

    private string $_synopsis;

    public function __construct (Genre $genre, string $titre, DateTime $dateDeSortie, int $duree, Realisateur $realisateur, string $synopsis) 
     
    {
    

        $this-> _genre = $genre;
        $this-> _titre= $titre;
        $this-> _dateDeSortie= $dateDeSortie;
        $this-> _duree= $duree;
        $this->_realisateur= $realisateur;
        $this->_synopsis = $synopsis;
        $realisateur->ajoutFilm($this); // creer la fonction dans  class realisateur
        $genre->ajoutFilm($this);   // idem pour genre
    }
    public function getGenre (){
        return $this-> _genre;

    }
public function getTitre () {
    return $this-> _titre ;

}
public function getDatedesortie () {
    return $this-> _dateDeSortie;
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
public function __toString () {
    return $this-> _genre. " ". $this-> _titre. " ". $this->_dateDeSortie. " ". $this->_duree. " ". $this-> _realisateur. " ". $this-> _synopsis;
}



}



















































?>