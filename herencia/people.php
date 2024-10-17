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
    public function getInfoPeople()
    {
        return "Nombre: " . $this->name . "<br> Apellido: " . $this->lastName . "<br> DNI: " . $this->dni . "<br> Email: " . $this->email . "<br> Sexo: " . $this->typeSex;
    }
}
