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
