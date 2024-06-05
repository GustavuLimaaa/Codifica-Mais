<?php
// Função para calcular o IMC
function calcularIMC($peso, $altura) {
    return $peso / ($altura * $altura);
}

// Função para classificar o IMC
function classificarIMC($imc) {
    if ($imc < 18.5) {
        return "Magreza";
    } elseif ($imc >= 18.5 && $imc <= 24.9) {
        return "Normal";
    } elseif ($imc >= 25 && $imc <= 29.9) {
        return "Sobrepeso";
    } elseif ($imc >= 30 && $imc <= 34.9) {
        return "Obesidade grau I";
    } elseif ($imc >= 35 && $imc <= 39.9) {
        return "Obesidade grau II";
    } else {
        return "Obesidade grau III";
    }
}

// Solicita ao usuário o peso
echo "Digite seu peso (em kg): ";
$peso = floatval(fgets(STDIN));

// Solicita ao usuário a altura
echo "Digite sua altura (em metros): ";
$altura = floatval(fgets(STDIN));

// Calcula o IMC
$imc = calcularIMC($peso, $altura);

// Classifica o IMC
$classificacao = classificarIMC($imc);

// Exibe o resultado
echo "Seu IMC é: " . number_format($imc, 2, ',', '.') . " kg/m²\n";
echo "Classificação: " . $classificacao . "\n";
?>
