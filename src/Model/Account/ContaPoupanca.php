<?php

namespace Alura\Bank\Model\Account;

use Alura\Bank\Model\Account\Conta;

class ContaPoupanca extends Conta {

    public function sacar(float $valorASacar): void
    {
       
        $tarifaSaque = $valorASacar * 0.03;

        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

}