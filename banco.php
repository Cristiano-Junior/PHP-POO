<?php

require_once 'autoload.php';

use Alura\Bank\Model\Account\Titular;
use Alura\Bank\Model\Endereco;
use Alura\Bank\Model\CPF;
use Alura\Bank\Model\Account\Conta;

$endereco = new Endereco('São Paulo', 'Vila Formosa', 'Rua Alves de Almeida', '337');

$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $endereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
