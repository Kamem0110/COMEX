<?php

namespace Pedro\Comex\Tests;



use Pedro\Comex\Classes\Cliente;

class ClienteTest{
    public function testRetornaCelularFormatadoCorretamente()
    {
        $cliente = new Cliente(new \Pedro\Comex\Classes\CPF("123.456.789-10")
            ,"Pedro","pedro@email.com",
            19988776655,new \Pedro\Comex\Classes\Endereco(12345687,
                "SP","Campinas","Algum",
                "Outra rua","12A"));

        $this->assertEquals('(19) 9 8877-6655', $cliente->getCelular());
    }
}
