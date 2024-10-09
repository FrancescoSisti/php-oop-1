<?php class Movie
{
    //? Variabili d'istanza
    public $titolo;
    public $regista;
    public $anno;
    public $valutazione;
    public $genere;

    //! Costruttore
    public function __construct($titolo, $regista, $anno, Genre $genere)
    {
        $this->titolo = $titolo;
        $this->regista = $regista;
        $this->anno = $anno;
        $this->valutazione = 0;
        $this->genere = $genere;
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
