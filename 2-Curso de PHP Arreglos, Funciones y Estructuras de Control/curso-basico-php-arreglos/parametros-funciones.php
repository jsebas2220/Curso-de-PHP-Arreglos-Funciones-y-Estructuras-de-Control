<?php  

function es_estudiante_legend($platzi_rank) { // Se crea la funcion es_estudiante _legend donde $platzi_rank es un parametro de la funcion
    
    if ($platzi_rank >= 20000) { // Se crea la condicion de que si el parametro $platzi_rank es mayor o igual a 20000 se imprima el mensaje
        echo "¡Eres un estudiante Legend!\n"; // Se imprime el mensaje si se cumple la condicion
            }
    else {
        echo "Lo sentimos, aun no alcanzas el nivel legend\n"; // Se imprime el mensaje si no se cumple la condicion
    }

}

do { // Se crea un ciclo do while para que el programa se ejecute hasta que el usuario lo decida

    $platzi_rank_user = (int) readline("Por favor, dinos cual es tu Platzi Rank: "); //

    es_estudiante_legend($platzi_rank_user); // Se llama a la funcion es_estudiante_legend y se le pasa como parametro la variable $platzi_rank_user
    
} while(true); 



echo "\n"; // Se imprime un salto de linea para que el programa se vea ordenado