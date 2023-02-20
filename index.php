<?php


include ('Realisateur.php');
include ('Genre.php');
include ('Film.php');
include ('Personne.php');

$genre = new Genre ("Marvel");

$film = new Film ($genre, "Spiderman","12/06/2002",121,$realisateur,"dghgf");
$film2 = new Film ($genre, "Spiderman 2","14/07/2004", 127, $realisateur, "zgfrert");



$realisateur= new Realisateur ("Sam", "Raimi","Masculin","23/10/1959" ,$film);

// ne pas oublier de creer une classe personne qui aura les memes éléments que realisateur et acteur et les class rea et acteur hériterons de class Personne







?>