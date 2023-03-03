<?php

namespace Alura\Bank\Service;

use Alura\Bank\Model\Autenticavel;

class Autenticador 
{
    public function login(Autenticavel $autenticavel, string $senha): void
    {
        if($autenticavel->podeAutenticar($senha))
        {
            echo 'Usuário logado com sucesso!';
        }
        else
        {
            echo 'Senha Incorreta!';
        }
    }
}