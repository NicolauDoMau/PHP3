<?php

$frutas = ["Uva", "Pera", "Maçã"];
echo count($frutas)."<br>";


$lista = ["Arroz", "Feijão"];
array_push($lista, "Macarrão", "Óleo");

print_r($lista);

$lista = ["Arroz", "Feijão", "Macarrão"];
$ultimo_item = array_pop($lista);

echo $ultimo_item."<br>";


$lista = ["Arroz", "Feijão", "Macarrão"];
$primeiro_item = array_shift($lista);

echo $primeiro_item."<br>";

$config = [
    'usuario' => 'admin',
    'senha'   => '123'
];

if (array_key_exists('usuario', $config)) {
    echo "A chave 'usuario' existe."."<br>";
}

$permissoes = ['ler', 'escrever', 'executar'];

if (in_array('escrever', $permissoes)) {
    echo "O usuário pode escrever."."<br>";
}

$array1 = ["a", "b"];
$array2 = ["c", "d"];
$resultado = array_merge($array1, $array2);

print_r($resultado);

$capitais = [
    'França'  => 'Paris',
    'Itália' => 'Roma'
];
$paises = array_keys($capitais);

print_r($paises);

$capitais = [
    'França'  => 'Paris',
    'Itália' => 'Roma'
];
$cidades = array_values($capitais);

print_r($cidades);


?>