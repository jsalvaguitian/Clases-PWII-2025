<?php
/*para obtener el valor de la variable que fue enviada por la url */
if(isset($_GET['nombre'])){
    echo "Nombre: ".$_GET['nombre'];

}else{
    echo "Up! no existe la variable 'nombre'";

}