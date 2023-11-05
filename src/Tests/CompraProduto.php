<?php

require_once "Classes\Produto.php";


$frango1 = new Produto("Frango", 49.89, 326);

try {
    $frango1->compra(1000);
} catch (\Exception $erro) {
    echo $erro->getMessage() . PHP_EOL;
    return;
}

$pizza1 = new Produto("Pizza/Un", 42.99, 50);
$maca1 = new Produto("Maçã/KG", 89.9, 200);
$pao1 = new Produto("Pão frances/Kg", 29.19, 100);
$bolo1 = new Produto("Bolo de chocolate", 39.99, 26);
$pera1 = new Produto("Pera/Kg", 24.89, 250);
$refrigerante1 = new Produto("Pepsi Light", 9.89, 400);
var_dump($frango1,$refrigerante1,$pera1,$bolo1,$pao1,$pizza1);

echo "Produto: " . $frango1->getNomeProduto() . PHP_EOL;
echo "Preço: " . $frango1->getPreco() . PHP_EOL;
echo "Estoque: " . $frango1->estoque . PHP_EOL;
echo PHP_EOL;

$frango1->abaixarEstoque(2);
echo "Produto: " . $frango1->getNomeProduto() . " Preço: " . $frango1->getPreco() . " Estoque: " . $frango1->estoque . PHP_EOL;
echo PHP_EOL;

$frango1->aumentarEstoque(50);
echo "Produto: " . $frango1->getNomeProduto() . " Preço: " . $frango1->getPreco() . " Estoque: " . $frango1->estoque . PHP_EOL;