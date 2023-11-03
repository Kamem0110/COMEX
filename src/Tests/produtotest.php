<?php

namespace Pedro\Comex\Tests;

use Pedro\Comex\Classes;
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

        $this->assertEquals(10, $produto->getNome());

    }

    public function testRetornaPrecoComDescontoCorretamente()
    {
        $porcentualDesconto = 0.1;
        $precoComDesconto = 10 . (10 * $porcentualDesconto);

        $produto = new Produto("Sorvete",10,100,$precoComDesconto);

        $this->assertEquals($precoComDesconto, $produto->getNome());
    }



}