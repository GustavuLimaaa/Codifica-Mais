<?php
// Função para aplicar o desconto
function aplicarDesconto($valorCompra, $percentualDesconto) {
    $valorDesconto = ($valorCompra * $percentualDesconto) / 100;
    return $valorCompra - $valorDesconto;
}

// Função para calcular o desconto progressivo
function calcularDescontoProgressivo($valorCompra) {
    if ($valorCompra < 100) {
        // Sem desconto
        return $valorCompra;
    } elseif ($valorCompra >= 100 && $valorCompra <= 500) {
        // Desconto de 10%
        return aplicarDesconto($valorCompra, 10);
    } else {
        // Desconto de 20%
        return aplicarDesconto($valorCompra, 20);
    }
}

// Solicita o valor da compra ao usuário
echo "Digite o valor da compra: ";
$valorCompra = floatval(fgets(STDIN));

// Calcula o valor final com desconto progressivo
$valorFinal = calcularDescontoProgressivo($valorCompra);

// Exibe o valor final após a aplicação do desconto progressivo
echo "Valor final após desconto progressivo: R$ " . number_format($valorFinal, 2, ',', '.') . "\n";
?>
