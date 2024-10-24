<?php
require_once("./forma.php");
class Circulo extends Forma
{
    private $radio;
    public function __construct($radio)
    {
        $this->radio = $radio;
        $this->setTipo("Circulo");
    }

    public function calcularArea()
    {
        return pi() * pow($this->radio, 2);
    }
}
