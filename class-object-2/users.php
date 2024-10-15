<?php
class users
{
    //encapsulamiento de propiedades
    private $name;
    private $email;
    private $type;
    private $password;
    private $status = "Activo";
    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function setPassword(string $password)
    {
        $this->password = $password;
    }
    public function setType(string $type)
    {
        $this->type = $type;
    }
    public function getInfoUser(): string
    {
        $cadena = "";

        $cadena = "<h1>Informacion del usuario</h1><br>
                    <p> Nombre : {$this->name} </p>
                    <p> Email : {$this->email} </p>
                    <p> Tipo : {$this->type} </p>
                    <p> Contraseña : {$this->password} </p>
                    <p> Estado : {$this->status} </p>
                    ";
        return $cadena;
    }
}
