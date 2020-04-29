<?php
//declaração de variáveis
$preco1 = 78;
$preco2 = 37;

//imprime o valor da variável com um texto concatenado
/*
echo "Valor 1: {$v1}<br />";
echo "Valor 2: {$v2}<br />";

$soma = $v1+$v2;

echo "O total é: {$soma}";
 * 
 */
include_once './funcoes.php';

somar($preco1,$preco2);
subtrair($preco1,$preco2);
multiplicar($preco1,$preco2);