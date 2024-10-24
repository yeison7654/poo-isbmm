<?php
class Libro
{
    private $titulo;
    private $autor;
    private $precio;

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }
    public function getAutor()
    {
        return $this->autor;
    }
    public function setPrecio($precio)
    {
        if ($precio > 0) {
            $this->precio = $precio;
        }
    }
    public function getPrecio()
    {
        return $this->precio;
    }
}
