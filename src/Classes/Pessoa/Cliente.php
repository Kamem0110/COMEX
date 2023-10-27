<?php

class Cliente
{

    private CPF $CPF;
    private string $nomeCliente;
    private string $email;
    private string $celular;
    private Endereco $endereco;
    private array $pedido=[];

    public function __construct(CPF $CPF, $nomeCliente, $email,$celular, Endereco $endereco){

        $this->CPF = $CPF;
        $this->setNome($nomeCliente);
        $this->setEmail($email);
        $this->setCelular($celular);
        $this->endereco = $endereco;
    }

    public function getCpf(): string
    {
        return $this->CPF->recuperarNumero();
    }
    public function getNome () {
        return $this->nomeCliente;
    }
    public function setNome(string $nomeCliente)
    {

        if (strlen($nomeCliente) < 7) {
            throw new InvalidArgumentException("Nome precisa ter pelo menos 7 caractere");
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
    public function setCelular(string $celular)
    {
        $this->celular = $celular;
    }

    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }
    public function setEndereco(Endereco $endereco)
    {
        $this->endereco = $endereco;
    }

    public function getPedido()
    {
        return $this->pedido;
    }

   public function novoPedido(string $pedido)
    {
        $this->pedido[] = $pedido;
    }
}
