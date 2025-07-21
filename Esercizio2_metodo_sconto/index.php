<?php

class Prodotto
{
    public $nome;
    public $prezzo;

    public function __construct($nome, $prezzo)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
    }

    public function applicaSconto($percentuale)
    {
        $sconto = $this->prezzo = $this->prezzo * (1 - $percentuale / 100);
        return ['percentuale' => $percentuale, 'valore' => $sconto];
    }
}

$prodotto = new Prodotto("Prodotto 1", 100);
$prezzo_iniziale = $prodotto->prezzo;
echo "Nome: " . $prodotto->nome . "<br>";
echo "Prezzo: " . $prodotto->prezzo . "<br>";
$sconto = $prodotto->applicaSconto(10);
echo "Sconto applicato: " . $sconto['percentuale'] . "%<br>";
echo "Prezzo con sconto: " . $sconto['valore'] . "<br>";
echo "Sconto effettuato: " . $prezzo_iniziale - $sconto['valore'] . "<br>";
?>