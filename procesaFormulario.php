<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $usuario = "";
    $contrasenya = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    $usuario = $_POST["usuario"];

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    $contrasenya = $_POST["contrasenya"];

    echo "El usuario $usuario tiene la contrasenya $contrasenya";

    if (empty($usuario)) {
        echo "EL usuario debe estar rellenado";
    }

    if (empty($contrasenya)) {
        echo "La contrasenya debe estar rellenada";
    }

    //SEGURIDAD y REGEX:

    //preg_match() // {8,20}  [a-zA-Z] --- \w(8,) ---- 'w{8,}\d.*[A-Z] | [A-Z].*\d'

    //$usuario = strip_tags($usuario);
    //$usuario = stripslashes($usuario);
    //$usuario = htmlspecialchars($usuario);


    ?>
</body>

</html>