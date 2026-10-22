<?php


namespace Modelo\Conta;


class ContaPoupanca extends Conta
{
    public function saca(float$valorASacar): void
    {
        $tarifasaque = $valorASacar * 0.03;
        $valorSaque = $valorASacar + $tarifasaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }
}