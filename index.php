<?php


include_once ('Realisateur.php');
include_once ('Genre.php');
include_once ('Film.php');
include_once ('Personne.php');
include_once ('Casting.php');
include_once ('Acteur.php');
include_once ('Role.php');

$genre = new Genre ("Marvel");

$realisateur= new Realisateur ("Sam", "Raimi","Masculin","23/10/1959" );

$film = new Film ($genre, "Spiderman",new DateTime("2002-06-12"),121,$realisateur,"dghgf");
$film2 = new Film ($genre, "Spiderman 2",new Datetime("2004-07-14"), 127, $realisateur, "zgfrert");

//afficher grace à var dump

// ne pas oublier de creer une classe personne qui aura les memes éléments que realisateur et acteur et les class rea et acteur hériterons de class Personne







?>