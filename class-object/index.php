<?php
require_once "./animal.php";

$objAnimal1=new Animal("Loro","Ave","Selva","1.50");
echo $objAnimal1->info();
$objAnimal2=new Animal("Loro","Ave","Selva","1.50");
echo $objAnimal2->info();