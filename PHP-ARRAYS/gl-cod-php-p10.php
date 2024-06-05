<?php
// Dados dos funcionários
$funcionarios = [
    ["nome" => "Pedro", "salarioBase" => 2500.00, "horasExtras" => 10],
    ["nome" => "Renata", "salarioBase" => 3000.00, "horasExtras" => 5],
    ["nome" => "Sérgio", "salarioBase" => 2800.00, "horasExtras" => 8],
    ["nome" => "Vanessa", "salarioBase" => 3200.00, "horasExtras" => 12],
    ["nome" => "André", "salarioBase" => 1700.00, "horasExtras" => 0]
];

// Função para calcular o salário total
function calcularSalarioTotal($salarioBase, $horasExtras, $valorHoraExtra) {
    $salarioTotal = $salarioBase + ($horasExtras * $valorHoraExtra);
    return $salarioTotal;
}

// Valor da hora extra
$valorHoraExtra = 50.00;

// Processamento dos dados dos funcionários
foreach ($funcionarios as $funcionario) {
    $salarioTotal = calcularSalarioTotal($funcionario["salarioBase"], $funcionario["horasExtras"], $valorHoraExtra);
    echo "Funcionário: " . $funcionario["nome"] . "\n";
    echo "Salário Base: R$ " . number_format($funcionario["salarioBase"], 2, ',', '.') . "\n";
    echo "Horas Extras: " . $funcionario["horasExtras"] . "\n";
    echo "Salário Total: R$ " . number_format($salarioTotal, 2, ',', '.') . "\n\n";
}
?>
