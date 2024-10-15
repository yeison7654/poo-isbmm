<?php
class Coche{
    private $marca;
    private $modelo;
    private $año;
    public function __construct(string $marca,string $modelo,string $año){

        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->año=$año;
    }
    public function getDetalles():string{
        $cadena="";
        $cadena = "<h1>INFORMACION COCHE</h1><br>
        <p>MARCA : {$this->marca}</p>
        <p>MODELO : {$this->modelo}</p>
        <p>AÑO : {$this->año}</p>";
        return $cadena;
    }
}
    

    