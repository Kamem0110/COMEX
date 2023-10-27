<?php

namespace Pedro\Github\COMEX\src\Classes\Pagamento;

use Pedro\Github\COMEX\src\Interfaces\MeioDePagamento;

class CartaoDeCredito implements MeioDePagamento
{
    public function processoPagamento(): bool
    {
       echo "Processo do pagamento" . PHP_EOL;

       $situacao = rand(0,1);

       sleep(5);

        try {
            if ($situacao === 0)
            throw new \Exception("Cartão recusado");
        } catch (\Exception $erro){
            echo $erro->getMessage() . PHP_EOL;
            return false;
        }

        echo "Pagamento aprovado!";
        return true;
    }
}


