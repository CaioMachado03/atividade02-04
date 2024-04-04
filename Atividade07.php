<?php 
$peso = readline("Informe seu peso: ");
$altura = readline("Informe sua altura: ");
$imc= $peso / ($altura * $altura);
echo "Seu IMC é: " .number_format($imc, 2). PHP_EOL;
if($imc < 18.5){
    echo "Você está abaixo do peso ideal ".PHP_EOL;
} elseif ($imc < 25) {
    echo "Seu peso está ideal ";
} elseif ($imc < 30) {
    echo "Você está acima do peso";
} elseif ($imc < 35) {
    echo "Você está obeso em um caso simples ".PHP_EOL;
} elseif ($imc < 40) {
    echo "Você está obeso em um caso médio ".PHP_EOL;
} else {
    echo "Você está obeso em um caso grave ".PHP_EOL;
}
