<?php
/*Tarefa: Crie uma lista de produtos e exiba cada um deles
Para praticar a criação de arrays e uso de loops.

Crie uma lista que contenha vários produtos, 
os quais devem ter nome e preço.

Após, exiba-os.
*/

$produtos1 = ['Produto' => 'Guaraná - 2Lt', 'Valor' => 10];
$produtos2 = ['Produto' => 'Suco de Laranja', 'Valor' => 10,99];
$produtos3 = ['Produto' => 'Cachorro-Quente', 'Valor' => 20];
$produtos4 = ['Produto' => 'Pizza', 'Valor' => 30];
$produtos5 = ['Produto' => 'Pão frânces', 'Valor' => 30];

$contas = [$produtos1,$produtos2,$produtos3,$produtos4,$produtos5];

for ($i=0; $i < count($contas);$i++){
    echo $contas[$i]['Produto'] . PHP_EOL;
    echo $contas[$i]['Valor'] . PHP_EOL;
}
