<?php
$multiplique = readline("Escreva qual número você quer que seja multiplicado: ");
for($i=0; $i<=10; $i++) {
    echo$multiplique."x"."$i"."=".$i*$multiplique.PHP_EOL;
}
