<?php

class Cliente
{

    public string $nomeCliente;
    public string $email;
    public string $celular;
    public string $endereco;

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

}

$cliente2412 = new Cliente("Pedro Giusti","pedrogiusti@email.com","19895623142","Rual Tal, 1234");

echo "Cliente: " . $cliente2412->getNome() . PHP_EOL;
echo "E-mail: " . $cliente2412->getEmail() . PHP_EOL;
echo "Número do celular: " . $cliente2412->getCelular() . PHP_EOL;
echo "Endereço: " . $cliente2412->getEndereco() . PHP_EOL;

