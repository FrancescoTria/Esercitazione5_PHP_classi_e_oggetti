<?php

class Libro
{
    public $titolo;
    public $autore;
    public $prezzo;

    public function __construct($titolo, $autore, $prezzo)
    {
        $this->titolo = $titolo;
        $this->autore = $autore;
        $this->prezzo = $prezzo;
    }

    public function scheda()
    {
        return "Titolo: $this->titolo, Autore: $this->autore, Prezzo: $this->prezzo euro";
    }
}

$libro = new Libro("Il nome della rosa", "Umberto Eco", 15.50);
echo $libro->scheda();

?>