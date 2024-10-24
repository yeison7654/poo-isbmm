<?php
abstract class Forma
{
    private $tipo;
    /*
    * Funcion abstracta para calcular el area de una forma geometrica
    * Debe se implementado en las clases que hereden de Forma
    */
    abstract public function calcularArea();

    /*
    *Metodo que devuelve el tipo de la forma
    */
    public function getTipo()
    {
        return "Soy una forma geometrica : {$this->tipo}";
    }
    /**
     * Insertar el tipo de la forma
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
}
