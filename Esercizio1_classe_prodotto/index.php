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

$prodotto = new Prodotto("Prodotto 1", 100);
echo $prodotto->nome;
echo $prodotto->prezzo;
?>