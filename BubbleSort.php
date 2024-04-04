<?php
function bubbleSort($array) {
    $n = count($array);
  
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $troca = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $troca;
            }
        }
    }
    return $array;
}
    echo "Digite os números separados por espaço em ordem aleatória: ";
        $input = readline();
        $numero = explode(" ", $input);
        $numero = array_map("trim", $numero);
        $numerosOrdem = bubbleSort($numero);
    echo "Sequência de números: " . implode(" ", $numerosOrdem) . PHP_EOL;