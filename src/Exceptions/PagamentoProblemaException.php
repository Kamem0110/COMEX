<?php

namespace Pedro\Comex\Exceptions;

class PagamentoProblemaException extends Exception
{
    public function __construct()
    {
        parent::__construct("Problema no servidor!");
    }
}
