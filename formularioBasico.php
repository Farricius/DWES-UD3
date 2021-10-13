<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>

    <?php

    $errorUsuario = "Error de usuario";
    $errorContrasenya = "Error de contrasenya";

    include "procesaFormulario.php";

    ?>

    <h1>Formulario Actividad Aula</h1>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="Post">
        <p>
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" value="<?php echo $usuario; ?>" />
            <span style="color:red"><?php echo $errorUsuario; ?> *</span>
        </p>
        <p>
            <label for="contrasenya">Contraseña</label>
            <input type="password" name="contrasenya" value="<?php echo $contrasenya; ?>" />
            <span style="color:red"><?php echo $errorContrasenya ?> *</span>
        </p>
        <p>
            <input type="submit" name="enviar" value="Aceptar" />
            <input type="reset" name="cancelar" value="Cancelar" />
        </p>
    </form>
</body>

</html>


</html>