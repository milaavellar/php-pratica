<?php

require_once 'src/Conta.php';
require_once 'src/Endereco.php';
require_once 'src/Pessoa.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$endereco = new Endereco('sp', 'um bairro', 'minha rua', '93');
$pessoa = new Titular(new CPF('123.456.789-10'), 'dani campos', $endereco);
$primeiraConta = new Conta($pessoa);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$pessoa2 = new Titular(new CPF('698.549.548-10'), 'Milena', $endereco);
$segundaConta = new Conta($pessoa2);
var_dump($segundaConta);

$outroEndereco = new Endereco('A', 'b', 'c', '1D');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
