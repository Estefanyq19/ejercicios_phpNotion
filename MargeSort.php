<?php
function mergeSort($array) {
    $length = count($array);
    //Si tiene un solo elemento ya está ordenado
    if ($length <= 1) {
        return $array;
    }
    
    $mid = (int)($length/2);
    //Dividimos en 2 mitades
    $left = array_slice($array, 0, $mid);
    $right = array_slice($array, $mid);
    
    $left = mergeSort($left);
    $right = mergeSort($right);
    
    //combinamos las 2 mitades
    return merge($left, $right); 
}

function merge($left, $right) {
    $resultado = [];
    $leftIndex = 0;
    $rightIndex = 0;
    
    //comparamos y combinamos
    while ($leftIndex < count($left) && $rightIndex < count($right)) {
        if ($left[$leftIndex] <= $right[$rightIndex]) {
            $resultado[] = $left[$leftIndex];  // Faltaba punto y coma
            $leftIndex++;
        } else {
            $resultado[] = $right[$rightIndex];  
            $rightIndex++;
        }
    }
    
    //agregamos elementos restantes
    while ($leftIndex < count($left)) {
        $resultado[] = $left[$leftIndex];
        $leftIndex++;
    }
    
    while ($rightIndex < count($right)) {
        $resultado[] = $right[$rightIndex];
        $rightIndex++;
    }
    
    return $resultado;
}

$numeros = [64, 34, 25, 12, 22, 11, 90,1000,999,101,90.1];
$ordenado = mergeSort($numeros);
print_r($ordenado);
?>