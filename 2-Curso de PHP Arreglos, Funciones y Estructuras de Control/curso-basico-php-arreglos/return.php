<?php

function freddy() { // Función que devuelve una frase aleatoria de Freddy Vega

    $numero_aleatorio = rand(1, 4); // Genera un número aleatorio entre 1 y 4 con la función rand()
    $frase_de_freddy = ""; // Variable que almacenará la frase de Freddy Vega

    switch ($numero_aleatorio) { // creamos un switch para que dependiendo del número aleatorio, se asigne una frase a la variable $frase_de_freddy
        case 1: // si el número aleatorio es 1, se asigna la frase "Nunca pares de aprender"
            $frase_de_freddy = "Nunca pares de aprender.\n"; // se asigna la frase a la variable $frase_de_freddy y el \n es para que se haga un salto de línea
            break; // se usa break para que el switch no siga evaluando los demás casos si ya se cumplió el caso 1
        
        case 2: // si el número aleatorio es 2, se asigna la frase "Las empresas no son familia"
            $frase_de_freddy = "Las empresas no son familia.\n"; // se asigna la frase a la variable $frase_de_freddy y el \n es para que se haga un salto de línea
            break; // se usa break para que el switch no siga evaluando los demás casos si ya se cumplió el caso 2

        case 3: // si el número aleatorio es 3, se asigna la frase "La tecnología es el futuro"
            $frase_de_freddy = "La tecnología es el futuro.\n"; // se asigna la frase a la variable $frase_de_freddy y el \n es para que se haga un salto de línea
            break; // se usa break para que el switch no siga evaluando los demás casos si ya se cumplió el caso 3

        case 4: // si el número aleatorio es 4, se asigna la frase "AMO PHP"
            $frase_de_freddy = "AMO PHP.\n"; // se asigna la frase a la variable $frase_de_freddy y el \n es para que se haga un salto de línea
            break; // se usa break para que el switch no siga evaluando los demás casos si ya se cumplió el caso 4
    }

    return $frase_de_freddy; // se retorna la frase de Freddy Vega

}

echo freddy(); //   se imprime la frase de Freddy Vega

echo "\n"; // se imprime un salto de línea