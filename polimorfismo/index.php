<?php
require_once('./circulo.php');
require_once('./rectangulo.php');
$objCirculo = new Circulo();
echo $objCirculo->calcularArea();
echo "<br>";
$objRectangulo = new Rectangulo(5, 10);
echo $objRectangulo->calcularArea();
