<?php


use Modelo\Conta\Titular;
use Modelo\CPF;
use Modelo\Endereco;
use Modelo\Conta\Conta;


require_once 'autoload.php';

$conta = new Conta(
    new Titular(
        new CPF('123.456.789-00'),
        'Dani Campos',
        new Endereco('São Paulo', 'Centro', 'Rua 1', '123')
    ),
    2
);
$conta->deposita(500);
$conta->saca(100);
echo $conta->recuperaSaldo();
