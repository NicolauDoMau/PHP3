<?php

$texto = "Olá, mundo!";
echo strlen($texto)."<br>";
// Saída: 12

$frase = "Eu gosto de maçã.";
$nova_frase = str_replace("maçã", "banana", $frase);
echo $nova_frase."<br>";
// Saída: Eu gosto de banana.

$email = "wesley12teste@gmail.com";
$dominio = substr($email, 8); // Pega tudo a partir do índice 8
echo $dominio."<br>";
// Saída: gmail.com

$usuario = substr($email, 0, 7); // Pega 7 caracteres a partir do índice 0
echo $usuario."<br>";
// Saída: wesley123teste

$texto = "Isso não é Um TESTE";
echo strtolower($texto)."<br>";
// Saída: isso não é um teste

$texto = "ISSO É UM TESTE";
echo strtoupper($texto)."<br>";
// Saída: ISSO É UM TESTE

$nome = "Wesley";
echo ucfirst($nome)."<br>";
// Saída: Wesley

$entrada = "   oi   ";
$limpo = trim($entrada);
echo $limpo."<br>";
// Saída: oi

$data = "27-04-2006";
$partes = explode("-", $data);
// $partes agora é um array: ["27", "04", "2006"]
echo $partes[0]."<br>"; // Dia
// Saída: 27

$array = ["Maçã", "Banana", "Laranja"];
$lista_compras = implode(", ", $array);
echo $lista_compras."<br>";
// Saída: Maçã, Banana, Laranja

$frase = "O gato subiu no telhado.";
$posicao = strpos($frase, "gato");

if ($posicao !== false) {
    echo "A palavra 'gato' foi encontrada na posição: " . $posicao;
} else {
    echo "A palavra 'gato' não foi encontrada. "."<br>";
}
// Saída: A palavra 'gato' foi encontrada na posição: 2

$nome = "Isabella";
$idade = 20;
$texto = sprintf("<br>"."O nome dela é %s e ela tem %d anos.", $nome, $idade);
echo $texto."<br>";
// Saída: O nome dela é Isabella e ela tem 20 anos.

?>