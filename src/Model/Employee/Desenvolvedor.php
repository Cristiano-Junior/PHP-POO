<?php

namespace Alura\Bank\Model\Employee;

class Desenvolvedor extends Funcionario{

    public function calculaBonificacao(): float
    {
        return 500.0;
    }

    public function promovido()
    {
        $this->recebeAumento($this->getSalario() * 0.75);
    }
}