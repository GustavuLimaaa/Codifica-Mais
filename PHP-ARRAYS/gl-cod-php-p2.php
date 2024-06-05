<?php
// Solicita o valor total da conta
echo "Digite o valor total da conta (em reais): ";
$valorTotal = floatval(fgets(STDIN));

// Solicita a porcentagem da gorjeta
echo "Digite a porcentagem da gorjeta: ";
$porcentagemGorjeta = floatval(fgets(STDIN));

// Calcula o valor da gorjeta
$valorGorjeta = ($valorTotal * $porcentagemGorjeta) / 100;

// Calcula o valor total a ser pago, incluindo a gorjeta
$valorTotalComGorjeta = $valorTotal + $valorGorjeta;

// Exibe os resultados
echo "Valor da gorjeta: R$ " . number_format($valorGorjeta, 2, ',', '.') . "\n";
echo "Valor total a ser pago: R$ " . number_format($valorTotalComGorjeta, 2, ',', '.') . "\n";
?>
