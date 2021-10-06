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

    $meses = [];
    $meses[] = "Enero";
    $meses[] = "Febrero";
    $meses[] = "Marzo";
    print_r($meses);
    echo "<br>";
    echo count($meses);
    echo "<br>";

    $meses[] = 7;
    $meses[] = "Abril";
    $meses[] = true;
    $meses[] = "Junio";
    print_r($meses);
    echo "<br>";
    echo count($meses); // Puede guardar count en Variable y más estético

    unset($meses[3]);     // El número 7 y su posición [3] ha sido eliminado totalmente

    $meses[5] = "Mayo";
    $meses[] = "Julio";
    $meses[] = "Agosto   ";
    $meses[] = "Septiembre";
    $meses[] = "Octubre";
    $meses[] = "Noviembre";
    $meses[] = "Diciembre";
    echo "<br>";
    print_r($meses);
    echo "<br>";
    echo count($meses);

    ?>

</body>

</html>

<!-- Elabora un script de PHP incrustado en el lenguaje de marcas HTML5 adecuado de forma que:
Se declare 1 variable vacía de tipo array de nombre Meses.
Se añadan los meses de Enero, Febrero y Marzo en las posiciones por defecto.
Se muestre por pantalla el contenido del array.
Se muestre por pantalla la cantidad de elementos contenidos.
Se añada el número 7, el mes de Abril, el valor true y el mes de Junio.
Muestra el contenido y la cantidad de elementos por pantalla.
Elimina el número 7, ¿Qué ha pasado?
Modifica el valor true por el mes que corresponda y completa el array con los meses que faltan.
Muestra por pantalla el array completo -->