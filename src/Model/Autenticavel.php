<?php

namespace Alura\Bank\Model;

interface Autenticavel{
    
    public function podeAutenticar(string $senha): bool;
}