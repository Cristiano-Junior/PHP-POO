<?php

namespace Alura\Bank\Model\Account;

use Alura\Bank\Model\{Pessoa, CPF, Endereco};

class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($cpf, $nome);
        $this->endereco = $endereco;
    }

    public function getEndereco() : Endereco
    {
        return $this->endereco;
    }
}
