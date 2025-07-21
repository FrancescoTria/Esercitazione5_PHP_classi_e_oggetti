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
}

$prodotto1 = new Prodotto("Prodotto 1", 100);
$prodotto2 = new Prodotto("Prodotto 2", 200);

echo "Nome: " . $prodotto1->nome . "<br>";
echo "Prezzo: " . $prodotto1->prezzo . "<br><br>";
echo "Nome: " . $prodotto2->nome . "<br>";
echo "Prezzo: " . $prodotto2->prezzo . "<br>";

?>