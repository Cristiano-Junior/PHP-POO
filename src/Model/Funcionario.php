<?php

namespace Alura\Bank\Model;

use Alura\Bank\Model\{Pessoa, CPF};

class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        parent::__construct($cpf, $nome);
        $this->cargo = $cargo;
    }

    /**
     * Get the value of cargo
     */ 
    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }
}