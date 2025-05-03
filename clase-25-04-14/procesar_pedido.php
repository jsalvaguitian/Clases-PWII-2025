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
        <h2>Procesando pedido</h2>
    </div>

    <?php

    function showGetVariable($variable, $title){
        return "<div class='w3-card w3-margin'> 
        $title:". $_POST[$variable]."</div>";
    }

    /*.= Concatena vs += suma numeros */
    function showGetArray($variable, $title){
        $resultado="";
        $array = $_POST[$variable];
        foreach($array as $elemento ){
            $resultado .= "<div class='w3-card w3-margin'> 
        $title:". $elemento."</div>";
        }

        return $resultado;
    }
    //TODO: Arreglar 1 WARNING
    
//para seleccionar multilinea para escribir alt+shift
    echo showGetVariable("cliente", "Cliente");
    echo showGetVariable("email", "Email");
    echo showGetVariable("hamburguesa", "Hamburguesa");
    echo showGetVariable("cantidad", "Cantidad de hamburguesas");
    echo showGetVariable("fecha_entrega", "Fecha de entrega");
    echo showGetVariable("comentarios","Otros detalles");
    echo showGetVariable("combo_password","Password");
    echo showGetVariable("info","Toco info?");
    echo showGetVariable("bebida","Bebida (Oculto)");
    echo showGetArray("extras", "Ingredientes extras");

    if(isset($_FILES['foto_combo']) && $_FILES['foto_combo']['error'] == UPLOAD_ERR_OK){
        $nombreTemporal = $_FILES['foto_combo']['tmp_name'];
        $nombreFinal = basename($_FILES['foto_combo']['name']);

        //ruto de destino (asegurate que tenga permiso de escribir)
        $destino = 'uploads/'.$nombreFinal;

        //crear carpeta si no existe
        if(!is_dir('uploads')){
            mkdir('uploads',0777,true);
        }

        //mover el archivo a su destino final
        if(move_uploaded_file($nombreTemporal, $destino)){
            echo "Imagen subida exitosamente: <a href='$destino'>$nombreFinal</a>";
            echo "<br><img src= '$destino' style= 'max-width:300px'>";
        }else{
            echo "Hubo un error al mover imagen"; 
        }

    }else{
        echo "No se subió ninguna imagen.";
    }
?>

</div>

</body>
</html>