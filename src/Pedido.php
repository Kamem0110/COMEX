<?php

class Pedido {
    public int $id;
    public string $cliente;
    public string $produto;

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
}

$pedido1010 = new Pedido(1010, "Pedro Gisuti","X-Tudo");
echo "Número: " . $pedido1010->getID() . "\n";
echo "Para o cliente: " . $pedido1010->cliente . "\n";
echo "Pedido: " . $pedido1010->produto . PHP_EOL;
echo "\n";

$pedido1010 = new Pedido(1011, "Rafael","X-Salada + 1Coca");
echo "Número: " . $pedido1010->getID() . "\n";
echo "Para o cliente: " . $pedido1010->cliente . "\n";
echo "Pedido: " . $pedido1010->produto . PHP_EOL;
echo "\n";
$pedido1010 = new Pedido(1012, "Fernanda","Batata frita Média+ 1Guara");
echo "Número: " . $pedido1010->getID() . "\n";
echo "Para o cliente: " . $pedido1010->cliente . "\n";
echo "Pedido: " . $pedido1010->produto . PHP_EOL;
echo "\n";
$pedido1010 = new Pedido(1013, "Giuliano","X-frango + 2LFanta");
echo "Número: " . $pedido1010->getID() . "\n";
echo "Para o cliente: " . $pedido1010->cliente . "\n";
echo "Pedido: " . $pedido1010->produto . PHP_EOL;
echo "\n";
$pedido1010 = new Pedido(1014, "Edenise","X-Salada + 1Guara");
echo "Número: " . $pedido1010->getID() . "\n";
echo "Para o cliente: " . $pedido1010->cliente . "\n";
echo "Pedido: " . $pedido1010->produto . PHP_EOL;
