<?php
require_once 'customer.php';
//creando un objeto de la clase customer
$customer = new customer("admin", "123456", "Yeison Danner", "Sanchez", "741258963", "yeison@gmail.com", "Masculino");
$customer->setProduccts(
    [
        array(
            "cant" => 2,
            "producto" => "leche",
            "precio" => 2.5,
        ),
        array(
            "cant" => 4,
            "producto" => "Galletas",
            "precio" => 0.5,
        ),
        array(
            "cant" => 12,
            "producto" => "Ceverzas",
            "precio" => 6,
        )
    ]
);

$customer->infoOrderProductos();
