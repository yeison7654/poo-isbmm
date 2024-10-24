<?php
require_once('./forma.php');
class Rectangulo implements Forma
{
    private $base;
    private $altura;
    public function __construct($base = 0, $altura = 0)
    {
        $this->base = $base;
        $this->altura = $altura;
    }
    public function calcularArea()
    {
        return $this->base * $this->altura;
    }
    
}
