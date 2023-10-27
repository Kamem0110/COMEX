<?php

namespace Pedro\Github\COMEX\src\Classes\Pagamento;

use Pedro\Github\COMEX\src\Interfaces\MeioDePagamento;

class Pix implements MeioDePagamento
{
    public function processoPagamento(): bool
    {
        echo "Processando pagamento" . PHP_EOL;
        sleep(2);
        echo "Pagamento realizado" . PHP_EOL;

        return true;
    }
}