<?php
require_once __DIR__ . "/models/genre.php";
require_once __DIR__ . "/models/movie.php";

$fantasy = new Genre("Fantasy");
$horror = new Genre("Horror");
$comedy = new Genre("Comedy");

// Istanziazione di due oggetti Movie
$film1 = new Movie("Inception", "Christopher Nolan", 2010, $fantasy);
$film1->setValutazione(9);

$film2 = new Movie("La La Land", "Damien Chazelle", 2016, $comedy);
$film2->setValutazione(8);

// $movies = [$film1, $film2];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP1 - Movie Class</title>
</head>

<body>
    <h1><?= $film1->titolo; ?> </h1>
    <h2> di <?= $film1->regista ?> del <?= $film1->anno ?></h2>
    <h2>Con un voto di <?= $film1->valutazione ?>/10</h2>

    <h1><?= $film2->titolo; ?> </h1>
    <h2> di <?= $film2->regista ?> del <?= $film2->anno ?></h2>
    <h2>Con un voto di <?= $film2->valutazione ?>/10</h2>
    <h2>Genere <?= $film2->genere->name ?></h2>

    <?php
    //Stampa delle informazioni dei film
    // $film1->stampaInfo();
    // echo "<hr>";
    // $film2->stampaInfo();
    ?>
</body>

</html>