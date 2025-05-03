<?php
$nombres = array("jesi","bel","ger","facu","melu");

var_dump($nombres);//nos permite ver la variable 
// complete en php en este caso nos dara:
//el indice 0,1,2,...
//el tipo de dato (cant caracteres)
//el valor guardado en cada indice

echo "<br> Array Asociativo: Parecido a map en java clave y valor";

$frutas = array(5000 => "sandia", 
                50 =>"frutilla", 
                300=>"manzana",
                20000 =>"banana",
                100 =>"mora");

echo "<br>";                
var_dump($frutas);

echo "<br>Mostrar una determinada posicion segun el indice ('50')";
echo "<br>". $frutas[50];

echo "<br>Matriz";

$personas = [
                "profes" =>
                        [
                            "2334444" => ["nombre" => "German", "apellido" => "Gentile"],
                            "4312333" => ["nombre" => "Facundo", "apellido" => "Daranno"]
                        ],
                "alumnos" =>[  "Jesi", 
                                "Elian", 
                                "Nico", 
                                "Agus"
                            ]

            ];

echo "<br>".$personas["profes"][2334444]["nombre"] . "<br>";