<?php
require_once "./coche.php";

$objCoche = new Coche(marca: "toyota", modelo: "rave", año: "2024");
echo $objCoche->getDetalles();
