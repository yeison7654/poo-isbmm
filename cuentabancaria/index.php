<?php
require_once "./cuentabancaria.php";

$obj = new Cuentabancaria(titular: "Yeison Danner");
$obj->depositar(1000);
echo $obj->mostrar_saldo();
$obj->retirar(100);
echo $obj->mostrar_saldo();
$obj->depositar(2000);
echo $obj->mostrar_saldo();
