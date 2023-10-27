<?php

use Pedro\Github\COMEX\src\Interfaces\MeioDePagamento;

class Pedido {
    public int $id;
    public string $cliente;
    public string $produto;
    private MeioDePagamento $meioDePagamento;

    public function __construct($id,$cliente,$produto) {
        $this->id = $id;
        $this->cliente = $cliente;
        $this->produto = $produto;
    }

    public function getID()
    {
        return $this->id;
    }
    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getCliente()
    {
        return $this->cliente;
    }
    public function setCliente(string $cliente)
    {
        $this->cliente = $cliente;
    }
    public function getProduto()
    {
        return $this->produto;
    }
    public function setProduto(string $produto)
    {
        $this->produto = $produto;
    }

    public function getPedidos(): array
    {
        return $this->pedido;
    }

    public function adicionarPedido(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }
}



