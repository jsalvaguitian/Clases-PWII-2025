<?php
/*para obtener el valor de la variable que fue enviada por la url */
/*if(isset($_GET['nombre'])){
    echo "Nombre: ".$_GET['nombre'];

}else{
    echo "Up! no existe la variable 'nombre'";

}*/

if(isset($_POST['nombre'])){
    echo "Nombre: ".$_POST['nombre']."</br>";

}else{
    echo "Up! no existe la variable 'nombre'";

}

if(isset($_POST['email'])){
    echo "Email: ".$_POST['email']."</br>";

}else{
    echo "Up! no existe la variable 'email'";

}

if(isset($_POST['fecha'])){
    echo "Fecha: ".$_POST['fecha'];

}else{
    echo "Up! no existe la variable 'fecha'";

}