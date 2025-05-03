<?php
session_start();

//Simulacion de credenciales validas
$usuario_valido = "admin";
$contrasenia_valida = "1234";

//obtener datos del form
$usuario = isset($_POST['usuario']) ? $_POST['usuario']: '';
$contrasenia = isset($_POST['contrasena'])? $_POST['contrasena']: '';

//Verificar credenciales
if($usuario === $usuario_valido && $contrasenia === $contrasenia_valida){
    $_SESSION['usuario'] = $usuario;//escribe en la variable session 
    echo "Login exitoso. <a href ='privado.php'>Ir al area privada</a>";  

}else{
    echo "Credenciales incorrectas. <a href='login.php'> Intentar de nuevo </a>";
}