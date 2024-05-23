<?php
// Solicitando ao usuário que digite dois números
echo "Digite o primeiro número (a): ";
$a = trim(fgets(STDIN));  // Lendo entrada do usuário via linha de comando
echo "Digite o segundo número (b): ";
$b = trim(fgets(STDIN));

// Garantindo que 'a' seja menor ou igual a 'b'
while ($a > $b) {
    echo "O primeiro número deve ser menor ou igual ao segundo número. Por favor, digite novamente.\n";
    echo "Digite o primeiro número (a): ";
    $a = trim(fgets(STDIN));
    echo "Digite o segundo número (b): ";
    $b = trim(fgets(STDIN));
}

// Calculando a soma dos números ímpares no intervalo [a, b]
$soma = 0;
for ($i = $a; $i <= $b; $i++) {
    if ($i % 2 !== 0) {  // Verificando se o número é ímpar
        $soma += $i;
    }
}

// Exibindo o resultado
echo "A soma de todos os números ímpares entre $a e $b é $soma.\n";
?>
