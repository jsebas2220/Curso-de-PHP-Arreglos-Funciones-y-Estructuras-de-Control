<?php

$precios_de_cafes = [12, 56, 32, 89, 2, 1]; // Array con los precios de los cafés

usort($precios_de_cafes, function($a, $b){ // usort() ordena un array y recibe como parámetros el array a ordenar y una función anónima que se encargará de ordenar el array
    return $a <=> $b; // la función anónima recibe dos parámetros, $a y $b, y los compara con el operador nave espacial (<=>) y retorna el resultado de la comparación
});

var_dump( $precios_de_cafes ); // se imprime el array ordenado