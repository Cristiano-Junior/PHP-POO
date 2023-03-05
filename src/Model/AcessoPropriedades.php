<?php

namespace Alura\Bank\Model;

trait AcessoPropriedades {

    public function __get(string $name): string
    {
        $metodo = 'get' . ucfirst($name);
        return $this->$metodo();
    }

    public function __set($name, $value): void
    {
        $campo = 'set' . ucfirst($name);
        $this->$campo($value);
    }
    
}