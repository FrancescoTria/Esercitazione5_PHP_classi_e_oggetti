<?php

class Contatore
{
    private $numero;

    public function __construct($iniziale = 0)
    {
        $this->numero = $iniziale;
    }

    public function incrementa()
    {
        $this->numero++;
    }

    public function valore()
    {
        return $this->numero;
    }
}

$contatore = new Contatore(5);

echo "Valore iniziale: " . $contatore->valore() . "<br>";
$contatore->incrementa();
$contatore->incrementa();
echo "Dopo 2 incrementi: " . $contatore->valore() . "<br>";
$contatore->incrementa();
echo "Dopo un altro incremento: " . $contatore->valore() . "<br>";

?>