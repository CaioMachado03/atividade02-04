<?php
$numero = readline("Digite um número inteiro: ");
echo "Divisores de $numero são: ". PHP_EOL;
for($i=1; $i<=$numero; $i++){
    if($numero % $i==0){
        echo"$i".PHP_EOL;
    }
}