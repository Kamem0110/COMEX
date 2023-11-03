<?php

namespace Pedro\Comex\Classes;
class Endereco
{
    private string $cep;
    private string $estado;
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cep, string $estado, string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cep = $cep;
        $this->estado = $estado;
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    //atualizar cep
    public function setCep(string $cep)
    {
        $this->cep = $cep;
    }

    //atualizar estado
    public function setEstado(string $estado)
    {
        $this->estado = $estado;
    }

    //atualizar cidade
    public function setCidade(string $cidade)
    {
        $this->cidade = $cidade;
    }

    //atualizar bairro
    public function setBairro(string $bairro)
    {
        $this->bairro = $bairro;
    }

    //atualizar rua
    public function setRua(string $rua)
    {
        $this->rua = $rua;
    }

    //atualizar número
    public function setNumero(string $numero)
    {
        $this->numero = $numero;
    }

    // getters - recuperar valores
    public function alterarCep()
    {
        return preg_replace("/(\d{5})(\d{3})/", "$1-$2", $this->cep);
    }

    //recupera
    public function getEstado(): string
    {
        return $this->estado;
    }

    //recupera
    public function getCidade(): string
    {
        return $this->cidade;
    }

    //recupera
    public function getBairro(): string
    {
        return $this->bairro;
    }

    //recupera
    public function getRua(): string
    {
        return $this->rua;
    }

    //recupera
    public function getNumero(): string
    {
        return $this->numero;
    }

    //recuperar endereco
    public function getEndereco(): string
    {
        return $this->rua . ", " . $this->numero . " - " . $this->bairro . " - " . $this->cidade . " - " . $this->estado . " - CEP " . $this->alterarCep();
    }
}

