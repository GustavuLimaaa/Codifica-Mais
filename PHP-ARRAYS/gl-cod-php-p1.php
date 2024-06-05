<?php
$numeros = array();
$menorValor = 10;

for ($i = 0; $i < 10; $i++) {
    echo "Digite o " . ($i+1) . "º número: ";
    $numeros[$i] = intval(fgets(STDIN));

    if ($numeros[$i] < $menorValor) {
        $menorValor = $numeros[$i];
    }
}

echo "O menor valor digitado foi: " . $menorValor;
?>

<?php
echo "Digite um número: ";
$numero = intval(fgets(STDIN));

echo "Tabela de multiplicação de " . $numero . ":\n";
for ($i = 1; $i <= 10; $i++) {
    echo $numero . " x " . $i . " = " . ($numero * $i) . "\n";
}
?>

<?php
$numeros = array();

$soma = 0;

for ($i = 0; $i < 5; $i++) {
    echo "Digite o " . ($i + 1) . "º número: ";
    $numeros[$i] = intval(fgets(STDIN));
}

// Calcula a soma dos elementos que são pares
for ($i = 0; $i < 5; $i++) {
    if ($numeros[$i] % 2 == 0) {
        $soma += $numeros[$i];
    }
}

echo "A soma dos elementos pares é: " . $soma . "\n";
?>

<?php
$numeros = array();

// Lê 5 números inteiros do usuário
for ($i = 0; $i < 5; $i++) {
    echo "Digite o " . ($i + 1) . "º número: ";
    // Lê a entrada do usuário e converte para inteiro
    $numeros[$i] = intval(fgets(STDIN));
}

// Imprime o array em ordem inversa
echo "O array em ordem inversa é:\n";
for ($i = 4; $i >= 0; $i--) {
    echo $numeros[$i] . "\n";
}
?>
