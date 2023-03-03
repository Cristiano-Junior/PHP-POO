<?php

namespace Alura\Bank\Model\Employee;

use Alura\Bank\Model\{Pessoa, CPF};

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($cpf, $nome);
        $this->salario = $salario;
    }

    /**
     * Get the value of cargo
     */ 
    public function getSalario(): float
    {
        return $this->salario;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recebeAumento(float $valor): void
    {
        if($valor < 0 )
        {
            echo 'Aumento deve ser positivo!';
            return;
        }

        $this->salario += $valor;
    }

    abstract public function calculaBonificacao(): float;
}