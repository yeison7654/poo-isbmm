<?php
require_once 'people.php';
class customer extends people
{

    private $user;
    private $password;
    private $arrProducts;
    public function __construct(string $user, string $password, string $name, string $lastName, string $dni, string $email, string $typeSex)
    {
        $this->setName($name);
        $this->setLastName($lastName);
        $this->setDni($dni);
        $this->setEmail($email);
        $this->setTypeSex($typeSex);
        $this->user = $user;
        $this->password = $password;
    }
    public function setProduccts(array $arrProducts)
    {
        $this->arrProducts = $arrProducts;
    }

    public function infoOrderProductos()
    {
        if ($this->user != "admin" || $this->password != "123456") {
            echo "No tiene acceso";
            die();
        }
        echo $this->getInfoPeople();
        echo "<hr><br>";
        $total = 0;
        foreach ($this->arrProducts as $key => $value) {
            $total += ($value["cant"] * $value["precio"]);
            echo "Producto: " . $value["producto"] . " Cantidad: "
                . $value["cant"] . " Precio: " . $value["precio"] .
                "Sub Total: " . ($value["cant"] * $value["precio"]) . "<br>";
        }
        echo "Total: s/. " . $total;
    }
}
