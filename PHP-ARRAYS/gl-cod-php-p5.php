<?php
// Função que calcula o valor final com desconto
function calcularValorComDesconto($valorOriginal, $percentualDesconto) {
    $valorDesconto = ($valorOriginal * $percentualDesconto) / 100; // desconto
    
    $valorFinal = $valorOriginal - $valorDesconto;
    
    
    return $valorFinal; // Retorna o valor final com desconto
}

// Exemplo 
$valorOriginal = 850.0; // Valor original do produto (R$)
$percentualDesconto = 17; // Percentual de desconto

// Calcula o valor final com desconto
$valorFinalComDesconto = calcularValorComDesconto($valorOriginal, $percentualDesconto);

// Exibe o resultado
echo "Valor original: R$ " . number_format($valorOriginal, 2, ',', '.') . "\n";
echo "Percentual de desconto: " . $percentualDesconto . "%\n";
echo "Valor final com desconto: R$ " . number_format($valorFinalComDesconto, 2, ',', '.') . "\n";
?>
