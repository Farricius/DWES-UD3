<?php
$poblacion = "";
$codigoPostal = "";
$provincia = "";
$imagen = "";
$cajaTexto = "";

$errorPoblacion = "";
$errorCodigoPostal = "";
$errorProvincia = "";
//$errorImagen = "";

$nextPage = true;


function makeSafe($variable)
{
    $variable = stripslashes($variable);
    $variable = strip_tags($variable);
    $variable = htmlspecialchars($variable);
    return $variable;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $poblacion = makeSafe($_POST["poblacion"]);
    if (empty($poblacion)) {
        $errorPoblacion = "Campo Obligatorio a rellenar";
        $nextPage = false;
    } else if (!preg_match("/^[a-zA-Z ]+$/", $poblacion)) {
        $errorPoblacion = "Utilice letras A-Z";
        $nextPage = false;
    }

    $codigoPostal = makeSafe($_POST["codigoPostal"]);
    if (empty($codigoPostal)) {
        $errorCodigoPostal = "Campo Obligatorio a rellenar";
        $nextPage = false;
    } else if (!preg_match("/^[0-9]+$/", $codigoPostal)) {
        $errorCodigoPostal = "Utilice números";
        $nextPage = false;
    }

    if (isset($_POST["provincia"])) {
        foreach ($_POST["provincia"] as $valorProvincia) {
            echo $valorProvincia;
        }
    } else {
        $errorProvincia = "Campo Obligatorio, seleccione (1)";
        $nextPage = false;
    }

    $cajaTexto = makeSafe($_POST["cajaTexto"]);

    if ($nextPage) {
        header("Location:/DWES-UD3/ejercicio18-completado.php");
    }

}