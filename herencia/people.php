<?php
class people
{
    private $name;
    private $lastName;
    private $dni;
    private $email;
    private $typeSex;
    public function __construct() {}
    /*
    get y set de los atributos o properties
    */
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    public function getDni()
    {
        return $this->dni;
    }
    public function setDni($dni)
    {
        $this->dni = $dni;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getTypeSex()
    {
        return $this->typeSex;
    }
    public function setTypeSex($typeSex)
    {
        $this->typeSex = $typeSex;
    }
    public function getInfo()
    {
        return "Nombre: " . $this->name . " Apellido: " . $this->lastName . " DNI: " . $this->dni . " Email: " . $this->email . " Sexo: " . $this->typeSex;
    }
}
