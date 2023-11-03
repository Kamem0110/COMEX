<?php

namespace Pedro\Comex\Classes;

use Pedro\Github\COMEX\src\Interfaces\MeioDePagamento;

class Pedido
{
    private bool $statusPagamento = false;
    private int $id;
    public string $cliente;
    public string $produtos;
    private MeioDePagamento $meioDePagamento;

    public function __construct(int $id, string $cliente, string $produtos, MeioDePagamento $meioDePagamento)
    {
        $this->id = $id;
        $this->cliente = $cliente;
        $this->produtos = $produtos;
        $this->meioDePagamento = $meioDePagamento;
    }

    public function getID()
    {
        return $this->id;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function getProdutos()
    {
        return $this->produtos;
    }

    public function getMeiodePagametno(){
        return $this->meioDePagamento;
    }

    public function getStatusPagamento()
    {
        return $this->statusPagamento;
    }

    public function getValorTotal()
    {
        $total = 0;

        foreach ($this->produtos as $produtos){
            $total += $produtos->getPreco;
        }

        return $total;
    }

    public function pagar()
    {
        $this->statusPagamento = $this->meioDePagamento->processoPagamento();
    }

    public function adicionarPedido(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }
}



