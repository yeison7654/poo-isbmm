<?php
require_once "./users.php";
$objUser = new users("Yeison Danner", "yeisoncarhuapoma@gmail.com");
$objUser->setPassword("123");
$objUser->setType("Administrador");
echo $objUser->getInfoUser();
