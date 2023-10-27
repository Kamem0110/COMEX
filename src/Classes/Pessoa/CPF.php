<?php

use Pedro\Github\COMEX\src\Classes\Pessoa;

class CPF
{
    private $numero;

    public function __construct(string $numero)
    {
        try {
            $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
                'options' => [
                    'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
                ]
            ]);
            if ($numero === false) {
                throw new \InvalidArgumentException('CPF Incorreto.');
            }
        }    catch (\Exception $erro) {
            echo $erro->getMessage() . PHP_EOL;
            return;
        }
        $this->numero = $numero;
    }

    public function recuperarNumero()
    {
        return $this->numero;
    }

    public function getCpf(): string
    {
        return "cpf = " . $this->CPF->recuperarNumero()." nome = ". $this->nomeCliente;
    }

}