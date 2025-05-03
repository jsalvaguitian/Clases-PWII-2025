<?php
//enviando parametros
function imprimirSaludo($nombre = "fulano"){
    echo "<br>Hola ".$nombre;
}

echo "<br>Se envio un parametro";
imprimirSaludo("Jesica");

echo "<br>No se envio un parametro. Se uso uno por defecto";
imprimirSaludo();

echo "<br>Pasando valores por referencia (puntero en C) para que cambie tanto dentro de la funcion como por fuera";
/* 
al ser una variable primitiva, envia a la funcion una copia del valor
como parametro y no en si a la variable.
*/
function incrementar(&$valor){//aqui paso directamente la direccion de la variable y no solamente el valor
    $valor++;
}

$miValor = 2;
incrementar($miValor);
echo "<br>". $miValor;

