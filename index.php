<?php

echo "ola mundo!<br>";
echo "<h4>Unimar - ADS 2023</h4></br>";

$idade = 20;

if ($idade >= 18) {
    echo "Maior de idade<br>";
} else {
    echo "Menor de idade<br>";
}

$altura = 1.82;

if ($altura >= 2) {
    echo " Muito Alto<br>";
} elseif ($altura >= 1.90) {
    echo "Alto<br>";
} elseif ($altura >= 1.70) {
    echo "Padrão<br>";
} else {
    echo "Baixo<br>";
}


$limite = 10;
$i = 0;

echo "---------------------<br>";
echo "<h4>While</h4>";

while ($i <= 10) {
    echo "{$i} <br>";
    $i++;
}

echo "---------------------<br>";
echo "<h4>For</h4>";

for ($i = 10; $i >= 0; $i--) {
    echo "{$i} <br>";
}

echo "---------------------<br>";
echo "<h4>Listas</h4>";

$lista = array(0,1,2,3,4,5,6,7,8,9,10);

echo "O tamanho da lista é " . count($lista) . "<br>";
echo "O tamanho da lista é " . sizeof($lista) . "<br>";

for ($i = 0; $i < count($lista); $i++) {
    echo "Elemento : {$lista[$i]} <br>";
}

foreach ($lista as $elemento) {
    echo "Usando foreach {$elemento} <br>";
}

foreach ($lista as $idx => $element) {
    echo "Na posição {$idx} temos o elemento {$element} <br>";
}

$aluno = array(
    "nome" => "Joao",
    "idade" => "21",
    "curso" => "ADS",
    "disciplina" => "POO",
);

echo "Esse é um aluno: <br>";
foreach ($aluno as $chave => $valor) {
    echo "<strong>{$chave}:</strong> $valor <br>";
}