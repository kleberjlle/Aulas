<?php
//função universal para realizar calculos
function calcular($v1,$v2,$op){
    switch ($op) {
        case "+":
            return somar($v1,$v2);
            break;
        case "-":
            return subtrair($v1,$v2);
            break;
        case "*":
            return multiplicar($v1,$v2);
            break;
        case "/":
            return dividir($v1,$v2);
            break;
        default:
            return mensagem();
            break;
    }
}

function mensagem(){
    return "Algo deu errado, consulte o manual do professor Girafalis";
}

//função que soma 2 valores
function somar($v1,$v2){
    $soma = $v1+$v2;
    return "Resultado da soma: {$soma}<br /><br />";
}
//função que subtrai 2 valores
function subtrair($v1,$v2){
    $subtrair = $v1-$v2;
    return "Resultado da subtração: {$subtrair}<br /><br />";
}
//função que multiplica 2 valores
function multiplicar($v1,$v2){
    $multiplicar = $v1*$v2;
    return "Resultado da multiplicação: {$multiplicar}<br /><br />";
}
//função que divide 2 valores
function dividir($v1,$v2){
    if($v2=="0"){
        return "Não é possível dividir por zero";
    }else{
        $dividir = $v1/$v2;
        return "Resultado da divisão: {$dividir}<br /><br />";
    }
    
}