<?php
// Solicita a temperatura
echo "Digite a temperatura: ";
$temperatura = floatval(fgets(STDIN));

// Solicita ao usuário a unidade de medida
echo "Digite a unidade de medida (C para Celsius, F para Fahrenheit): ";
$unidade = trim(fgets(STDIN));

if (strtoupper($unidade) == 'C') {
    // Converte de Celsius para Fahrenheit
    $fahrenheit = ($temperatura * 9/5) + 32;
    echo "Temperatura: " . $temperatura . "°C\n";
    echo "Temperatura em Fahrenheit: " . $fahrenheit . "°F\n";
} elseif (strtoupper($unidade) == 'F') {
    // Converte de Fahrenheit para Celsius
    $celsius = ($temperatura - 32) * 5/9;
    echo "Temperatura: " . $temperatura . "°F\n";
    echo "Temperatura em Celsius: " . $celsius . "°C\n";
} else {
    echo "Unidade de medida inválida. Use 'C' para Celsius ou 'F' para Fahrenheit.\n";
}
?>