<?php

class Conta
{
    public $titular;
    public $numero;
    public $saldo;

    public function __construct($titular, $numero, $saldo)
    {
        $this->titular = $titular;
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
    }

    public function consultarSaldo()
    {
        return $this->saldo;
    }
}
 ?>