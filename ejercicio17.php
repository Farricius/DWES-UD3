<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<?php

// DECLARACIÓN VARIABLES Y SEGURIDAD
$errorName = "";
$errorSurname = "";
$errorDireccion = "";
$errorInternet = "";
$errorInstituto = "";
$errorInstitutoRegex = "";
$errorEstudios = "";
$errorDias = "";
$errorPreferencias = "";

$name = "";
$surname = "";
$direccion = "";
$internet = "";
$instituto = "";
$estudios = "";
$dias = "";
$preferencias = "";
$cajaTexto = "";

// function makeSafe($name, $surname, $direccion, $estudios, $cajaTexto)
// {
//     $name = stripslashes($name);
//     $name = strip_tags($name);
//     $name = htmlspecialchars($name);
//     $surname = stripslashes($surname);
//     $surname = strip_tags($surname);
//     $surname = htmlspecialchars($surname);
//     $direccion = stripslashes($direccion);
//     $direccion = strip_tags($direccion);
//     $direccion = htmlspecialchars($direccion);
//     $estudios = stripslashes($estudios);
//     $estudios = strip_tags($estudios);
//     $estudios = htmlspecialchars($estudios);
//     $cajaTexto = stripslashes($cajaTexto);
//     $cajaTexto = strip_tags($cajaTexto);
//     $cajaTexto = htmlspecialchars($cajaTexto);
// }

// function makeSafe($variable)
// {
//     $variable = stripslashes($variable);
//     $variable = strip_tags($variable);
//     $variable = htmlspecialchars($variable);
//     return $variable;
// }

// ENVIAR PROCESAR TODO

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $errorName = "Nombre es un campo obligatorio";
    } else {
        $name = $_POST["name"];
    }

    if (empty($_POST["surname"])) {
        $errorSurname = "Apellidos es un campo obligatorio";
    } else {
        $surname = $_POST["surname"];
    }

    if (empty($_POST["adress"])) {
        $errorDireccion = "La dirección es un campo obligatorio";
    } else {
        $direccion = $_POST["adress"];
    }

    if (isset($_POST["internet"])) {
        foreach ($_POST["internet"] as $valorRadio) {
            echo $valorRadio;
        }
    } else {
        $errorInternet = "Indique su conexión a Internet, por favor";
    }

    $instituto = ($_POST["instituto"]);

    if (empty($instituto)) {
        $errorInstituto = "Campo Obligatorio a rellenar";
    } else if (!preg_match("/^IES/", $instituto)) {
        $errorInstituto = "Error. Debe empezar por IES";
    }

    if (empty($_POST["estudios"])) {
        $errorEstudios = "Indique sus estudios, es un campo obligatorio";
    } else {
        $estudios = $_POST["estudios"];
    }

    if (isset($_POST["dias"])) {
        foreach ($_POST["dias"] as $valorDiasElegidos) {
            echo $valorDiasElegidos;
        }
    } else {
        $errorDias = "Indique un día (mínimo), por favor";
    }

    if (isset($_POST["checkboxes"])) {
        foreach ($_POST["checkboxes"] as $valorCheckboxMulti) {
            echo $valorCheckboxMulti;
        }
    } else {
        $errorPreferencias = "Indique sus preferencias, por favor";
    }

    $cajaTexto = $_POST["cajaTexto"];
}

//makeSafe($name, $surname, $direccion, $estudios, $cajaTexto);


?>

<body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="Post">

        <fieldset>
            <legend>Formulario de Opciones:</legend>

            <label for="name">Nombre:</label>
            <input type="text" name="name" value="<?php echo $name; ?>" />
            <span style="color:red">*<?php echo $errorName; ?></span><br><br>

            <label for="surname">Apellidos:</label>
            <input type="text" id="surname" name="surname" value="<?php echo $surname; ?>">
            <span style="color:red">*<?php echo $errorSurname; ?></span><br><br>

            <label for="adress">Dirección:</label>
            <input type="adress" id="adress" name="adress" value="<?php echo $direccion; ?>">
            <span style="color:red">*<?php echo $errorDireccion; ?></span><br><br>

            <input type="radio" id="wifi" name="internet[]" value="Wifi"> <label for="Wifi">Wifi</label>
            <input type="radio" id="cable" name="internet[]" value="Cable"> <label for="Cable">Cable</label>
            <input type="radio" id="fibra" name="internet[]" value="Fibra"><label for="fibra">Fibra</label>

            <span style="color:red">*<?php echo $errorInternet; ?></span><br><br>

            <label for="instituto">Instituto:</label>
            <input type="text" id="instituto" name="instituto" value="<?php echo $instituto; ?>" />
            <span style="color:red">*<?php echo $errorInstituto; ?></span><br><br>

            <label for="estudios">Estudios elegidos:</label>
            <input type="text" id="estudios" name="estudios" value="<?php echo $estudios; ?>" />
            <span style="color:red">*<?php echo $errorEstudios; ?></span><br><br>

            <select name="dias[]" id="dias" multiple>
                <option value="Lunes">Lunes</option>
                <option value="Martes">Martes</option>
                <option value="Miércoles">Miércoles</option>
                <option value="Jueves">Jueves</option>
                <option value="Viernes">Viernes</option>
            </select>
            <span style="color:red">*<?php echo $errorDias ?></span>
        </fieldset>

        <fieldset>
            <legend>Preferencias:</legend>
            <input type="checkbox" name="checkboxes[]" value="Historia"> Historia</label>
            <input type="checkbox" name="checkboxes[]" value="Geografía"> Geografía</label>
            <input type="checkbox" name="checkboxes[]" value="Lengua"> Lengua</label>
            <input type="checkbox" name="checkboxes[]" value="Matemáticas"> Matemáticas</label>
            <span style="color:red">*<?php echo $errorPreferencias; ?></span><br>

            <textarea name="cajaTexto" rows="8" cols="40" placeholder="Inserte aqui el texto..."></textarea>

            <input type="submit" name="enviar" value="Aceptar" />
            <input type="reset" name="cancelar" value="Cancelar" />
        </fieldset>
    </form>

    <p>

    </p>

</body>


</html>