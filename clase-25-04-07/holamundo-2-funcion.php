<?php
/*Veremoos
    variables
    Estructura de control: if/else/switch/for/while/asignacion
*/
function imprimirSaludo(){
    //declaracion de variables
    //las variables son muy flexibles no es fuertemente tipificada
    //internamente php si esta transformado en tipos de datos
    //tipos de datos que soporta: booleano, entero, float, string,object, null, resource
    
    echo "<h1>Hola soy inexistente".$nombre." ".gettype($nombre) . "</h1> \n"; 
    
    $nombre = "Jesica";
    echo "<h2>Hola soy ".$nombre." ". gettype($nombre) . "<h2>";

    $nombre = 2;
    echo "<h2>Hola soy numero".$nombre." ". gettype($nombre). "<h2>";

    $nombre = array("Belen", 2, 10.3);//funcion que me devuelve una array loca
    echo "<h1>Hola soy ".$nombre." ". gettype($nombre) . "</h1> \n"; 

    $alias = "chechi";

    //if
    if(is_string($alias))
        echo "Hola ". $alias . "<br/>";
    else
        echo "Eso no es un nombre, creo que es un bot ";

    //if inline
    echo is_string($nombre) ? "Hola ". $alias : "Eso no es un nombre, creo que es un bot" . "<br>";
    
    //switch
    $alias = "Liu Kang";
    switch($alias){
        case "Bel":
            echo "Hola!";
            break;
        case "Paul":
            echo "Hello!";
            break;
        default:
            echo "Konnichiwa";

    }
    
    $numero = 10;
    $numero = -10;
    $numero = 010; //numero octal
    $numero = 0xAA; //numero hexadecimal
    //el numero 0 y 1, numeros negativos, null, "", arcodeado lo toma como valores booleanos

    echo "" ? "<br>verdadero":"<br>falso";

    //IMPORTANTISIMO BUENA PRACTICA: Validar variables 
    // porque en php no se si la variable existe

    echo isset($variable) && $variable != null? "<br>Hola". $variable: "<br>Hola perdida";
    /*En php el usuario me pasa los datos que lo voy a usar como variables por medio del form html
    y en ese form puede q el user me lo haya mandado o no entonces hay que validar */
    
    //COMILLAS
    echo "<h2>Variaciones de comillas</h2>";
    $variable = "firulais";
    echo "Hola ".$variable;

    echo "<br>Hola $variable";

    echo '<br>Hola $variable';//escribe textualmente
    echo "<br>Hola \"variable\" $variable";//estapear?

    //para las arrays solo se puede usar . para concatenar
    echo "<br>Hola ". $variable[1];

     //comportamiento de puntero
     $padawan = "Facu";
     $master = "Ale";

     $jedi= "padawan";

     echo "<br>Que la fuerza te acompanie ". $$jedi; //$$ actua como puntero

    //DEFINIR CONSTANTE EN PHP
    define("Unlam", "Universidad Nacional de la Matanza");
    echo "<br>". Unlam ."<br>";

    //CONSTANTES YA DEFINIDAS
    echo PHP_VERSION;
    echo "<br>".__LINE__."<br>"; //donde estoy parada




    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    imprimirSaludo();
    ?>
</body>
</html>