<?php


namespace Pedro\Github\COMEX\src\Classes\Pagamento;

use Pedro\Github\COMEX\src\Interfaces\MeioDePagamento;

class Boleto implements MeioDePagamento
{
    public function processoPagamento(): bool
    {
        echo "Processando pagamento." . PHP_EOL;
        sleep(30);
        echo "Pagamento aprovado!" . PHP_EOL;

        return true;
    }
}