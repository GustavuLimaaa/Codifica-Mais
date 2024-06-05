<?php
// Array para armazenar os nomes dos alunos
$nomesAlunos = [
    "Gustavo Lima",
    "Bruno Adão",
    "Carla Pereira",
    "Daniel Lioncio"
];

// Array para armazenar as notas dos alunos
$notasAlunos = [
    [8.5, 6.0, 7.8, 9.2, 5.5], // Notas de Gustavo Lima
    [7.0, 8.0, 6.5, 7.5, 8.5], // Notas de Bruno Adão
    [6.5, 7.5, 4.5, 5.5, 7.0], // Notas de Carla Pereira
    [5.0, 4.6, 7.8, 9.0, 6.0]  // Notas de Daniel Lioncio
];

// Calcular  média das notas de um aluno
function calcularMedia($notas) {
    $soma = array_sum($notas);
    $quantidadeNotas = count($notas);
    return $soma / $quantidadeNotas;
}

// Contar os alunos aprovados e reprovados
$aprovados = 0;
$reprovados = 0;

//Notas de cada aluno
foreach ($notasAlunos as $index => $notas) {
    $media = calcularMedia($notas);
    if ($media >= 7.0) {
        $status = "Aprovado";
        $aprovados++;
    } else {
        $status = "Reprovado";
        $reprovados++;
    }
    echo $nomesAlunos[$index] . ": Média = " . number_format($media, 2, ',', '.') . " - " . $status . "\n";
}

// Impressão do total de alunos aprovados e reprovados
echo "\nTotal de alunos aprovados: " . $aprovados . "\n";
echo "Total de alunos reprovados: " . $reprovados . "\n";
?>
