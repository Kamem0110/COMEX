<?php

class Produto{
    public string $nomeProduto;
    public string $preco;
    public string $estoque;

    public function __construct($nomeProduto,$preco,$estoque){
        $this->setNomeProduto($nomeProduto);
        $this->setPreco($preco);
        $this->setEstoque($estoque);
    }

    public function getNomeProduto()
    {
        return $this->nomeProduto;
    }
    public function setNomeProduto(string $nomeProduto): void
    {
        $this->nomeProduto = $nomeProduto;
    }

    public function getPreco(): string
    {
        return $this->preco;
    }
    public function setPreco(string $preco): void
    {
        $this->preco = $preco;
    }

    public function getEstoque(): string
    {
        return $this->estoque;
    }
    public function setEstoque(string $estoque): void
    {
        $this->estoque = $estoque;
    }

}

$frango1 = new Produto("Frango","49,89/uni", "326" );

echo "Produto: " . $frango1->getNomeProduto() . PHP_EOL;
echo "Preço: " . $frango1->getPreco() . PHP_EOL;
echo "Estoque: " . $frango1->getEstoque() . PHP_EOL;

