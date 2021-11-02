<?php
require __DIR__ . "/classes/Movie.php";

$movie1 = new Movie("Serendipity", "Commedia, Sentimentale", "Peter Chelsom", "1h 31m", 2001);
$movie2 = new Movie("L'attimo fuggente", "Drammatico", "Peter Weir", "2h 8m", 1989);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="movies">
        <div class="navbar">
            <img src="https://mr.comingsoon.it/img/cs-logo.svg" alt="">
            <ul>
                <li><a href="#">Film <i class="fas fa-angle-down"></i></a></li>
                <li><a href="#">Serie TV <i class="fas fa-angle-down"></i></a></li>
                <li><a href="#">TV <i class="fas fa-angle-down"></i></a></li>
                <li><a href="#">Star <i class="fas fa-angle-down"></i></a></li>
                <li><a href="#">Streaming <i class="fas fa-angle-down"></i></a></li>
                <li><a href="#">Trova Cinema <i class="fas fa-angle-down"></i></a></li>
            </ul>
            <i class="fas fa-search"></i>
        </div>
        <div class="movie1">
            <div class="banner"></div>
            <div class="centered">
                <img src="https://m.media-amazon.com/images/I/71iVvRVUusL._AC_SY606_.jpg" alt="">
                <div class="dettagli">
                    <div class="dati">
                        <?php 
                            echo ("
                            <h2>{$movie1->getTitolo()}</h2><h2> - Quando l'amore è magia</h2>
                            <hr>
                            <h3>Genere:</h3> <h4>{$movie1->getGenere()}</h4>
                            <h3>Regista:</h3><h4>{$movie1->getRegista()}</h4>
                            <h3>Durata:</h3><h4>{$movie1->getDurata()}</h4>
                            <h3>Anno:</h3><h4>{$movie1->getAnno()}</h4>
                            <br>
                            ");
                        ?>
                    </div>
                    <div class="trama">
                        <strong>Serendipity - Quando l'amore è magia</strong> è un film di genere commedia, sentimentale del 2001, diretto da Peter Chelsom, con John Cusack e Kate Beckinsale. Uscita al cinema il 21 dicembre 2001. Durata 90 minuti. Distribuito da Buena Vista International, Miramax Films.
                    </div>
                </div>
            </div>
        </div>

        <div class="movie2">
            <div class="banner2"></div>
            <div class="centered2">
                <img src="https://aforismi.meglio.it/img/film/L-attimo-fuggente.jpg" alt="">
                <div class="dettagli">
                    <div class="dati">
                        <?php 
                            echo ("
                            <h2>{$movie2->getTitolo()}</h2>
                            <hr>
                            <h3>Genere:</h3><h4>{$movie2->getGenere()}</h4>
                            <h3>Regista:</h3><h4>{$movie2->getRegista()}</h4>
                            <h3>Durata:</h3><h4>{$movie2->getDurata()}</h4>
                            <h3>Anno:</h3><h4>{$movie2->getAnno()}</h4>
                            ");
                        ?>
                    </div>
                    <div class="trama">
                        <strong>L'attimo fuggente</strong> è un film di genere drammatico del 1989, diretto da Peter Weir, con Robin Williams e Robert Sean Leonard. Durata 129 minuti. Distribuito da Warner Bros Italia (1989) - Touchstone Home Video.
                    </div>
                    
                </div>
            </div> 
        </div>
    </div>
</body>
</html>