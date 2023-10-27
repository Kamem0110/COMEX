<?php
//Atributo de pedidos do cliente
require_once 'Pedido.php';
require_once 'Produto.php';
require_once 'Carrinho.php';

class Cliente
{

    public string $nomeCliente;
    public string $email;
    public string $celular;
    public string $endereco;
    public array $pedido=[];

    public function __construct($nomeCliente, $email,$celular,$endereco){
        $this->setNome($nomeCliente);
        $this->setEmail($email);
        $this->setCelular($celular);
        $this->setEndereco($endereco);
    }

    public function getNome () {
        return $this->nomeCliente;
    }
    public function setNome(string $nomeCliente)
    {

        if (strlen($nomeCliente) < 7) {
            echo"Nome precisa ter pelo menos 7 caractere";
            return;
        }
        $this->nomeCliente = $nomeCliente;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail(string $email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
            return;
            }
            echo "Email inválido";
    }

    public function getCelular(): string
    {
        return $this->celular;
    }
    public function setCelular(string $celular): void
    {
        $this->celular = $celular;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }
    public function setEndereco(string $endereco): void
    {
        $this->endereco = $endereco;
    }

    public function getPedido(): array
    {
        return $this->pedido;
    }

    public function novoPedido(Pedido $pedido)
    {
        $this->pedido[] = $pedido;
    }

}

$cliente2412 = new Cliente("Pedro Giusti","pedrogiusti@email.com","19895623142","Rual Tal, 1234");

echo "Cliente: " . $cliente2412->getNome() . PHP_EOL;
echo "E-mail: " . $cliente2412->getEmail() . PHP_EOL;
echo "Número do celular: " . $cliente2412->getCelular() . PHP_EOL;
echo "Endereço: " . $cliente2412->getEndereco() . PHP_EOL;
echo "\n";
echo "\n";

//Atributo de pedidos do cliente
$cliente21 = new Cliente("Ricardo", "ricardo@facebook.com", "19857496521","Rua da Cruz, 1526");
$pedido2413 = new Pedido(2413, $cliente2412->getNome(), "Pizza");
$cliente21->novoPedido($pedido2413);
echo "Nome do cliente: " . $cliente21->getNome() . "\n";
echo "Pedido: " . $pedido2413->produto . "\n";

//Carrinho de supermercado
$carrinho1 = new CarrinhoDeCompras();
$carrinho1->carrinhoProduto();
