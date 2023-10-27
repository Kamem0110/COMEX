<?php

namespace Pedro\Comex\Exceptions;

class EstoqueInsuficienteException extends Exception
{
    public function __construct()
    {
        parent::__construct("Não tem espaço no estoque.");
    }
}