<?php
/*
 * EXEMPLO REAL: Processamento e Relatório de Cliente
 *
 * Este script pega dados brutos de um usuário, limpa-os,
 * faz cálculos (idade, estatísticas de compras) e
 * exibe um relatório formatado.
 */

// --- 1. DADOS BRUTOS (Simulando um formulário ou banco de dados) ---

$dados_brutos = [
    'nome'     => '   Nicolau Do Mau   ',
    'email'    => 'nicolaudomau@gmail.com',
    'nasc'     => '02/07/2009',
    'compras'  => '120.00, 67.00, 45.50, 397.00, 69.69' // Compras como uma única string
];

echo "--- DADOS BRUTOS --- <br>";
print_r($dados_brutos);
echo "<br>--- INICIANDO PROCESSAMENTO --- <br><br>";

// --- 2. PROCESSAMENTO COM FUNÇÕES DE STRING ---

// trim(): Remove espaços do início e fim
$nome_limpo = trim($dados_brutos['nome']);

// strtolower(): Converte tudo para minúsculo
$nome_lower = strtolower($nome_limpo);
$email_limpo = strtolower($dados_brutos['email']);

// ucwords(): Converte a primeira letra de cada palavra para maiúsculo
$nome_formatado = ucwords($nome_lower);

// explode(): "Explode" a string de compras em um ARRAY, usando a vírgula
$compras_array = explode(',', $dados_brutos['compras']);


// --- 3. PROCESSAMENTO COM FUNÇÕES DE DATA E HORA (DateTime) ---

// Pega a data e hora de agora
$hoje = new DateTime();

// DateTime::createFromFormat(): Converte a string (formato BR) para um objeto Data
$data_nascimento = DateTime::createFromFormat('d/m/Y', $dados_brutos['nasc']);

// diff(): Calcula a diferença (intervalo) entre as duas datas
$intervalo = $hoje->diff($data_nascimento);

// Pega a propriedade 'y' (anos) do intervalo
$idade = $intervalo->y;


// --- 4. PROCESSAMENTO COM FUNÇÕES DE ARRAY E MATEMÁTICA ---

// count(): Conta quantos itens (compras) existem no array
$total_de_compras = count($compras_array);

// array_sum(): Soma todos os valores do array (função de array matemática)
$valor_total_gasto = array_sum($compras_array);

// max() e min(): Encontram o maior e o menor valor no array
$maior_compra = max($compras_array);
$menor_compra = min($compras_array);

// round(): Arredonda o valor da média de gastos
$media_gasto = 0;
if ($total_de_compras > 0) {
    // Cálculo de média simples
    $media_gasto = round($valor_total_gasto / $total_de_compras, 2);
}


// --- 5. GERAÇÃO DO RELATÓRIO (Strings e Números) ---

echo "--- RELATÓRIO DO CLIENTE GERADO EM " . $hoje->format('d/m/Y H:i:s') . " ---<br>";

// sprintf(): Monta uma string formatada, substituindo os coringas (%s, %d, %f)
$relatorio_pessoal = sprintf(
    "Nome: %s<br>E-mail: %s<br>Idade: %d anos<br>",
    $nome_formatado,
    $email_limpo,
    $idade
);
echo $relatorio_pessoal;

echo "--- ESTATÍSTICAS DE COMPRAS ---<br>";

// number_format(): Formata os números para o padrão monetário brasileiro
echo "Total de pedidos: " . $total_de_compras . "<br>";
echo "Valor total gasto: R$ " . number_format($valor_total_gasto, 2, ',', '.') . "<br>";
echo "Média por pedido: R$ " . number_format($media_gasto, 2, ',', '.') . "<br>";
echo "Maior compra: R$ " . number_format($maior_compra, 2, ',', '.') . "<br>";
echo "Menor compra: R$ " . number_format($menor_compra, 2, ',', '.') . "<br>";

?>