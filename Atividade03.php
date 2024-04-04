<?php 
$soma = 0;
$contador = 0;
while(true) {
    $numero = readline("Digite uma sequência de numero positivo(é um número negativo para encerrar): ");

    if($numero <0){
        break;
}
    $soma += $numero;
    $contador++;
}
    if($contador > 0){
        $media = $soma / $contador;
        echo"A média dos números positivo é: $media" .PHP_EOL;
    }




