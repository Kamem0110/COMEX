<?php

class Produto {
    public string $nomeProduto;
    public float $preco;
    public int $estoque;

    public function __construct(string $nomeProduto, float $preco, int $estoque) {
        $this->setNomeProduto($nomeProduto);
        $this->setPreco($preco);
        $this->estoque = $estoque;
    }

    public function getNomeProduto(): string {
        return $this->nomeProduto;
    }
    public function setNomeProduto(string $nomeProduto): void {
        $this->nomeProduto = $nomeProduto;
    }

    public function getPreco(): float {
        return $this->preco;
    }
    public function setPreco(float $preco): void {
        $this->preco = $preco;
    }

    public function abaixarEstoque(int $diminuir): void {
        if ($diminuir > $this->estoque) {
            echo "Acabou no estoque";
            return;
        }
        $this->estoque -= $diminuir;
    }

    public function aumentarEstoque(int $aumentar): void {
        $this->estoque += $aumentar;
    }
}

$frango1 = new Produto("Frango", 49.89, 326);
$pizza1 = new Produto("Pizza/Un", 42.99, 50);
$maca1 = new Produto("Maçã/KG", 89.9, 200);
$pao1 = new Produto("Pão frances/Kg", 29.19, 100);
$bolo1 = new Produto("Bolo de chocolate", 39.99, 26);
$pera1 = new Produto("Pera/Kg", 24.89, 250);
$refrigerante1 = new Produto("Pepsi Light", 9.89, 400);

echo "Produto: " . $frango1->getNomeProduto() . PHP_EOL;
echo "Preço: " . $frango1->getPreco() . PHP_EOL;
echo "Estoque: " . $frango1->estoque . PHP_EOL;
echo PHP_EOL;

$frango1->abaixarEstoque(2);
echo "Produto: " . $frango1->getNomeProduto() . " Preço: " . $frango1->getPreco() . " Estoque: " . $frango1->estoque . PHP_EOL;
echo PHP_EOL;

$frango1->aumentarEstoque(50);
echo "Produto: " . $frango1->getNomeProduto() . " Preço: " . $frango1->getPreco() . " Estoque: " . $frango1->estoque . PHP_EOL;
