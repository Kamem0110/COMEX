<?php

use Pedro\Comex\Classes\Pagamento\Pedido;
use Pedro\Comex\Classes\Pessoa\CPF;

require_once 'Classes\Pessoa\Cliente.php';
require_once 'Classes\Pessoa\CPF.php';
require_once 'Classes\Pessoa\Endereco.php';
require_once 'Classes\Pagamento\Pedido.php';

$endereco = new Endereco("12345687","SP","SP","algum","Rua alí","123");
$cliente2 = new Cliente( new \CPF("123.456.789-10"),"Pedro Giusti","pedrogiusti@email.com","19895623142", $endereco);

echo "Cliente: " . $cliente2->getNome() . PHP_EOL;
echo "E-mail: " . $cliente2->getEmail() . PHP_EOL;
echo "Número do celular: " . $cliente2->getCelular() . PHP_EOL;
echo "Endereço: " . $endereco->getEndereco() . PHP_EOL;
echo PHP_EOL;
echo "CEP: " . $endereco->alterarCep() . PHP_EOL;
echo "Endereço: " . $endereco->getEndereco() . PHP_EOL;
echo PHP_EOL;
$endereco2 = new Endereco("92454789", "SP", "Sorocaba", "Algum", "Rua de lá", "124 - 4A");
$cliente2->setEndereco($endereco2);

echo "-- Novo endereco do cliente "  .$cliente2->getNome() . " é ". $cliente2->getEndereco()->getEndereco() . PHP_EOL;

echo PHP_EOL;
$endereco = new Endereco("00215487","RJ","Niteroi","Aquele","Rua alí","123");
$cliente2 = new Cliente( new \CPF("789.456.123-10"),"José Roberto","jose@gmail.com","21985744152", $endereco);

echo "Estado alterado do cliente "  .$cliente2->getNome() . " é ". $cliente2->getEndereco()->getEstado() . PHP_EOL;
echo "Cidade alterado do cliente "  .$cliente2->getNome() . " é ". $cliente2->getEndereco()->getCidade() . PHP_EOL;
echo "Bairro alterado do cliente "  .$cliente2->getNome() . " é ". $cliente2->getEndereco()->getBairro() . PHP_EOL;
echo "Rua do alterado cliente "  .$cliente2->getNome() . " é ". $cliente2->getEndereco()->getRua() . PHP_EOL;
echo "Número alterado do cliente "  .$cliente2->getNome() . " é ". $cliente2->getEndereco()->getNumero() . PHP_EOL;
echo "CPF alterado do cliente "  .$cliente2->getNome() . " é ". $cliente2->getCPF() . PHP_EOL;
echo "E-mail alterado do cliente "  .$cliente2->getNome() . " é ". $cliente2->getEmail() . PHP_EOL;
echo "Celular alterado do cliente "  .$cliente2->getNome() . " é ". $cliente2->getCelular() . PHP_EOL;