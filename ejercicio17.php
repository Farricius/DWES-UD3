<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<?php

$errorName = "";
$errorSurname = "";
$errorDireccion = "";
$errorInternet = "";
$errorInstituto = "";
$errorEstudios = "";

$name = "";
$surname = "";
$direccion = "";
$internet = "";
$estudios = "";
$dias = "";

$instituto = "";
$estudios = "";

function makeSafe($name, $surname, $direccion)
{
    $name = stripslashes($name);
    $name = strip_tags($name);
    $name = htmlspecialchars($name);

    $surname = stripslashes($surname);
    $surname = strip_tags($surname);
    $surname = htmlspecialchars($surname);

    $direccion = stripslashes($direccion);
    $direccion = strip_tags($direccion);
    $direccion = htmlspecialchars($direccion);
}

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

    if (empty($_POST["internet"])) {
        $errorInternet = "La conexión es obligatoria";
    } else {
        $internet = $_POST["internet"];
    }

    if (empty($_POST["instituto"])) {
        $errorInstituto = "El instituto es un campo obligatorio";
    } else {
        $instituto = $_POST["instituto"];
    }

    if (!preg_match("/^IES/", $instituto)) {
        $errorInstituto = "El instituto (obligatorio) debe empezar por patrón IES";
    } else {
        $instituto = $_POST["instituto"];
    }

    if (empty($_POST["estudios"])) {
        $errorEstudios = "Indique sus estudios, es un campo obligatorio";
    } else {
        $estudios = $_POST["estudios"];
    }

    if(isset($_POST["dias"])){
        echo "Campos de SELECT Multiple - OK:";
        /*
        Es un array como los checkbox, y  funciona exactamente igual.
        */
        foreach($_POST["dias"] as $valorSelectMultiple){
            echo " ".$valorSelectMultiple;
        }
        echo "<br/>";
    }else{
        echo "Ninguno de las 3 opciones de la lista han sido seleccionadas.";
    }

}

// <input type="text" name="usuario" value="<?php echo $usuario; 
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


            <!-- divisor borrar -->

            <input type="radio" id="wifi" name="internet" value="wifi"> <label for="Wifi">Wifi</label>
            <!-- <?php if ($internet == "wifi") echo "checked"; ?> -->

            <input type="radio" id="cable" name="internet" value="cable"> <label for="Cable">Cable</label>
            <!-- <?php if ($internet == "cable") echo "checked"; ?> -->

            <input type="radio" id="fibra" name="internet" value="fibra"><label for="fibra">Fibra</label>
            <!-- <?php if ($internet == "fibra") echo "checked"; ?> -->

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
        </fieldset>

        <fieldset>
            <legend>Preferencias:</legend>
            <input type="checkbox" id="prefe1" name="prefe1" value="Historia"><label for="prefe1"> Historia</label>
            <input type="checkbox" id="prefe2" name="prefe2" value="Geografía"><label for="prefe2"> Geografía</label>
            <input type="checkbox" id="prefe3" name="prefe3" value="Lengua"><label for="prefe3"> Lengua</label>
            <input type="checkbox" id="prefe4" name="prefe4" value="Matemáticas"><label for="prefe4"> Matemáticas</label>
            <br>
            <textarea rows="8" cols="40" placeholder="Inserte aqui el texto..."></textarea>

            <input type="submit" name="enviar" value="Aceptar" />
            <input type="reset" name="cancelar" value="Cancelar" />
        </fieldset>
    </form>

    <p>

    </p>

</body>


</html>