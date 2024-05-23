<?php
// Exercício 1: Somar dois números Descrição: Escreva um programa que solicite ao usuário dois números e imprima a soma deles.

echo "Digite o primeiro número: ";
$numero1 = trim(fgets(STDIN));

echo "Digite o segundo número: ";
$numero2 = trim(fgets(STDIN));

// Calcula a soma dos números
$soma = $numero1 + $numero2;

// resultado
echo "A soma de $numero1 + $numero2 é: $soma";
?>

<?php

// Exercício 2: Calcular média de notas Descrição: Faça um programa que leia três notas de um aluno, calcule e mostre a média aritmética das notas.

echo "Digite o primeira nota: ";
$nota1 = trim(fgets(STDIN));

echo "Digite o segunda nota: ";
$nota2 = trim(fgets(STDIN));

echo "Digite o teceira nota: ";
$nota3 = trim(fgets(STDIN));

// Cálculo da média
$media = ($nota1 + $nota2 + $nota3) / 3;

// Exibe o resultado
echo 'A média das notas é: ' . number_format($media, 2) . "\n";
?>

<?php

// Exercício 3: Verificar maioridade Descrição: Crie um programa que pergunte a idade do usuário e diga se ele é maior de idade (18 anos ou mais) ou não.


echo "Digite sua idade: ";
$idade = trim(fgets(STDIN));

// Checar se é ou não maior de idade
if ($idade >= 18) {
    echo "Você é maior de idade.\n";
} else {
    echo "Você é menor de idade.\n";
}
?>

<?php

// Exercício 4: Contagem regressiva Descrição: Elabore um programa que faça uma contagem regressiva de 10 até 1 e depois mostre uma mensagem "Fogo!".


echo "Iniciando contagem regressiva:\n";

// contagem regressiva de 10 até 1
for ($i = 10; $i > 0; $i--) {
    echo $i . "\n";
}

// Mensagem final
echo "Fogo!\n";
?>

<?php
// Exercício 5: Par ou ímpar Descrição: Desenvolva um programa que leia um número e informe se ele é par ou ímpar


echo "Digite um numero: ";
$numero = trim(fgets(STDIN));
// checa se o numero é par ou impa
if ( $numero & 1 ) {
  echo "$numero é impar!";
} else {
  echo "$numero é par!";
}
?>

<?php
// Exercício 7: Tabela de Multiplicação Descrição: Faça um programa que imprime a tabela de multiplicação de 1 até 10 para um número fornecido pelo usuário.

echo "Digite um número para gerar a tabuada: ";
$numero = trim(fgets(STDIN));

// Imprime a tabuada
for ($i = 1; $i <= 10; $i++) {
  echo "$numero x $i = " . $numero * $i . PHP_EOL;
}

?>

<?php
//Exercício 9: Checando Primos Descrição: Escreva um programa que recebe um número e verifica se ele é um número primo ou não.

function isPrime($numero) {
    if ($numero <= 1) return false;
    
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) return false;
    }
    
    return true;
}
echo ("digite um numero para saber se é primo ou não:");
$numero = trim(fgets(STDIN));

echo isPrime($numero) ? "$numero é um número primo." : "$numero não é um número primo.";

?>