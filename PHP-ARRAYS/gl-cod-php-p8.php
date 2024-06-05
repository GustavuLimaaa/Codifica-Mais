<?php
// Array para armazenar os itens comprados e seus preços
$itens = ["Carne", "Suco", "Refrigerante", "Carvão", "Pão de alho","Queijo"];
$precos = [400.00, 60.00, 57.00, 29.57, 17.00,20.00];

// Solicita o número total de participantes do churrasco
echo "Digite o número total de participantes: ";
$participantes = intval(fgets(STDIN));

// calcular o valor que cada pessoa deve pagar
function calcularValorPorPessoa($valorTotal, $numeroParticipantes) {
    return $valorTotal / $numeroParticipantes;
}

// Verifica se o número de participantes é igual ou menor que um
if ($participantes <= 1) {
    echo "O churrasco foi cancelado, todo mundo furou!\n";
    exit;
}

// Calcula o valor total dos itens
$valorTotal = array_sum($precos);

// Calcula o valor que cada pessoa deve pagar
$valorPorPessoa = calcularValorPorPessoa($valorTotal, $participantes);

// Encontra o item mais caro
$itemMaisCaro = $itens[0];
$precoMaisCaro = $precos[0];
for ($i = 1; $i < count($itens); $i++) {
    if ($precos[$i] > $precoMaisCaro) {
        $itemMaisCaro = $itens[$i];
        $precoMaisCaro = $precos[$i];
    }
}

// Imprime o valor que cada pessoa deve pagar
echo "Cada pessoa deve pagar: R$ " . number_format($valorPorPessoa, 2, ',', '.') . "\n";

// Imprime o item mais caro
echo "O item mais caro foi: " . $itemMaisCaro . " (R$ " . number_format($precoMaisCaro, 2, ',', '.') . ")\n";
?>
