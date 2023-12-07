<?php

function obtener_hora() { // se crea la función obtener_hora 
    $hora_actual = date("H:i:s"); // se crea la variable hora_actual que obtiene la hora actual con la función date
    return $hora_actual; // Retorna la hora actual
}

echo "¡Hola! ¿Me podrías decir qué hora es? \n"; // se imprime el mensaje
echo "¡Claro! Son las " . obtener_hora(); // se imprime el mensaje y se llama a la función obtener_hora

echo "\n"; // se imprime un salto de línea