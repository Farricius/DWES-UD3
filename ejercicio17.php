<!DOCTYPE html>
<html lang="en">

<head>x
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<?php

$errorName = "";

$name = "";
$surname = "";
$adress = "";
$internet = "";
$dias = "";

$instituto = "";
$estudios = "";

function makeSafe($name, $surname, $adress)
{
    $name = stripslashes($name);
    $name = strip_tags($name);
    $name = htmlspecialchars($name);

    $surname = stripslashes($surname);
    $surname = strip_tags($surname);
    $surname = htmlspecialchars($surname);

    $adress = stripslashes($adress);
    $adress = strip_tags($adress);
    $adress = htmlspecialchars($adress);
}

// <input type="text" name="usuario" value="<?php echo $usuario; 
?>

<body>

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="Post">

        <fieldset>
            <legend>Formulario de Opciones:</legend>

            <label for="name">Nombre:</label> <input type="text" id="name" name="name" value="<?php echo $name; ?>" />
            <span style="color:red"><?php echo $errorName; ?>*</span><br><br>

            <?php

            ?>

            <label for="surname">Apellidos:</label> <input type="text" id="surname" name="surname" value="<?php echo $surname; ?>"><br><br>
            <label for="adress">Dirección:</label> <input type="adress" id="adress" name="adress" value="<?php echo $adress; ?>"><br><br>

            <input type="radio" id="wifi" name="internet" value="wifi"> <label for="Wifi">Wifi</label>
            <?php if ($internet == "wifi") echo "checked"; ?>

            <input type="radio" id="cable" name="internet" value="cable"> <label for="Cable">Cable</label>
            <?php if ($internet == "cable") echo "checked"; ?>

            <input type="radio" id="fibra" name="internet" value="fibra"><label for="fibra">Fibra</label>
            <?php if ($internet == "fibra") echo "checked"; ?>
            <br><br>

            <label for="instituto">Instituto:</label> <input type="text" id="instituto" name="instituto" value="<?php echo $instituto; ?>" /><br><br>
            <label for="estudios">Estudios elegidos:</label> <input type="text" id="estudios" name="estudios" value="<?php echo $estudios; ?>" /><br><br>

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
        </fieldset>
    </form>


</body>


</html>