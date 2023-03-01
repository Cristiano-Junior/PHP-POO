<?php

require_once 'autoload.php';

use Alura\Bank\Model\CPF;
use Alura\Bank\Model\Employee\{Funcionario, Diretor, Gerente, Desenvolvedor};
use Alura\Bank\Service\BonificationController;

$func = new Desenvolvedor('Cristiano Junior', new CPF('480.366.488-90'), 'Desenvolvedor', 1000);
$func2 = new Gerente('Ashley Belo', new CPF('123.456.789-01'), 'Biologa', 3000);
$func3 = new Diretor('Jonas Brother', new CPF('123.456.789-01'), 'Diretor', 10000);

$service = new BonificationController;

$func->promovido();

$service->addBonification($func);
$service->addBonification($func2);
$service->addBonification($func3);

echo $service->getTotalBonification();