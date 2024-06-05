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

<?php
$numeros = array();
$dobros = array();

// Lê 6 números inteiros do usuário
for ($i = 0; $i < 6; $i++) {
    echo "Digite o " . ($i + 1) . "º número: ";
    $numeros[$i] = intval(fgets(STDIN));
}

for ($i = 0; $i < 6; $i++) {
    $dobros[$i] = $numeros[$i] * 2;
}

echo "O array com o dobro dos elementos é:\n";
for ($i = 0; $i < 6; $i++) {
    echo $dobros[$i] . "\n";
}
?>


<?php
// Inicializa um array vazio para armazenar os números
$numeros = array();

for ($i = 0; $i < 7; $i++) {
    echo "Digite o " . ($i + 1) . "º número: ";
    $numeros[$i] = intval(fgets(STDIN));
}

echo "Digite o número a ser procurado: ";
$numeroProcurado = intval(fgets(STDIN));

$posicoes = array();

// Verifica se o número está presente no array e armazena as posições
for ($i = 0; $i < 7; $i++) {
    if ($numeros[$i] == $numeroProcurado) {
        $posicoes[] = $i;
    }
}

// Imprime o resultado
if (count($posicoes) > 0) {
    echo "O número " . $numeroProcurado . " está presente nas posições: ";
    foreach ($posicoes as $posicao) {
        echo $posicao . " ";
    }
    echo "\n";
} else {
    echo "O número " . $numeroProcurado . " não está presente no array.\n";
}
?>