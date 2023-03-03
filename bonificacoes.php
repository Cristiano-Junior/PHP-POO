<?php

require_once 'autoload.php';

use Alura\Bank\Model\CPF;
use Alura\Bank\Model\Employee\{Diretor, Gerente, Desenvolvedor, EditorVideo};
use Alura\Bank\Service\BonificationController;

$func = new Desenvolvedor('Cristiano Junior', new CPF('480.366.488-90'), 1000);
$func2 = new Gerente('Ashley Belo', new CPF('123.456.789-01'), 3000);
$func3 = new Diretor('Jonas Brother', new CPF('123.456.789-01'), 10000);
$func4 = new EditorVideo('Ronilson Silva', new CPF('123.456.789-01'), 3500);

$service = new BonificationController;

$func->promovido();

$service->addBonification($func);
$service->addBonification($func2);
$service->addBonification($func3);
$service->addBonification($func4);

echo $service->getTotalBonification();