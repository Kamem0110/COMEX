<?php

namespace Pedro\Comex\Classes;

class EstoqueInsuficienteException extends \DomainException
{
    public function __construct(float $quantidade, float $disponivel)
{
    $mensagem = "Você tentou retirar  do estoque  $quantidade, mas há  $disponivel unidades em disponiveis em estoque.";
    parent::__construct($mensagem);
}

}