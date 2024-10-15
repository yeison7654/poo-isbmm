<?php
class Animal
{
    //definimos las propiedades del objeto
    public $nombre;
    public $type;
    public $lugar;
    public $peso;
    //definimos el metodo constructor del objeto
    public function __construct(string $name, string $type, string $lugar, float $peso)
    {
        $this->nombre = $name;
        $this->type = $type;
        $this->lugar = $lugar;
        $this->peso = $peso;
    }
    public function info(): string
    {
        $txt = "Animal :<br>
                        Nombre: {$this->nombre}<br>
                        Tipo: {$this->type}<br>
                        Lugar: {$this->lugar}<br>
                        Peso: {$this->peso}";
        return $txt;
    }
}
