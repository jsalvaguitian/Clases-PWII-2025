<?php
//DESVENTAJAS:
/*
El modo de usarlos ya que tenemos que pedir por 
orden las columnas, y si la pifio se rompe. 
En cambio en objetos ya me devuelto todo
 */
//PDO es una forma de php para comuncarme a cualquier base de datos 
// prepared_statement
//mysqli con objetos y como reutilizarlo esto Nosotros

$host = 'localhost';
$db = 'ejemplo';
$user = 'root';
$pass = '';
$port = '3307';

//conectarnos
$database = mysqli_connect($host, $user, $pass,$db, $port) or die("Error al conectar con la base de datos");//recomendable manejar errores para que no se cierre a lo brusco

//obtener datos
$sql = "SELECT * FROM persona";

//si agrego otro parametros mas puedo hacer que me devuelva una array
$datos =mysqli_query($database, $sql);  //me trae mysql_result

//modo de usarlos
//muestro los datos de mi bbdd
/*
for($i =0; $i<mysqli_num_rows($datos); $i++){
    $fila = mysqli_fetch_array($datos);
    echo $fila['nombre']." ".$fila['email']."<br>";
}*/

while($fila = mysqli_fetch_array($datos))
    echo $fila['nombre']." ".$fila['email']."<br>";

//cerrar conexion
mysqli_close($database);