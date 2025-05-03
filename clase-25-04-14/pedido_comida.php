<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Pedido</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        body {
            background-color: #fff8e1;
        }

        .mac-style {
            background-color: #ffe600; /* amarillo tipo McDonald's */
            border: 2px solid #ff0000;
            border-radius: 10px;
            padding: 20px;
        }

        .mac-header {
            background-color: #ff0000;
            color: white;
            padding: 10px;
            border-radius: 10px 10px 0 0;
            text-align: center;
        }

        .mac-label {
            color: #b30000;
            font-weight: bold;
        }

        .mac-submit {
            background-color: #ff0000;
            color: white;
        }

        .mac-button {
            background-color: #ffe600;
            color: #ff0000;
            border: 1px solid #ff0000;
        }
    </style>
</head>
<body class="w3-container">

<div class="w3-card-4 mac-style w3-margin">
    <div class="mac-header">
        <h2>Pedido de Hamburguesa</h2>
    </div>

    
    <!--Para subir imagen si o si en post y enctype multipart-->
    <form method="POST" action="procesar_pedido.php" enctype="multipart/form-data">

        <!-- Nombre del cliente -->
        <label class="mac-label">Nombre</label>
        <input class="w3-input w3-border" type="text" name="cliente" placeholder="Tu nombre" required>

        <!-- Email del cliente -->
        <label class="mac-label">Email</label>
        <input class="w3-input w3-border" type="email" name="email" placeholder="Tu email">

        <!-- Tipo de hamburguesa -->
        <p class="mac-label">Tipo de Hamburguesa</p>
        <input class="w3-radio" type="radio" name="hamburguesa" value="simple" checked>
        <label>Simple</label><br>
        <input class="w3-radio" type="radio" name="hamburguesa" value="doble">
        <label>Doble</label><br>
        <input class="w3-radio" type="radio" name="hamburguesa" value="vegana">
        <label>Vegana</label><br>

        <!-- Cantidad -->
        <label class="mac-label">Cantidad</label>
        <input class="w3-input w3-border" type="number" name="cantidad" min="1" value="1">

        <!-- Fecha de entrega -->
        <label class="mac-label">Fecha de entrega</label>
        <input class="w3-input w3-border" type="date" name="fecha_entrega">

         <!-- Comentarios -->
         <label class="mac-label">Comentarios o instrucciones especiales</label>
        <textarea class="w3-input w3-border" name="comentarios" rows="4" placeholder="Ej: sin cebolla, con ketchup extra..."></textarea>

        <!-- Contraseña -->
        <label class="mac-label">Clave secreta del combo</label>
        <input class="w3-input w3-border" type="password" name="combo_password">

        <!-- Bebida por defecto (hidden) -->
        <input type="hidden" name="bebida" value="coca_cola">

        <!-- Botón informativo -->
        <button class="w3-button mac-button w3-margin-top" name="info" type="button" onclick="alert('Gracias por elegirnos 🍔')">
            Info del Local
        </button>

        <!-- Agregados -->
        <p class="mac-label">Agregados</p>
        <input class="w3-check" type="checkbox" name="extras[]" value="queso">
        <label>Queso</label><br>
        <input class="w3-check" type="checkbox" name="extras[]" value="bacon">
        <label>Bacon</label><br>
        <input class="w3-check" type="checkbox" name="extras[]" value="huevo">
        <label>Huevo</label><br>
       
        <!-- Subida de imagen -->
        <label class="mac-label">Foto de tu combo soñado (opcional)</label>
        <input class="w3-input" type="file" name="foto_combo">

        

        <!-- Botón de envío -->
        <button class="w3-button mac-submit w3-margin-top" type="submit">
            Hacer Pedido
        </button>

    </form>
</div>

</body>
</html>