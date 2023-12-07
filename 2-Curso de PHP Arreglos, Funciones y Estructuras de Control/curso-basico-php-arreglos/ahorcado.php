<?php
// Palabras para el juego
$palabras = array("gato", "perro", "elefante", "jirafa", "leon"); // se crea el array palabras con las palabras para el juego

// Seleccionar una palabra al azar
$palabra = $palabras[array_rand($palabras)]; // se crea la variable palabra que obtiene una palabra al azar del array palabras

// Número de intentos permitidos
$intentosMaximos = 6; // se crea la variable intentosMaximos con el valor 6

// Letras adivinadas
$letrasAdivinadas = array(); // se crea el array letrasAdivinadas donde se guardarán las letras adivinadas 

// Número de intentos realizados
$intentosRealizados = 0; // se crea la variable intentosRealizados con el valor 0 donde se guardarán los intentos realizados

// Función para mostrar la palabra oculta
function mostrarPalabraOculta($palabra, $letrasAdivinadas) // se crea la función mostrarPalabraOculta con los parámetros palabra y letrasAdivinadas
{
    $oculta = ""; // se crea la variable oculta con el valor vacío
    foreach (str_split($palabra) as $letra) { // se crea un ciclo foreach  que recorre cada letra de la palabra con la función str_split que convierte la palabra en un array
        if (in_array($letra, $letrasAdivinadas)) { // se crea un condicional que verifica si la letra está en el array letrasAdivinadas con la función in_array que verifica si un valor existe en un array
            $oculta .= $letra; //   si la letra está en el array letrasAdivinadas, se agrega la letra a la variable oculta
        } else { // si la letra no está en el array letrasAdivinadas
            $oculta .= "_"; //  se agrega un guión bajo a la variable oculta
        }
    }
    return $oculta; // se retorna la variable oculta
}

// Función para mostrar las letras adivinadas
function mostrarLetrasAdivinadas($letrasAdivinadas) // se crea la función mostrarLetrasAdivinadas con el parámetro letrasAdivinadas
{
    return implode(", ", $letrasAdivinadas); // se retorna el array letrasAdivinadas con las letras separadas por una coma y un espacio
}

// Juego del ahorcado
while ($intentosRealizados < $intentosMaximos) { // se crea un ciclo while que se ejecuta mientras los intentos realizados sean menores que los intentos máximos
    // Mostrar la palabra oculta y las letras adivinadas
    echo "Palabra: " . mostrarPalabraOculta($palabra, $letrasAdivinadas) . "\n"; // se muestra la palabra oculta y las letras adivinadas
    echo "Letras adivinadas: " . mostrarLetrasAdivinadas($letrasAdivinadas) . "\n"; // se muestra las letras adivinadas
    // Solicitar una letra al usuario
    $letra = readline("Ingresa una letra: "); // se crea la variable letra que obtiene la letra ingresada por el usuario

    // Validar la letra ingresada
    if (strlen($letra) != 1 || !ctype_alpha($letra)) { // se crea un condicional que verifica si la letra ingresada es válida
        echo "Por favor, ingresa una letra válida.\n"; // si la letra no es válida, se muestra un mensaje
        continue; // se reinicia el ciclo
    }

    // Verificar si la letra ya fue adivinada
    if (in_array($letra, $letrasAdivinadas)) { // se crea un condicional que verifica si la letra ya fue adivinada
        echo "Ya has adivinado esa letra.\n"; // si la letra ya fue adivinada, se muestra un mensaje
        continue; // se reinicia el ciclo
    }

    // Agregar la letra a las letras adivinadas
    $letrasAdivinadas[] = $letra; // se agrega la letra al array letrasAdivinadas

    // Verificar si la letra está en la palabra
    if (strpos($palabra, $letra) === false) { // se crea un condicional que verifica si la letra está en la palabra con la función strpos que busca la posición de la primera ocurrencia de una subcadena en una cadena
        echo "La letra no está en la palabra.\n"; // si la letra no está en la palabra, se muestra un mensaje
        $intentosRealizados++; // se aumenta en 1 el valor de la variable intentosRealizados
    }

    // Verificar si se adivinaron todas las letras
    if (mostrarPalabraOculta($palabra, $letrasAdivinadas) == $palabra) { // se crea un condicional que verifica si se adivinaron todas las letras
        echo "¡Felicidades! Has adivinado la palabra.\n"; // si se adivinaron todas las letras, se muestra un mensaje
        break; // se termina el ciclo
    }
}

// Mostrar el resultado del juego
if ($intentosRealizados == $intentosMaximos) { // se crea un condicional que verifica si los intentos realizados son iguales a los intentos máximos
    echo "Lo siento, has perdido. La palabra era: " . $palabra . "\n"; // si los intentos realizados son iguales a los intentos máximos, se muestra un mensaje
}

// Fin del juego

