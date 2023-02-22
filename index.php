<?php


include_once ('Realisateur.php');
include_once ('Genre.php');
include_once ('Film.php');
include_once ('Personne.php');
include_once ('Casting.php');
include_once ('Acteur.php');
include_once ('Role.php');

$genre = new Genre ("Marvel");
$genre2= new Genre ("Drame");

$realisateur= new Realisateur ("Sam", "Raimi","Masculin","23/10/1959" );
$realisateur2 = new Realisateur ("Baz", "Luhrmann", "Masculin","17/09/1962");

$role = new Role ("Spider-Man");
$roleExemple = new Role ("Exmple");
$role2 = new Role ("Nick Carraway");

$acteur = new Acteur ("Tobey", "Maguire", "Masculin", "27/06/1975");

$acteur2 = new Acteur ("Tom", "Holland", "Masculin","01/06/1996");

$film = new Film ($genre, "Spider-Man 1",new DateTime("2002-06-12"),121,$realisateur,"Orphelin, Peter Parker est élevé par sa tante May et son oncle Ben dans le borough de Queens à New York. <br>
Il est victime d'humiliations de la part de ses camarades de lycée, sauf de son meilleur ami Harry Osborn, qui le défend.<br> Après avoir été mordu par une araignée génétiquement modifiée, 
qui s'était échappée d'un laboratoire qu'il visitait avec sa classe, il se découvre des pouvoirs surhumains.");
$film2 = new Film ($genre, "Spider-Man 2",new Datetime("2004-07-14"), 127, $realisateur, "Cela fait deux ans que Peter Parker passe son temps entre ses cours, ses loisirs et à lutter contre les malfaiteurs sous l'identité de Spider-Man. <br> 
Mary Jane Watson doit bientôt épouser John Jameson, le fils de J. Jonah Jameson (le rédacteur en chef du Daily Bugle).<br> De son côté, 
Harry Osborn cherche toujours à se venger de l'homme-araignée qu'il tient pour responsable de la mort de son père, Norman Osborn.");
echo "<br>";

$film3= new Film ($genre2, "Gatsby le Magnifique", new DateTime ("2013-05-15"),142,$realisateur2,"rftyuiuytr");

$castingFilm1 = new Casting ($role,$film, $acteur);
$castingFilm2 = new Casting ($role,$film2, $acteur2);
echo "<br>";
$castingFilm3 = new Casting ($role2, $film3,$acteur);










// echo $film;

// echo "<br>";
// echo "<br>";

// echo $film2;
// echo "<br>";
// echo "<br>";


//echo $acteur->afficherFilmographie();
echo "<br>";
echo "<br>";

echo $role -> afficherActeur();

echo $realisateur-> afficherFilm();

//afficher grace à var dump

// ne pas oublier de creer une classe personne qui aura les memes éléments que realisateur et acteur et les class rea et acteur hériterons de class Personne

//





?>