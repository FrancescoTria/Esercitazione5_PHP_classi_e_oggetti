<?php

class Studente
{
    public $nome;
    public $voto;

    public function __construct($nome, $voto)
    {
        $this->nome = $nome;
        $this->voto = $voto;
    }

    public function promosso()
    {
        return $this->voto >= 6;
    }
}

$studente = new Studente("Giulia Verdi", 5);

echo "Studente: " . $studente->nome . "<br>";
echo "Voto iniziale: " . $studente->voto . "<br>";
echo "Promosso? " . ($studente->promosso() ? "Sì" : "No") . "<br><br>";

// Modifica manuale del voto
$studente->voto = 8;

echo "Voto dopo modifica: " . $studente->voto . "<br>";
echo "Promosso? " . ($studente->promosso() ? "Sì" : "No") . "<br>";

?>