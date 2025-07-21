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

$studente1 = new Studente("Mario Rossi", 7);
$studente2 = new Studente("Luca Bianchi", 5);

echo "Studente: " . $studente1->nome . " - Voto: " . $studente1->voto . " - Promosso? " . ($studente1->promosso() ? "Sì" : "No") . "<br>";
echo "Studente: " . $studente2->nome . " - Voto: " . $studente2->voto . " - Promosso? " . ($studente2->promosso() ? "Sì" : "No") . "<br>";

?>