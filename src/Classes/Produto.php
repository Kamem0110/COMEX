<?php

namespace Pedro\Comex;

use Pedro\Comex\Exception\EstoqueInsuficienteException;
use Pedro\Comex\Exception\PagamentoProblemaException;


class Produto
{
    private string $nomeProduto;
    private  float $preco;
    private float $estoque;

    public function __construct(string $nomeProduto, float $preco, float $estoque)
    {
        $this->nome = $nomeProduto;
        $this->preco = $preco;
        $this->estoque = $estoque;

    }

    public function atualizarNome(string $nome)
    {
        $this->nome = $nome;

    }

    public function atualizarPreco(float $preco)
    {
        try {
            if ($preco <= 0) {
                throw new \InvalidArgumentException('Valor incorreto');
            }
            $this->preco = $preco;
        } catch (\Exception $erro) {
            echo $erro->getMessage() . PHP_EOL;
            return;
        }
    }

    public function atualizarEstoque(float $estoque)
    {
        try {
            if ($estoque <= 0) {
                throw new \InvalidArgumentException('Valor incorreto.');
            }
        } catch (\Exception $erro) {
            echo $erro->getMessage() . PHP_EOL;
            return;
        }
        $this->qtdEstoque = $estoque;
    }

    public function recuperarNome(): string
    {
        return $this->nomeProduto;
    }

    public function recuperarPreco(): float
    {
        return $this->preco;
    }

    public function recuperarEstoque(): float
    {
        return $this->estoque;
    }

    public function reduzirEstoque(float $estoqueReduzir): void
    {
        try {
            if ($estoqueReduzir < 0) {
                throw new \InvalidArgumentException('A quantidade a reduzir não pode ser negativa.');
            }

            if ($estoqueReduzir > $this->estoque) {
                throw new EstoqueInsuficienteException($estoqueReduzir,$this->estoque);
            }
        } catch (\Exception $erro) {
            echo $erro->getMessage().PHP_EOL;
            return;
        }
        $this->estoque -= $estoqueReduzir;
    }

    public function incrementarEtoque(float $valor): void
    {
        try {
            if ($valor < 0) {
                throw new \InvalidArgumentException('A quantidade não pode ser negativa.');
            }
        } catch (\Exception $erro) {
            echo $erro->getMessage() . PHP_EOL;
            return;
        }
        $this->estoque += $valor;
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