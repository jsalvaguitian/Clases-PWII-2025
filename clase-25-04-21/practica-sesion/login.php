<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Iniciar sesion</h2>
    <form action="procesar_login.php" method="post">
        <label>Usuario: </label>
        <input type = "text" name= "usuario" required><br><br>
        <label>Contraseña: </label>
        <input type= "password" name="contrasena" required><br><br>
        <input type="submit" value="Ingresar">
    </form>
</body>
</html>