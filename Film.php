<?php




class Film
{

    private Genre $_genre;
    private string $_titre;
    private DateTime $_dateDeSortie;
    private int $_duree;
    private Realisateur $_realisateur;

    private string $_synopsis;

    private array $_castings;

    public function __construct(Genre $genre, string $titre, DateTime $dateDeSortie, int $duree, Realisateur $realisateur, string $synopsis)

    {


        $this->_genre = $genre;
        $this->_titre = $titre;
        $this->_dateDeSortie = $dateDeSortie;
        $this->_duree = $duree;
        $this->_realisateur = $realisateur;
        $this->_synopsis = $synopsis;
        $realisateur->ajoutFilm($this); // creer la fonction dans  class realisateur
        $genre->ajoutFilm($this);   // idem pour genre
    }
    public function getGenre()
    {
        return $this->_genre;
    }
    public function getTitre()
    {
        return $this->_titre;
    }
    public function getDatedesortie()
    {
        return $this->_dateDeSortie;
    }
    public function getDuree()
    {
        return $this->_duree;
    }
    public function getRealisateur()
    {
        return $this->_realisateur;
    }
    public function getSynopsis()
    {
        return $this->_synopsis;
    }

    public function ajouterCasting(Casting $casting)
    {
        $this->_castings[] = $casting;
    }

    public function afficherCasting()
    {
        foreach ($this->_castings as $casting) {
            echo $casting;
        }
    }


    public function __toString()
    {
        return  " " . $this->_titre . ":" . " (" . $this->_dateDeSortie->format("d/m/Y") . ") <br> <br>Genre:" . " " . $this->_genre->getNomGenre() . "<br> <br>" . "Durée:" . " " . $this->_duree . " " . "min " . "<br> <br>" . "Realisateur:" . " " . $this->_realisateur->getPrenom() . " " . $this->_realisateur->getNom() . "<br> <br>" . " " . "Synopsis:" . " " . $this->_synopsis. "<br>";
    }
}
