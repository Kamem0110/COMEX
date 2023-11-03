<?php

use Pedro\Comex\Classes\Pedido;
use Pedro\Comex\Classes\Produto;


$pedido1010 = new Pedido(1010, "Pedro Gisuti","X-Tudo",1);
echo "Número: " . $pedido1010->getID() . "\n";
echo "Para o cliente: " . $pedido1010->cliente . "\n";
echo "Pedido: " . $pedido1010->produto . PHP_EOL;
echo "\n";

$pedido1011 = new Pedido(1011, "Rafael","X-Salada + 1Coca");
echo "Número: " . $pedido1011->getID() . "\n";
echo "Para o cliente: " . $pedido1011->cliente . "\n";
echo "Pedido: " . $pedido1011->produto . PHP_EOL;
echo "\n";
$pedido1012 = new Pedido(1012, "Fernanda","Batata frita Média+ 1Guara");
echo "Número: " . $pedido1012->getID() . "\n";
echo "Para o cliente: " . $pedido1012->cliente . "\n";
echo "Pedido: " . $pedido1012->produto . PHP_EOL;
echo "\n";
$pedido1013 = new Pedido(1013, "Juliano","X-frango + 2LFanta");
echo "Número: " . $pedido1013->getID() . "\n";
echo "Para o cliente: " . $pedido1013->cliente . "\n";
echo "Pedido: " . $pedido1013->produto . PHP_EOL;
echo "\n";
$pedido1014 = new Pedido(1014, "Ricardo","X-Salada + 1Guara");
echo "Número: " . $pedido1014->getID() . "\n";
echo "Para o cliente: " . $pedido1014->cliente . "\n";
echo "Pedido: " . $pedido1014->produto . PHP_EOL;