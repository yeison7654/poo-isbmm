<?php
require_once './libro.php';
$objLibro = new Libro();

echo '<h1>Libro</h1>';
$objLibro->setTitulo('El señor de los anillos');
$objLibro->setAutor('J.R.R. Tolkien');
$objLibro->setPrecio(100);
echo '<p>Titulo: ' . $objLibro->getTitulo() . '</p>';
echo '<p>Autor: ' . $objLibro->getAutor() . '</p>';
echo '<p>Precio: ' . $objLibro->getPrecio() . '</p>';
