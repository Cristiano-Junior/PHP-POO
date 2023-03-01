<?php

namespace Alura\Bank\Model\Employee;

class Desenvolvedor extends Funcionario{

    public function calculaBonificacao(): float
    {
        return $this->getSalario() * 0.05;
    }

    public function promovido()
    {
        $this->recebeAumento($this->getSalario() * 0.75);
    }
}