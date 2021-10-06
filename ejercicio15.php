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

    $productos = [];
    $productos[] = array("Nombre" => "Pan", "precio" => 1, "stock" => 6000, "identificador" => 6571);
    $productos[] = array("Nombre" => "Vino", "precio" => 10, "stock" => 5000, "identificador" => 567);
    $productos[] = array("Nombre" => "Zumo", "precio" => 2, "stock" => 1000, "identificador" => 711);

    var_dump($productos); // Muestra info total

    echo "<table border = 2>";
    echo "<th>Nombre</th>";
    echo "<th>Precio</th>";
    echo "<th>Stock</th>";
    echo "<th>ID</th>";

    foreach ($productos as $row) {

        echo "<tr>";
        echo "<td>$row[Nombre]</td>";
        echo "<td>$row[precio]</td>";
        echo "<td>$row[stock]</td>";
        echo "<td>$row[identificador]</td>";
        echo "</tr>";
    }

    echo "</table>";

    ?>
</body>

</html>

<!-- Elabora un script de PHP incrustado en el lenguaje de marcas HTML5 adecuado de forma que:
Se declare 1 variable que sea una matriz de nombre productos, dentro contendrá 3 productos con estas características:
Nombre.
Precio.
Stock.
Identificador.
Muestra por pantalla la matriz completa.
Utiliza un bucle foreach para mostrar todos los elementos de la matriz dentro de una tabla.
Guárdalo como ejercicio15.php -->