<?php
include_once './funcoes.php';

$v1 = $_POST['valor1'];
$v2 = $_POST['valor2'];
$op = $_POST['operador'];

$msg = calcular($v1, $v2, $op);

header("Location: ./calculadora.php?msg={$msg}");