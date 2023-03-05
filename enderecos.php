<?php

use Alura\Bank\Model\Endereco;

require_once 'autoload.php';

$end1 = new Endereco('São Paulo', 'Vila F', 'Rua Legal', '337');
$end2 = new Endereco('Rio', 'Petropolis', 'Rua Boa', '733');

echo $end1->rua . PHP_EOL;

$end1->rua = 'Rua Maneira';

echo $end1->rua . PHP_EOL;