<?php
require_once("./circulo.php");
require_once("./rectangulo.php");

$objCirculo = new Circulo();
echo $objCirculo->getTipo() . "<br>";
echo $objCirculo->calcularArea();
echo "<br>";
$objRectangulo = new Rectangulo();
echo $objRectangulo->getTipo() . "<br>";
echo $objRectangulo->calcularArea();
echo "<br>";
