<?php

namespace Pedro\Comex\Tests;

use Pedro\Comex\Classes;
use Pedro\Comex\Produto;
use PHPUnit\Framework\TestCase;

class ProdutoTest extends TestCase
{
    public function testRetornaNomeCorretamente()
    {
        $produto = new Produto("Sorvete",10,100);

        $this->assertEquals("Sorvete", $produto->getNome());
    }

    public function testRetornaPrecoSemDescontoCorretamente()
    {
        $produto = new Produto("Sorvete",10,100);

        $this->assertEquals(10, $produto->getPreco());
    }

    public function testRetornaPrecoComDescontoCorretamente()
    {
        $porcentualDesconto = 0.1;
        $precoComDesconto = 10 . (10 * $porcentualDesconto);

        $produto = new Produto("Sorvete",10,100,$precoComDesconto);

        $this->assertEquals($precoComDesconto, $produto->getPreco());
    }

    public function testRetornaPrecoBaseCorretamente()
    {
        $preco = 10;
        $produto = new Produto("Sorvete",10,$preco);

        $this->assertEquals($preco, $produto->getPrecoBase());
    }

    public function testRetornaQuantidadeEstoqueCorretamente()
    {
        $quantidadeEstoque = 10;
        $produto = new Produto("Sorvete",$quantidadeEstoque,10);

        $this->assertEquals($quantidadeEstoque, $produto->getEstoque());
    }

    public function testRetornaValorTotalEstoqueCorretamente()
    {
        $quantidadeEstoque = 10;
        $preco = 10;
        $valorTotal = $quantidadeEstoque * $preco;

        $produto = new Produto("Sorvete", $quantidadeEstoque, $preco);

        $this->assertEquals($valorTotal, $produto->getValorTotalEmEstoque());
    }

    public function testDefinePrecoCorretamente()
    {
        $produto =  new Produto("Sorvete", 10, 10);
        $produto->setPreco(100);
        $this->assertEquals(100, $produto->getPrecoBase());

        
    }

    public function testCompraProdutoAbaixaEstoque()
    {
        $produto =  new Produto("Sorvete", 10, 10);

        $produto->compra(5);

        $this->assertEquals(5,$produto->getEstoque());
    }

    public function testComprarQuantidadeNegativaJogaErro()
    {
        $produto =  new Produto("Sorvete", 10, 10);

        $this->expectException(\InvalidArgumentException::class);

        $produto->compra(-1);
    }

    public function testComprarQuantidadeMaiorQueEstoqueJogaErro()
    {
        $produto =  new Produto("Sorvete", 10, 10);

        $this->expectException(Classes\EstoqueInsuficienteException::class);

        $produto->compra(100);
    }

    public function testReporUmProdutoAumentaEstoque()
    {
        $produto =  new Produto("Sorvete", 10, 10);

        $produto->repoe(5);

        $this->assertEquals(15, $produto->getEstoque());

    }

    public function testReporQuantidadeNegativaJogaErro()
    {
        $produto =  new Produto("Sorvete", 10, 10);

        $this->expectException(\InvalidArgumentException::class);

        $produto->compra(-1);
    }
}