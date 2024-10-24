<?php
require_once("./forma.php");
class Rectangulo extends Forma{
    private $base;
    private $altura;
    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
        $this->setTipo("Rectangulo");
    }
    public function calcularArea(){
        return $this->base * $this->altura;
    }
}