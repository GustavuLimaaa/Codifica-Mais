<?php
// largura do retângulo
echo "Digite a largura do retângulo (em metros): ";
$largura = floatval(fgets(STDIN));

// altura do retângulo
echo "Digite a altura do retângulo (em metros): ";
$altura = floatval(fgets(STDIN));

// Calculo de área do retângulo
$area = $largura * $altura;

// Calculo do perímetro do retângulo
$perimetro = 2 * ($largura + $altura);

// Exibe os resultados com as unidades de medida corretas
echo "Largura: " . $largura . " metros\n";
echo "Altura: " . $altura . " metros\n";
echo "Área: " . $area . " m²\n";
echo "Perímetro: " . $perimetro . " metros\n";
?>
