<?php

namespace Pedro\Comex\Classes;

require_once 'Cliente.php';
require_once 'Pedido.php';
require_once 'EstoqueInsuficienteException.php';

class Carrinho
{
    private Produto $produto;
    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

    public function getProdutos()
    {
        return $this->produtos;
    }

    public function getValorCompra()
    {
        $total = 0;

        foreach ($this->produtos as $produto) {
            $total += $produto->getPreco();
        }
        return $total >= 100 ? $total * 0.9 : $total;
    }

    public function getValorFrete()
    {
        //Compras maior que 100
        return $this->getValorCompra() >= 100 ? 0 : 9.99;
    }

    public function getValorTotal()
    {
        return $this->getValorCompra() + $this->getValorFrete();
    }
}