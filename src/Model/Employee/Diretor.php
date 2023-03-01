<?php

namespace Alura\Bank\Model\Employee;

class Diretor extends Funcionario {

    public function calculaBonificacao(): float
    {
        return $this->getSalario() * 2;
    }
}