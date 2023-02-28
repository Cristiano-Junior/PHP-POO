<?php

use Alura\Bank\Model\Account\Conta;
use Alura\Bank\Model\Account\ContaPoupanca;
use Alura\Bank\Model\Account\Titular;
use Alura\Bank\Model\CPF;
use Alura\Bank\Model\Endereco;

require_once 'autoload.php';

$conta = new Conta(
    new Titular(
        new CPF ('480.366.488-90'), 
        'Cristiano Junior', 
        new Endereco('São Paulo', 'Vila Formosa', 'Rua Alves de Almeida', '337')
    )
);

$conta->depositar(500);
$conta->sacar(100);
echo $conta->recuperaSaldo();
