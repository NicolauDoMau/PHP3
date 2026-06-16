<?php

$preco = 1250.75;

// Formato brasileiro (2 casas, vírgula decimal, ponto milhar)
echo number_format($preco, 2, ',', '.')."<br>";
// Saída: 1.250,75

// Formato simples (sem casas decimais)
echo number_format($preco)."<br>";
// Saída: 1,251 (arredonda)

echo round(4.3)."<br>";
// Saída: 4

echo round(4.7)."<br>";
// Saída: 5

// Arredondando para 2 casas decimais
echo round(2.3456, 2)."<br>";
// Saída: 2.35

echo ceil(4.3)."<br>";
// Saída: 5

echo ceil(4.0)."<br>";
// Saída: 4

echo floor(4.7)."<br>";
// Saída: 4

echo floor(4.0)."<br>";
// Saída: 4

$diferenca = 10 - 25; // -15
echo abs($diferenca)."<br>";
// Saída: 15

// Gera um número aleatório entre 1 e 10
echo mt_rand(1, 10)."<br>";
// Saída: (um número aleatório, ex: 7)

echo max(5, 10, 2, 8)."<br>";
// Saída: 10

$notas = [7.5, 9.0, 6.2];
echo max($notas)."<br>";
// Saída: 9.0

echo min(5, 10, 2, 8)."<br>";
// Saída: 2

$precos = [19.99, 15.50, 22.00];
echo min($precos)."<br>";
// Saída: 15.50

// 2 elevado à potência 3 (2 * 2 * 2)
echo pow(2, 3)."<br>";
// Saída: 8

echo sqrt(9)."<br>";
// Saída: 3

echo sqrt(100)."<br>";
// Saída: 10


//Verificação de Tipo
var_dump(is_numeric(123));     // Saída: bool(true)
var_dump(is_numeric("123.45")); // Saída: bool(true)
var_dump(is_numeric("Olá"));   // Saída: bool(false)

var_dump(is_int(123));     // Saída: bool(true)
var_dump(is_int(123.45));  // Saída: bool(false)
var_dump(is_int("123"));   // Saída: bool(false) - É uma string!

var_dump(is_float(123.45)); // Saída: bool(true)
var_dump(is_float(123));    // Saída: bool(false)

?>