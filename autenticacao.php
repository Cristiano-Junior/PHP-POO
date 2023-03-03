<?php

use Alura\Bank\Model\Account\Titular;
use Alura\Bank\Model\CPF;
use Alura\Bank\Model\Employee\Diretor;
use Alura\Bank\Model\Employee\Gerente;
use Alura\Bank\Model\Endereco;
use Alura\Bank\Service\Autenticador;

require_once 'autoload.php';

$diretor = new Diretor('Cristiano Junior', new CPF('480.366.488-90'), 5000);
$gerente = new Gerente('Peralta', new CPF('480.366.488-90'), 3000);
$titular = new Titular(new CPF('480.366.488-90'), 'Peralta', new Endereco('São Paulo', 'Vila Formosa', 'Rua Alves', '337'));
$autenticador = new Autenticador();

$autenticador->login($titular, 'abcd');