<?php

$idade = 18;
$numeroDePessoas = 2;

echo "Voce só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >=18) {
    echo "Voce tem $idade anos. Pode entrar Sozinho.";
    }elseif ($idade >=16 && $numeroDePessoas >1) {       
         echo "Voce tem $idade anos, está acompanhado(a), então pode entrar.";
    } else {
        echo "Voce só tem $idade anos. Voce não pode  entrar.";
    }

    echo PHP_EOL;
    echo "ADEUS!";
    