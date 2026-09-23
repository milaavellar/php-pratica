
<?php
require_once "teste.php";

class ContaCorrente extends Conta
{
    public $limite;

    public function __construct($titular, $numero, $saldo, $limite)
    {
        parent::__construct($titular, $numero, $saldo);

        $this->limite = $limite;
    }

    public function sacar($valor)
    {
        if ($valor <= $this->saldo + $this->limite) {
            $this->saldo -= $valor;

            echo "Saque realizado com sucesso!<br>";
        } else {
            echo "Saldo insuficiente!<br>";
        }
    }
}
$user = new ContaCorrente('dani', '1233', '1313', 123);
$user->sacar(100);
 ?>