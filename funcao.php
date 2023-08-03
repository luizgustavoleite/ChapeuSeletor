<?php

function ContarCaracteres($palavra){
    $qtd_letras = strlen($palavra);
    if($qtd_letras % 2 == 0){
        $enviar = 0;
    }
    else{
        $enviar = 1;
    }
    return $enviar;
}