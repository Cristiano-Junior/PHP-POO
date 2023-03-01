<?php

namespace Alura\Bank\Service;

use Alura\Bank\Model\Employee\Funcionario;

class BonificationController
{
    private float $totalBonification = 0; 

    public function addBonification(Funcionario $funcionario)
    {
        $this->totalBonification += $funcionario->calculaBonificacao();
    }

    public function getTotalBonification(): float
    {
        return $this->totalBonification;
    }
}