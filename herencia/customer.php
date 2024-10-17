<?php
require_once 'people.php';
class customer extends people
{

    private $user;
    private $password;
    private $arrProducts;
    public function __construct()
    {
        $this->setName("Yeison");
        $this->setLastName("Carhuapoma Dett");
        $this->setDni("71846271");
        $this->setEmail("yeison@gmail.com");
        $this->setTypeSex("Masculino");
        echo  $this->getInfoPeople();
    }
}
