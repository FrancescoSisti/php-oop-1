<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP1 - Movie Class</title>
</head>

<body>
    <?php
    class Movie
    {
        //? Variabili d'istanza
        public $titolo;
        public $regista;
        public $anno;
        public $valutazione;

        //! Costruttore
        public function __construct($titolo, $regista, $anno)
        {
            $this->titolo = $titolo;
            $this->regista = $regista;
            $this->anno = $anno;
            $this->valutazione = 0;
        }

        // Metodo per impostare la valutazione
        public function setValutazione($voto)
        {
            if ($voto >= 0 && $voto <= 10) {
                $this->valutazione = $voto;
            } else {
                echo "La valutazione deve essere compresa tra 0 e 10.";
            }
        }

        //! Metodo per ottenere la valutazione
        public function getValutazione()
        {
            return $this->valutazione;
        }

        // Metodo per stampare le informazioni del film
        public function stampaInfo()
        {
            echo "<h2>{$this->titolo}</h2>";
            echo "<p>Regista: {$this->regista}</p>";
            echo "<p>Anno: {$this->anno}</p>";
            echo "<p>Valutazione: {$this->valutazione}/10</p>";
        }
    }

    // Istanziazione di due oggetti Movie
    $film1 = new Movie("Inception", "Christopher Nolan", 2010);
    $film1->setValutazione(9);

    $film2 = new Movie("La La Land", "Damien Chazelle", 2016);
    $film2->setValutazione(8);

    // Stampa delle informazioni dei film
    $film1->stampaInfo();
    echo "<hr>";
    $film2->stampaInfo();
    ?>
</body>

</html>