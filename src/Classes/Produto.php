<?php

namespace Pedro\Comex;

use Pedro\Comex\Exception\EstoqueInsuficienteException;
use Pedro\Comex\Exception\PagamentoProblemaException;
use PHPUnit\Event\Runtime\PHP;


class Produto
{
    private string $nomeProduto;
    private float $preco;
    private float $estoque = 0;

    private float $desconto;

    public function __construct(string $nomeProduto, float $preco, float $estoque, float $desconto)
    {
        $this->nomeProduto = $nomeProduto;
        $this->preco = $preco;
        $this->estoque = $estoque;
        $this->desconto = $desconto;

    }

    public function getNome()
    {
        return $this->nomeProduto;

    }

    public function getPreco()
    {
        return $this->preco - ($this->preco * $this->desconto);
        /*try {
            if ($preco <= 0) {
                throw new \InvalidArgumentException('Valor incorreto');
            }
            $this->preco = $preco;
        } catch (\Exception $erro) {
            echo $erro->getMessage() . PHP_EOL;
            return;
        }*/
    }

    public function getPrecoBase()
    {
        return $this->preco;
    }

    public function getEstoque()
    {

        return $this->estoque;
    }

    public function getValorTotalEmEstoque()
    {
        return $this->estoque * $this->preco;
    }

    public function setPreco(float $valor)
    {
        $this->preco = $valor;
    }

    public function compra(int $quantidade = 1)
    {
        try {
            if ($quantidade <= 0)
            {
                throw new \InvalidArgumentException("A quantidade de compra não pode ser negativa.");
            }
            if ($quantidade > $this->estoque)
            {
                throw new \Pedro\Comex\Classes\EstoqueInsuficienteException($this->estoque);
            }
        } catch (\Exception $erro) {
            echo $erro->getMessage() . PHP_EOL;
            return;
        }
        $this->estoque -= $quantidade;

    }

    public function repoe(int $quantidade = 1)
    {
       if ($quantidade <= 0) {
                throw new \InvalidArgumentException("A quantidade de compra não pode ser negativa.");
            }

        $this->estoque +=$quantidade;
    }

    public function listarDisponivel(): void
    {
        echo "Quantidade disponível = " . number_format($this->estoque, 2, ',', '.').PHP_EOL;
    }

    public function listarValorEstoque(): void
    {
        echo "Valor de estoque é : " . number_format($this->estoque * $this->preco, 2, ',', '.').PHP_EOL;
    }
}