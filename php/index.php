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



$lista = array(5, 3, 4, 2, 1);
print_r($lista);
$lista = selection($lista);

print_r($lista);

?>