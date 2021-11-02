<?php
require __DIR__ . "/classes/Movie.php";

$movie1 = new Movie("Serendipity", "Romantico", "Peter Chelsom", "1h 31m", 2001);

// var_dump($movie1);

$movie2 = new Movie("L'attimo fuggente", "Drammatico", "Peter Weir", "2h 8m", 1989);

echo ("<h3>Il titolo del film è: </h3>{$movie1->getTitolo()}");
echo ("<h3>Il titolo del film è: </h3>{$movie2->getTitolo()}");