<?php

// Data e hora atuais
$agora = new DateTime();

// Uma data específica
$natal = new DateTime('2025-12-25');

$agora = new DateTime();

// Formato Brasileiro
echo $agora->format('d/m/Y H:i:s')."<br>";
// Saída: 29/10/2025 20:14:15 (ou a hora atual)

// Formato de Banco de Dados (ISO 8601)
echo $agora->format('Y-m-d H:i:s')."<br>";
// Saída: 2025-10-29 20:14:15

$hoje = new DateTime();
echo "Hoje é: " . $hoje->format('d/m/Y') . "<br>";

// Adiciona 10 dias
$hoje->modify('+10 days');
echo "Daqui a 10 dias será: " . $hoje->format('d/m/Y') . "<br>";

// Subtrai 1 mês
$hoje->modify('-1 month');
echo "Um mês atrás era: " . $hoje->format('d/m/Y') . "<br>";

$data_nascimento = new DateTime('1990-05-15');
$hoje = new DateTime();

$intervalo = $hoje->diff($data_nascimento);

// O $intervalo é um objeto DateInterval
echo "Você tem " . $intervalo->y . " anos."."<br>";
// Saída: Você tem 35 anos.

// Você também pode ver a diferença total em dias
echo "Diferença total de dias: " . $intervalo->days."<br>";

$data_string = '20/03/2026';
$formato = 'd/m/Y'; // Informa ao PHP como a string está formatada

$data_obj = DateTime::createFromFormat($formato, $data_string);

echo "O ano é: " . $data_obj->format('Y')."<br>";
// Saída: O ano é: 2026

?>