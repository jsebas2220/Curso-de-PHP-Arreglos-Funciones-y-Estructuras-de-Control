<?php

// Se crea la función get pokemon
function get_pokemon() {

    $numero_aleatorio = rand(1, 5); // Se crea una variable con un número aleatorio entre 1 y 5

    switch ($numero_aleatorio) { // Se crea un switch con la variable anterior
        case 1: // Si el número es 1, se imprime Pikachu
            echo "Pikachu\n"; // Se imprime Pikachu
            break; // Se termina el switch
        
        case 2: // Si el número es 2, se imprime Charmander
            echo "Charmander\n"; // Se imprime Charmander
            break; // Se termina el switch

        case 3: // Si el número es 3, se imprime Mewtwo
            echo "Mewtwo\n"; // Se imprime Mewtwo
            break;// Se termina el switch
        
        default: // Si el número es 4 o 5, se imprime Lo siento, no hay pokémon para ti :c
            echo "Lo siento, no hay pokémon para ti :c\n"; // Se imprime Lo siento, no hay pokémon para ti :c
    }

}

for ($i=0; $i < 20; $i++) {  // Se crea un for para imprimir 20 pokémon
    get_pokemon(); // Se llama a la función get_pokemon
}

echo "\n"; // Se imprime un salto de línea