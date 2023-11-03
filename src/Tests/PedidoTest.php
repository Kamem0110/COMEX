<?php

namespace Pedro\Comex\Tests;

use Pedro\Comex\Classes\Cliente;
use Pedro\Comex\Classes\CPF;
use Pedro\Comex\Classes\Pedido;
use Pedro\Comex\Classes\Endereco;
use Pedro\Comex\Classes\Produto;
use Pedro\Github\COMEX\src\Interfaces\MeioDePagamento;
use PHPUnit\Framework\TestCase;

class PagamentoAprovadoMock implements MeioDePagamento{

    public function processoPagamento():bool{
        return true;
    }
}

class PagamentoRecusadoMock implements MeioDePagamento{

    public function processoPagamento():bool{
        return false;
    }
}
class PedidoTest extends TestCase
{
    public function testRetornarValorTotal()
    {
        $cliente = new Cliente(
            new CPF("123.456.789-10")
            , "Pedro Giusti", "pedro@email.com", "19986754212"
            , new Endereco("12348567","SP","Campinas","Algum","Avenida Ali","14 - 5G")
        );

        $produtos = [
            new \Produto('Um', 10,10),
            new \Produto('Dois', 10,10),
            new \Produto('Três', 10,10),
            new \Produto('Quatro', 10,10),
            new \Produto('Cinco', 10,10),
        ];

        $pedido = new Pedido(1, $cliente, $produtos, new PagamentoAprovadoMock());
    }

    public function testAdicionarNovoProdutoAumentaListaDeProdutos()
    {
        $cliente = new Cliente(
            new CPF("123.456.789-10")
            , "Pedro Giusti", "pedro@email.com", "19986754212"
            , new Endereco("12348567","SP","Campinas","Algum","Avenida Ali","14 - 5G")
        );

        $produtos = [
            new \Produto('Um', 10,10),
            new \Produto('Dois', 10,10),
            new \Produto('Três', 10,10),
            new \Produto('Quatro', 10,10),
            new \Produto('Cinco', 10,10),
        ];

        $pedido = new Pedido(1, $cliente, $produtos, new PagamentoAprovadoMock());

        $pedido = adicionarProduto(new \Produto('Seis',10,10)) ;

        $this->assertEquals(10 * 6,$pedido->getValorTotal());
    }

    public function testPedidoMudaParaStatusTrueCasoPagamentoAprovado()
    {
        $cliente = new Cliente(
            new CPF("123.456.789-10")
            , "Pedro Giusti", "pedro@email.com", "19986754212"
            , new Endereco("12348567","SP","Campinas","Algum","Avenida Ali","14 - 5G")
        );

        $produtos = [
            new \Produto('Um', 10,10),
            new \Produto('Dois', 10,10),
            new \Produto('Três', 10,10),
            new \Produto('Quatro', 10,10),
            new \Produto('Cinco', 10,10),
        ];

        $pedido = new Pedido(1, $cliente, [new \Produto('Um', 10,10),], new PagamentoAprovadoMock());

        $pedido->pagar();

        $this->assertTrue($pedido->getStatusPagamento());
    }
    public function testPedidoMudaParaStatusFalseCasoPagamentoRecusado()
    {
        $cliente = new Cliente(
            new CPF("123.456.789-10")
            , "Pedro Giusti", "pedro@email.com", "19986754212"
            , new Endereco("12348567","SP","Campinas","Algum","Avenida Ali","14 - 5G")
        );

        $produtos = [
            new \Produto('Um', 10,10),
            new \Produto('Dois', 10,10),
            new \Produto('Três', 10,10),
            new \Produto('Quatro', 10,10),
            new \Produto('Cinco', 10,10),
        ];

        $pedido = new Pedido(1, $cliente, [new \Produto('Um', 10,10),], new PagamentoRecusadoMock());

        $pedido->pagar();

        $this->assertFalse($pedido->getStatusPagamento());
    }
}