<?php

use function PHPSTORM_META\elementType;

class Cuentabancaria
{
    private $saldo;
    private $titular;
    private $statusOperacion;
    public function __construct(string $titular)
    {
        $this->titular = $titular;
        $this->saldo = 100;
    }

    public function depositar(float $saldo)
    {
        $oldSaldo = $this->saldo;
        $this->saldo += $saldo;
        $this->statusOperacion = "Se acaba de depositar $saldo S/. 
                                    <br> Saldo anterior:  $oldSaldo<br>
                                    Saldo Actual : {$this->saldo}";
    }
    public function retirar(float $retiro)
    {
        if ($this->saldo > 0 && $this->saldo >= $retiro) {
            $oldSaldo = $this->saldo;
            $this->saldo -= $retiro;
            $this->statusOperacion = "Se acaba de retirar $retiro S/. <br> Saldo anterior:  $oldSaldo<br>Saldo Actual : {$this->saldo}";
        }else{
            $this->statusOperacion ="Se intento retirar $retiro, Ocurrio un error inesperado";
        }
    }
    public function mostrar_saldo()
    {
        $cadena = "<h1>Cuenta bancaria</h1><br>
                    Nombres: {$this->titular}<br>
                    Saldo: {$this->saldo} S/.<br>
                    Operacion: {$this->statusOperacion}
                    ";
        return $cadena;
    }
}
