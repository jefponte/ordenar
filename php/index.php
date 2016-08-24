<?php

function selection($lista){
    for($i = 0; $i < sizeof($lista); $i++){
        $menor = $i;
        for($j = $i; $j < sizeof($lista); $j++){
            if($lista[$j] < $lista[$menor]){
                $menor = $j;
            }
        }
        $auxiliar = $lista[$i] ;
        $lista[$i] = $lista[$menor];
        $lista[$menor] = $auxiliar;
    }
    return $lista;
}

function insertion($lista){
    for($i = 1; $i < sizeof($lista); $i++){
        $eleito = $lista[$i];
        for($j = $i; $j > 0 && $eleito < $lista[$j -1]; $j--){
            $lista[$j] = $lista[$j-1];
            
        }
        $lista[$j] = $eleito;
    }
    return $lista;
    
}

$lista = array(5, 3, 4, 2, 1);
print_r($lista);
$lista = insertion($lista);

print_r($lista);

