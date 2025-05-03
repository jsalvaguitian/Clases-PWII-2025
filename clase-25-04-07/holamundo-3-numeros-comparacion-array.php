<?php

$total = 1+1;

echo $total. "<br>";

$total += 1;

echo $total. "<br>";

echo ++$total. "<br>";//incrementa antes de hacer echo

echo $total++. "<br>";//incrementa despues de hacer echo y no se ve el cambio excepto que imprima de vuelta

echo $total. "<br>";

$numero =2;
if($numero== "2") echo "<br>Somos 2 jeje aunque uno sea entero y el otro un string";

if($numero==2 && is_integer($numero))
     echo "<br>Somos numero 2 tanto tambien el tipo de datos";

//existe and or pero para numeros binarios

//ARRAY
$nombres = array("Jesi", "Bel", "Ger", "Facu", "Lean", "Geral");

echo "<br>Con FOREACH";

foreach($nombres as $nombre)
echo "<br>Hola $nombre";
//-------------------------------
echo "<br>Con FOR simple";

echo "<br>Agrego un nombre en la array"; 
$nombres[]= "Nahuel";

for($i = 0; $i < count($nombres); $i++)
     echo "<br>Hola ".$nombres[$i];

//--------------------------------
echo "<br>Con WHILE";

die();

$i = 0;
$longitud = count($nombres);

while($i < $longitud){
     echo "<br>Hola ".$nombres[$i];
     $i++;
}
//--------------------------------
/*
die() vs exit()
practicamente es lo mismo
Excepto en linux si lo ejecuto en la terminal
el script exti() devuelve un valor diciendo que termino bien
el script die() devuelve un valor diciendo que terminal mal
se usa mucho para cuando preguntamos conectate a la bbdd o finaliza die()
*/