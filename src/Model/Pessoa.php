<?php

namespace Alura\Bank\Model;

use Alura\Bank\Model\CPF;

abstract class Pessoa
{
    use AcessoPropriedades;

    private CPF $cpf;
    protected string $nome;

    public function __construct(CPF $cpf, string $nome)
    {   
        $this->validaNome($nome);
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    /**
     * Get the value of cpf
     */ 
    public function getCpf(): CPF
    {
        return $this->cpf;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome(): string
    {
        return $this->nome;
    }

    final protected function validaNome(string $nome)
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}