<?php

namespace Alura\Bank\Model\Employee;

class Gerente extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return $this->getSalario();
    }

    public function autenticar(string $senha): bool
    {
        return $senha === '1234';
    }
}