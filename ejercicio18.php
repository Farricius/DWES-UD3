<!-- Elabora un script de PHP incrustado en el lenguaje de marcas HTML5 adecuado de forma que contenga un formulario con los siguientes criterios:
2 campos de texto: Población y código postal, el primero tiene que ser solo texto y el segundo solo números. Ambos son requeridos.
8 radio button con las provincias, de forma que solo podamos elegir una. Requerido.
1 textarea descripción del municipio que sea seguro y no obligatorio.
Campo de imagen no obligatorio. COMPLETA EL FORMULARIO ANTES DE PELEARTE CON ESTE APARTADO.
Botón de envío.
Botón de reset.
Si todos los campos cumplen los criterios ve a una nueva página correcto.php que muestre un mensaje: ¡RECIBIDO!
Guardalo como ejercicio18.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php include_once 'ejercicio18-f.php'; //INCLUDEEEEEEEEEEEEEEEEEEEEEE 
    ?>


    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="Post">

        <fieldset>
            <legend>Formulario:</legend>

            <label for="name">Población:</label>
            <input type="text" name="poblacion" value="<?php echo $poblacion; ?>" />
            <span style="color:red">*<?php echo $errorPoblacion; ?></span><br><br>

            <label for="codigoPostal">Cód. Postal:</label>
            <input type="text" name="codigoPostal" value="<?php echo $codigoPostal; ?>" />
            <span style="color:red">*<?php echo $errorCodigoPostal; ?></span><br><br>

            <input type="radio" name="provincia[]" value="Sevilla" id="Sevilla"> <label for="Sevilla">Sevilla</label>
            <input type="radio" name="provincia[]" value="Málaga" id="Málaga"> <label for="Málaga">Málaga</label>
            <input type="radio" name="provincia[]" value="Córdoba" id="Córdoba"> <label for="Córdoba">Córdoba</label>
            <input type="radio" name="provincia[]" value="Granada" id="Granada"> <label for="Granada">Granada</label>
            <input type="radio" name="provincia[]" value="Cádiz" id="Cádiz"> <label for="Cádiz">Cádiz</label>
            <input type="radio" name="provincia[]" value="Huelva" id="Huelva"> <label for="Huelva">Huelva</label>
            <input type="radio" name="provincia[]" value="Jaén" id="Jaén"> <label for="Jaén">Jaén</label>
            <input type="radio" name="provincia[]" value="Almería" id="Almería"> <label for="Almería">Almería</label>
            <span style="color:red">*<?php echo $errorProvincia; ?></span><br><br>

            <!-- MAKESAFE -->
            <textarea name="cajaTexto" rows="2" cols="20" placeholder="Descripción Municipio.."></textarea><br><br>

            <!-- IMAGEN - EXAMINAR -- HAZ EL PHP -->
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <p>Por favor, seleccione imagen:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Subir Imagen" name="submit">
                </p>
            </form>
            <br><br>

            <input type="submit" name="enviar" value="Enviar" />
            <input type="reset" name="cancelar" value="Cancelar" />

        </fieldset>
    </form>
</body>

</html>