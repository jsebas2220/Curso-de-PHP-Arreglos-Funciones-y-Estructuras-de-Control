<?php

// function suma($a = 1, $b = 1) { // Creando la función suma con dos parámetros
//    echo "La suma de $a + $b es: " . $a + $b . "\n"; // Imprimiendo la suma de los dos parámetros
//}

// suma(); // Llamando a la función suma sin parámetros

// $arreglo1 = [1, 2, 3]; // Creando un arreglo con tres elementos
// $arreglo2 = [4, 5, 6]; // Creando un arreglo con tres elementos

// $resultado = [...$arreglo1, ...$arreglo2]; // Creando un arreglo con los elementos de los dos arreglos anteriores

// var_dump($resultado); // Imprimiendo el arreglo resultado


// function suma($a, $b) { //  Creando la función suma con dos parámetros
//    echo "La suma de $a + $b es: " . $a + $b . "\n"; // Imprimiendo la suma de los dos parámetros
//}

//$numeros = [1, 2]; // Creando un arreglo con dos elementos
//$numeros2 = [50, 20]; // Creando un arreglo con dos elementos
//$numeros3 = [10000, 2]; // 

//suma(...$numeros); //  Llamando a la función suma con los elementos del arreglo numeros
//suma(...$numeros2); // Llamando a la función suma con los elementos del arreglo numeros2
//suma(...$numeros3); // Llamando a la función suma con los elementos del arreglo numeros3

function suma_infinita(...$params) { // Creando la función suma_infinita con un parámetro infinito

    $suma = 0; // Creando la variable suma con valor 0
    
    foreach ($params as $numero) { // Creando un ciclo foreach para recorrer el arreglo params
        $suma += $numero; // 
    }

    echo "La sumatoria es: $suma \n"; // Imprimiendo la sumatoria de los elementos del arreglo params

}

suma_infinita(1, 2); //  Llamando a la función suma_infinita con dos parámetros
suma_infinita(1, 2, 3); // Llamando a la función suma_infinita con tres parámetros
suma_infinita(100, 40, 2, 9, 3); // Llamando a la función suma_infinita con cinco parámetros

echo "\n"; // Imprimiendo un salto de línea para que el programa se vea ordenado