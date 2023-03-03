<?php

namespace Alura\Bank\Model\Employee;

use Alura\Bank\Model\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float
    {
        return $this->getSalario();
    }

    public function autenticar(string $senha): bool
    {
        return $senha === '1234';
    }

    public function podeAutenticar(string $senha):bool
    {
        return $senha === '4321';
    }
}